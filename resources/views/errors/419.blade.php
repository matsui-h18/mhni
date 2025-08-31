{{-- resources/views/errors/419.blade.php --}}
<x-guest-layout>
    <div class="text-center mt-20">
        <h1 class="text-2xl font-bold text-red-600 mb-4">セッションが切れました</h1>
        <p class="mb-6">一定時間操作がなかったため、セッションが失効しました。</p>
        <p class="text-gray-500">3秒後にログイン画面へ戻ります...</p>
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "{{ url('/') }}";
        }, 3000); // 3秒（3000ミリ秒）
    </script>
</x-guest-layout>
