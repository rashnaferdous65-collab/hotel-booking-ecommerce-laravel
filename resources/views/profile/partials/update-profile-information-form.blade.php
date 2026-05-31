```blade
<section class="space-y-8">

    <div>
        <h2 class="text-xl font-semibold text-gray-800">
            {{ __('Account Details') }}
        </h2>

        <p class="mt-2 text-sm text-gray-500">
            {{ __('Manage your personal information and email settings.') }}
        </p>
    </div>

    <form id="verification-form" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('profile.update') }}" class="space-y-5">
        @csrf
        @method('PATCH')

        <!-- Name Field -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" />

            <x-text-input
                id="name"
                name="name"
                type="text"
                class="block w-full mt-1"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('name')"
            />
        </div>

        <!-- Email Field -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="block w-full mt-1"
                :value="old('email', $user->email)"
                required
                autocomplete="username"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('email')"
            />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div class="mt-3 rounded-lg border p-3">
                    <p class="text-sm text-gray-700">
                        {{ __('Your email has not been verified yet.') }}
                    </p>

                    <button
                        form="verification-form"
                        class="mt-2 text-sm underline text-indigo-600 hover:text-indigo-800"
                    >
                        {{ __('Resend Verification Email') }}
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-green-600">
                            {{ __('Verification link sent successfully.') }}
                        </p>
                    @endif
                </div>

            @endif
        </div>

        <!-- Submit Button -->
        <div class="flex items-center gap-3">
            <x-primary-button>
                {{ __('Update Profile') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <span
                    x-data="{ visible: true }"
                    x-show="visible"
                    x-transition
                    x-init="setTimeout(() => visible = false, 2000)"
                    class="text-sm text-green-600"
                >
                    {{ __('Profile Updated Successfully!') }}
                </span>
            @endif
        </div>

    </form>

</section>
```

