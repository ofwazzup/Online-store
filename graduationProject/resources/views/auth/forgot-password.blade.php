@section('head')
    Spices and Seasonings - Восстановление пароля
@endsection
<x-guest-layout>
    <div class="auth__bg-img">
        <div class="fullscreen-form-login">
            <div class="fullscreen__body container__login-form">
                <div class="login-form">
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Забыли свой пароль? Нет проблем. Просто сообщите нам свой адрес электронной почты, и мы вышлем вам по ссылку для сброса пароля, которая позволит вам выбрать новый.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Почтовый адрес')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button class="ml-3 btn btn-outline-secondary" style="padding: 8px 25px 8px 25px;">
                                {{ __('Отправить') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
