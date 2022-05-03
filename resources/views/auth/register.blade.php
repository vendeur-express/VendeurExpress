<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
              <!-- Email Address -->
              <div class="mt-4">
                <x-label for="image_id" :value="__('ImageId')" />

                <x-input id="image_id" class="block mt-1 w-full" type="image_id" name="image_id" required />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="userable_id" :value="__('Userable_ID')" />

                <x-input id="userable_id" class="block mt-1 w-full" type="userable_id" name="userable_id" required />
            </div>
             <!-- Email Address -->
             <div class="mt-4">
                <x-label for="userable_type" :value="__('Userable_ype')" />

                <x-input id="userable_type" class="block mt-1 w-full" type="userable_type" name="userable_type" required />
            </div>
             <!-- Email Address -->
             <div class="mt-4">
                <x-label for="tel_us" :value="__('Tel')" />

                <x-input id="tel_us" class="block mt-1 w-full" type="tel_us" name="tel_us" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
