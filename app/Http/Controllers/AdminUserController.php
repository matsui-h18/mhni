<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'emp_id' => 'required|integer|unique:users,emp_id',
            'password' => 'required|string|min:8|confirmed',
            'emp_name' => 'required|string|max:16',
            'dep_id' => 'required|integer',
        ]);

        User::create([
            'emp_id' => $request->emp_id,
            'password' => Hash::make($request->password),
            'emp_name' => $request->emp_name,
            'dep_id' => $request->dep_id,
        ]);

        return redirect()->route('management.users.index')->with('status', 'ユーザーを追加しました');
    }

    public function index()
    {
        if (auth()->user()->dep_id !== 2) {
            abort(403, 'この操作は許可されていません');
        }

        $users = User::where('id', '!=', auth()->id())->get();
        return view('management.user_list', compact('users'));
    }

    public function create()
    {
        return view('management.create_user');
    }

    public function destroy($id)
    {
        if (auth()->user()->dep_id !== 2) {
            abort(403, 'この操作は許可されていません');
        }

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('management.users.index')->with('status', 'ユーザーを削除しました');
    }

    public function edit($id)
    {
        if (auth()->user()->dep_id !== 2) {
            abort(403, 'この操作は許可されていません');
        }

        $user = User::findOrFail($id);
        return view('management.edit_user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $rules = [];

        if ($request->input('emp_id') != $user->emp_id) {
            $rules['emp_id'] = 'required|integer|unique:users,emp_id,' . $user->id;
        }

        if ($request->emp_name !== $user->emp_name) {
            $rules['emp_name'] = 'required|string|max:255';
        }

        if ((int)$request->dep_id !== (int)$user->dep_id) {
            $rules['dep_id'] = 'required|integer';
        }

        if ($request->filled('password')) {
            $rules['password'] = 'string|min:8|confirmed';
        }

        $validated = $request->validate($rules);

        $updateData = collect($validated)->except('password')->toArray();
        $user->update($updateData);

        if (isset($validated['password'])) {
            $user->update([
                'password' => Hash::make($validated['password']),
            ]);
        }

        return redirect()->route('management.users.index')
            ->with('status', 'ユーザー情報を更新しました');
    }
}
