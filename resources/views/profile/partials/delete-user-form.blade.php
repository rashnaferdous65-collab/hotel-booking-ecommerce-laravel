<section class="space-y-8">

    <!-- Heading -->
    <div>
        <h2 class="text-2xl font-semibold text-red-600">
            {{ __('Remove Account') }}
        </h2>

        <p class="mt-2 text-sm text-gray-500 leading-relaxed">
            {{ __('Deleting your account will permanently erase all your records, files, and related information. Please make sure you have saved any important data before continuing.') }}
        </p>
    </div>

    <!-- Delete Button -->
    <div>
        <x-danger-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="px-5 py-2"
        >
            {{ __('Delete My Account') }}
        </x-danger-button>
    </div>

    <!-- Modal -->
    <x-modal 
        name="confirm-user-deletion"
        :show="$errors->userDeletion->isNotEmpty()"
        focusable
    >

        <form method="POST" action="{{ route('profile.destroy') }}" class="p-8">

            @csrf
            @method('delete')

            <!-- Modal Title -->
            <h2 class="text-xl font-bold text-gray-800">
                {{ __('Confirm Account Deletion') }}
            </h2>

            <!-- Modal Description -->
            <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                {{ __('This action cannot be undone. To confirm permanent account deletion, please enter your password below.') }}
            </p>

            <!-- Password Field -->
            <div class="mt-6">
                <x-input-label 
                    for="password"
                    value="{{ __('Password') }}"
                    class="mb-2"
                />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full rounded-lg"
                    placeholder="{{ __('Enter your password') }}"
                />

                <x-input-error 
                    :messages="$errors->userDeletion->get('password')"
                    class="mt-2"
                />
            </div>

            <!-- Buttons -->
            <div class="mt-8 flex items-center justify-end gap-3">

                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('No, Cancel') }}
                </x-secondary-button>

                <x-danger-button>
                    {{ __('Yes, Delete') }}
                </x-danger-button>

            </div>

        </form>

    </x-modal>

</section>
