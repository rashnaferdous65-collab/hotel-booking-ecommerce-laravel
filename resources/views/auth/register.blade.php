<x-guest-layout>
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow">

        <h2 class="text-2xl font-bold text-center mb-6">Create Account</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" value="Full Name" />
                <x-text-input id="name" name="name" type="text"
                    class="w-full mt-1"
                    value="{{ old('name') }}" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-1" />
            </div>

            <!-- Email -->
            <div class="mb-4">
                <x-input-label for="email" value="Email Address" />
                <x-text-input id="email" name="email" type="email"
                    class="w-full mt-1"
                    value="{{ old('email') }}" required />
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>

            <!-- Phone & Address (side by side) -->
            <div class="grid grid-cols-2 gap-4 mb-4">
                
                <div>
                    <x-input-label for="phone" value="Phone" />
                    <x-text-input id="phone" name="phone" type="tel"
                        class="w-full mt-1"
                        value="{{ old('phone') }}" required />
                    <x-input-error :messages="$errors->get('phone')" class="mt-1" />
                </div>

                <div>
                    <x-input-label for="address" value="Address" />
                    <x-text-input id="address" name="address" type="text"
                        class="w-full mt-1"
                        value="{{ old('address') }}" required />
                    <x-input-error :messages="$errors->get('address')" class="mt-1" />
                </div>

            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" value="Password" />
                <x-text-input id="password" name="password" type="password"
                    class="w-full mt-1"
                    required />
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" value="Confirm Password" />
                <x-text-input id="password_confirmation" name="password_confirmation"
                    type="password"
                    class="w-full mt-1"
                    required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                <a href="{{ route('login') }}" class="text-sm text-blue-500 hover:underline">
                    Already have an account?
                </a>

                <x-primary-button>
                    Sign Up
                </x-primary-button>
            </div>

        </form>
    </div>
</x-guest-layout>
