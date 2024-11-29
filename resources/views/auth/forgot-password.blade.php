@include('room.navbar')
<x-guest-layout>
    <x-authentication-card>
        <!-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> -->

        <div class="flex flex-col sm:justify-center items-center">
            <div>
                <a href="/"><img src="{{ asset('assets/img/logo.jpg') }}" href="/" alt="" style="height:100px; width:200px;"></a>
            </div>
        </div>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
@include('room.footer')
