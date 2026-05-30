
```blade
<section class="bg-white shadow rounded-lg p-6">
    <div class="border-b pb-4 mb-6">
        <h2 class="text-xl font-semibold text-gray-800">
            {{ __('Change Password') }}
        </h2>

        <p class="mt-2 text-sm text-gray-500">
            {{ __('Keep your account protected by choosing a strong and unique password.') }}
        </p>
    </div>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
        @csrf
        @method('PUT')

        <div class="grid gap-5">
            <div>
                <x-input-label
                    for="update_password_current_password"
                    :value="__('Current Password')"
                />

                <x-text-input
                    id="update_password_current_password"
                    name="current_password"
                    type="password"
                    class="mt-2 block w-full"
                    autocomplete="current-password"
                />

                <x-input-error
                    :messages="$errors->updatePassword->get('current_password')"
                    class="mt-2"
                />
            </div>

            <div>
                <x-input-label
                    for="update_password_password"
                    :value="__('New Password')"
                />

                <x-text-input
                    id="update_password_password"
                    name="password"
                    type="password"
                    class="mt-2 block w-full"
                    autocomplete="new-password"
                />

                <x-input-error
                    :messages="$errors->updatePassword->get('password')"
                    class="mt-2"
                />
            </div>

            <div>
                <x-input-label
                    for="update_password_password_confirmation"
                    :value="__('Confirm New Password')"
                />

                <x-text-input
                    id="update_password_password_confirmation"
                    name="password_confirmation"
                    type="password"
                    class="mt-2 block w-full"
                    autocomplete="new-password"
                />

                <x-input-error
                    :messages="$errors->updatePassword->get('password_confirmation')"
                    class="mt-2"
                />
            </div>
        </div>

        <div class="flex items-center justify-between pt-4">
            <x-primary-button>
                {{ __('Update Password') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <span
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm font-medium text-green-600"
                >
                    {{ __('Password Updated Successfully!') }}
                </span>
            @endif
        </div>
    </form>
</section>
```
