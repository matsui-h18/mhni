<x-app-layout>
    <div class="max-w-xl mx-auto mt-5 mb-20">
        <h2 class="text-2xl font-bold mb-6 text-indigo-700 text-center">ユーザー情報の編集</h2>

        @if (session('status'))
            <div class="mb-4 text-green-600 font-semibold text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('management.users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <!-- 社員番号 -->
            <div class="mb-4 w-full">
                <x-input-label for="emp_id" :value="__('社員番号')" />
                <x-text-input id="emp_id" class="w-full border p-2" type="number" name="emp_id" :value="$user->emp_id" required />
                <x-input-error :messages="$errors->get('emp_id')" class="mt-2" />
            </div>

            <!-- 氏名 -->
            <div class="mb-4 w-full">
                <x-input-label for="emp_name" :value="__('氏名')" />
                <x-text-input id="emp_name" class="w-full border p-2" type="text" name="emp_name" :value="$user->emp_name" required />
                <x-input-error :messages="$errors->get('emp_name')" class="mt-2" />
            </div>

            <!-- 部署ID -->
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

            <!-- パスワード（任意） -->
            <div class="mb-4 w-full">
                <x-input-label for="password" :value="__('新しいパスワード（任意）')" />
                <x-text-input id="password" class="w-full border p-2" type="password" name="password" autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-4 w-full">
                <x-input-label for="password_confirmation" :value="__('パスワード確認')" />
                <x-text-input id="password_confirmation" class="w-full border p-2" type="password" name="password_confirmation" />
            </div>

            <div class="flex justify-between mt-4 mb-10">
                <x-primary-button>
                    {{ __('更新') }}
                </x-primary-button>

                <a href="{{ route('management.users.index') }}"
                   class="text-sm text-gray-600 hover:text-indigo-600">
                    戻る
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
