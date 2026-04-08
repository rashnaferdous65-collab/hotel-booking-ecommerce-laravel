<x-guest-layout>

    <section class="mb-4 text-sm text-gray-600">
        {{ __('Please verify your password to continue accessing this secure section.') }}
    </section>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mt-3">
            <x-input-label for="password" value="Password" />

            <x-text-input
                id="password"
                name="password"
                type="password"
                class="w-full mt-1 block"
                placeholder="Enter your password"
                required
                autocomplete="current-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2 text-red-500"
            />
        </div>

        <div class="mt-5 flex justify-end">
            <x-primary-button class="px-4 py-2">
                Confirm Password
            </x-primary-button>
        </div>
        
    </form>

</x-guest-layout>
