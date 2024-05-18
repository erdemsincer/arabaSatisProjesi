<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <p style="font-size: 40px; color:white"><b>Şifreni Yenile</b></p>
        </x-slot>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('E-Posta') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Şifre yenileme linki gönder') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
