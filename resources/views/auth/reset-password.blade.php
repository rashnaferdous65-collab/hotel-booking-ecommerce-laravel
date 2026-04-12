<x-guest-layout>
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow">

        <h2 class="text-xl font-semibold text-center mb-4">
            Reset Your Password
        </h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email -->
            <div class="mb-4">
                <x-input-label for="email" value="Email Address" />
                
                <x-text-input 
                    id="email"
                    name="email"
                    type="email"
                    class="w-full mt-1"
                    :value="old('email', $request->email)"
                    required
                />

                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" value="New Password" />
                
                <x-text-input 
                    id="password"
                    name="password"
                    type="password"
                    class="w-full mt-1"
                    required
                />

                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" value="Confirm Password" />
                
                <x-text-input 
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    class="w-full mt-1"
                    required
                />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
            </div>

            <!-- Button -->
            <div class="mt-6">
                <x-primary-button class="w-full justify-center">
                    Reset Password
                </x-primary-button>
            </div>

        </form>
    </div>
</x-guest-layout>
