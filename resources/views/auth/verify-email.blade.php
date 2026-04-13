<x-guest-layout>

    <!-- Info Message -->
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Welcome! Please verify your email by clicking the link we sent. If you didn’t receive it, you can request another one below.') }}
    </div>

    <!-- Success Message -->
    @if(session('status') === 'verification-link-sent')
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ __('A fresh verification link has been sent to your email.') }}
        </div>
    @endif

    <!-- Actions -->
    <div class="mt-6 flex items-center justify-between">

        <!-- Resend Email -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button>
                {{ __('Send Again') }}
            </x-primary-button>
        </form>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button 
                type="submit"
                class="text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded-md"
            >
                {{ __('Sign Out') }}
            </button>
        </form>

    </div>

</x-guest-layout>
