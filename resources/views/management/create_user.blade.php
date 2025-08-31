<x-app-layout>
    <div class="max-w-xl mx-auto mt-5 mb-20">
        <h2 class="text-xl font-bold mb-4">新規ユーザー登録</h2>

        <form method="POST" action="{{ url('/management/users') }}">
            @csrf

            <div class="mb-4">
                <label for="emp_id">社員番号</label>
                <input type="number" name="emp_id" class="w-full border p-2" required>
            </div>

            @error('emp_id')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror

            <div class="mb-4">
                <label for="emp_name">氏名</label>
                <input type="text" name="emp_name" class="w-full border p-2" required value="{{ old('emp_name') }}">
            </div>

            <div class="mb-4">
                <label>部署</label>
                <div class="flex gap-x-6">
                    <label class="inline-flex items-center">
                        <input type="radio" name="dep_id" value="1" class="form-radio text-indigo-600" required checked {{ old('dep_id') == 1 ? 'checked' : '' }}>
                        <span class="ml-2">一般社員</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="dep_id" value="2" class="form-radio text-indigo-600" required {{ old('dep_id') == 2 ? 'checked' : '' }}>
                        <span class="ml-2">経理部</span>
                    </label>
                </div>
            </div>


            <div class="mb-4">
                <label for="password">パスワード</label>
                <input type="password" name="password" class="w-full border p-2" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation">パスワード（確認）</label>
                <input type="password" name="password_confirmation" class="w-full border p-2" required>
            </div>

            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded ml-4">登録</button>
        </form>
        <div class="mt-6 mb-5">
        <a href="{{ route('management.users.index') }}"
            class="inline-block bg-gray-300 text-black px-4 py-2 rounded hover:bg-gray-300 mx-4 transition">
            ← ユーザー一覧に戻る
        </a>
    </div>
    </div>
</x-app-layout>
