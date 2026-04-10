<x-guest-layout>
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-xl p-6 mt-10">

        <!-- Title -->
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Login to your account
        </h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-green-600 text-sm text-center" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email Address')" />
                
                <x-text-input 
                    id="email" 
                    class="block w-full mt-1 rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-400"
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus 
                />

                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500 text-sm" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                
                <x-text-input 
                    id="password" 
                    class="block w-full mt-1 rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-400"
                    type="password" 
                    name="password" 
                    required 
                />

                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500 text-sm" />
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center text-sm text-gray-600">
                    <input 
                        type="checkbox" 
                        name="remember" 
                        class="mr-2 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                    >
                    Remember me
                </label>

                @if (Route::has('password.request'))
                    <a 
                        href="{{ route('password.request') }}" 
                        class="text-sm text-indigo-600 hover:underline"
                    >
                        Forgot password?
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div>
                <x-primary-button class="w-full justify-center">
                    {{ __('Sign In') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
