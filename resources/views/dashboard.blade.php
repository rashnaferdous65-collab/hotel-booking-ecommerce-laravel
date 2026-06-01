<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-8">
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h3 class="text-xl font-semibold text-gray-800">
                            {{ __('User Dashboard') }}
                        </h3>
                        <p class="mt-2 text-gray-600">
                            {{ __("You're logged in!") }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>