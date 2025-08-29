<x-app-layout>
    <h1>サポート部署向けページ</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-red-600 hover:underline">
            ログアウト
        </button>
    </form>
    <form action="{{ route('back.to.start') }}" method="get">
        @csrf
        <button type="submit"
            class="px-4 py-2 bg-indigo-600 rounded hover:bg-indigo-700 transition">
            Topページに戻る
        </button>
    </form>
</x-app-layout>
