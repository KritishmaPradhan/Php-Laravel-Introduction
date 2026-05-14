<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Log Out') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('End your current session and log out from your account.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-danger-button onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-danger-button>
    </form>
</section>
