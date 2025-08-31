<x-guest-layout>
    <div class="text-center mt-10 mb-6">
        <h1 class="text-2xl font-bold text-indigo-700">ユーザー管理画面ログイン</h1>
    </div>

    <x-auth-card>
        <form method="POST" action="{{ route('user.add.login') }}">
            @csrf

            <div>
                <x-input-label for="emp_id" :value="__('社員番号')" />
                <x-text-input id="emp_id" type="number" name="emp_id" required autofocus />
                <x-input-error :messages="$errors->get('emp_id')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('パスワード')" />
                <x-text-input id="password" type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-between mt-4">
                <form method="POST" action="{{ route('user.add.login') }}">
                    @csrf
                    <x-primary-button>{{ __('ログイン') }}</x-primary-button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="inline-block bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">
                        ログイン画面に戻る
                    </button>
                </form>
            </div>

    </x-auth-card>
</x-guest-layout>
