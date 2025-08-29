<x-app-layout>
    <h1>実験ページ</h1>
    <form action="{{ route('back.to.start') }}" method="get">
    <button type="submit"
        class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
        Topページに戻る
    </button>
</form>
</x-app-layout>
