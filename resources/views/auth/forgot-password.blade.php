<x-guest-layout>

    <div class="mb-6 text-center">
        <h2 class="text-lg font-semibold text-gray-700">
            Reset Your Password
        </h2>
        <p class="text-sm text-gray-500 mt-2">
            Enter your email and we’ll send you a reset link.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status 
        class="mb-4 text-green-600 text-center" 
        :status="session('status')" 
    />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label 
                for="email" 
                :value="__('Your Email Address')" 
                class="font-medium"
            />

            <x-text-input 
                id="email" 
                type="email" 
                name="email" 
                class="block w-full mt-1" 
                :value="old('email')" 
                placeholder="example@gmail.com"
                required 
                autofocus 
            />

            <x-input-error 
                :messages="$errors->get('email')" 
                class="mt-2 text-red-500"
            />
        </div>

        <!-- Button -->
        <div class="mt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Send Reset Link') }}
            </x-primary-button>
        </div>

    </form>

</x-guest-layout>