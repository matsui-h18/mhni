<x-guest-layout>
    <!-- タイトル -->
    <div class="text-center mt-10 mb-6">
        <h1 class="text-2xl font-extrabold text-indigo-700">MHNI</h1>
        <h3 class="text-2xl text-gray-600 mt-3">書籍管理システム</h3>
    </div>

    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('my-login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="emp_id" :value="__('社員番号')" />
                <x-text-input id="emp_id" class="block mt-1 w-full" type="number" name="emp_id" :value="old('emp_id')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('emp_id')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
