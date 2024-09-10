<x-guest-layout>
    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        {{ __('messages.login') }}
                    </h1>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <x-input-label for="email" value="{{ __('messages.email') }}" />
                            <x-text-input id="email" type="email" name="email" :value="old('email')" autofocus autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="password" value="{{ __('messages.password') }}" />
                            <x-text-input id="password" type="password" name="password" :value="old('password')" autofocus autocomplete="password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <x-primary-button class="ml-4">
                            {{ __('messages.login') }}
                        </x-primary-button>
                        <p class="text-sm font-light text-gray-500">
                            {{ __('messages.dont_have_account') }}? <a href="{{ route('register') }}" class="font-medium text-blue-500">{{ __('messages.register') }}</a>
                        </p>
                        <p class="text-sm font-light text-gray-500">
                            {{ __('messages.forgot_password') }}? <a href="{{ route('password.request') }}" class="font-medium text-primary-600 text-blue-500">{{ __('messages.reset') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
