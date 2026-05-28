```php
<x-app-layout>

    {{-- Page Header --}}
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-800">
                {{ __('My Profile') }}
            </h2>

            <span class="text-sm text-gray-500">
                Manage your account settings
            </span>
        </div>
    </x-slot>

    {{-- Main Section --}}
    <section class="py-10 bg-gray-100 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            {{-- Profile Information --}}
            <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">
                    Update Profile Information
                </h3>

                <div class="max-w-2xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            {{-- Password Update --}}
            <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">
                    Change Password
                </h3>

                <div class="max-w-2xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- Delete Account --}}
            <div class="bg-white border border-red-100 rounded-2xl shadow-md p-6">
                <h3 class="text-lg font-semibold text-red-600 mb-4">
                    Delete Account
                </h3>

                <div class="max-w-2xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </section>

</x-app-layout>
```

