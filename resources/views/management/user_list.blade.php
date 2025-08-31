<x-app-layout>
    <div style="margin: 50px;" class="max-w-5xl mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-indigo-700">ユーザー一覧</h2>

        @if (session('status'))
        <div class="mb-4 text-red-600 font-semibold">
            {{ session('status') }}
        </div>
        @endif

        <div style="margin-left: 50px;">
            <a href="{{ route('management.users.create') }}"
                class="inline-flex items-center gap-2 bg-white text-black px-4 py-2 rounded shadow-md hover:bg-indigo-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4v16m8-8H4" />
                </svg>
                ユーザー追加
            </a>
        </div>
        <br><br>

        <table class="w-full border-2 border-black">
            <thead class="bg-gray-100">
                <tr class="border-2 border-black">
                    <th class="border px-4 py-2 text-left">社員番号</th>
                    <th class="border px-4 py-2 text-left">氏名</th>
                    <th class="border px-4 py-2 text-left">部署ID</th>
                    <th class="border px-4 py-2 text-left">操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="border-2 border-black hover:bg-gray-50">
                    <td class="border px-4 py-2">{{ $user->emp_id }}</td>
                    <td class="border px-4 py-2">{{ $user->emp_name }}</td>
                    <td class="border px-4 py-2">{{ $user->dep_id }}
                        @if ($user->dep_id == 1)
                        （一般）
                        @elseif ($user->dep_id == 2)
                        （経理）
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <div class="flex gap-4">
                            <form method="POST" action="{{ route('management.users.edit', $user->id) }}">
                                @csrf
                                <a href="{{ route('management.users.edit', $user->id) }}"
                                    class="text-indigo-600 hover:underline">
                                    更新
                                </a>
                            </form>
                            <form method="POST" action="{{ route('management.users.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('本当に削除しますか？')"
                                    class="text-red-600 hover:underline">
                                    削除
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-gray-600 hover:text-red-600">
                    ログアウトして戻る
                </button>
            </form>
        </div>
    </div>

</x-app-layout>
