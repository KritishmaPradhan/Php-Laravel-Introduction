<x-guest-layout>
<div class="auth-header">
    <h1 class="auth-title">{{ __('Verify Email') }}</h1>
    <p class="auth-subtitle">{{ __('Confirm your email address') }}</p>
</div>

<div style="font-size: 0.875rem; color: #6b7280; margin-bottom: 1.5rem;">
    {{ __('Thanks for signing up! Before getting started, please verify your email address by clicking on the link we just sent you. If you didn\'t receive the email, we\'ll be happy to send another.') }}
</div>

@if (session('status') == 'verification-link-sent')
    <div class="auth-status success">
        {{ __('A new verification link has been sent to the email address you provided.') }}
    </div>
@endif

<div class="auth-form" style="gap: 0.875rem;">
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="auth-btn auth-btn-primary">
            {{ __('Resend Verification Email') }}
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="auth-btn auth-btn-secondary">
            {{ __('Sign Out') }}
        </button>
    </form>
</div>
</x-guest-layout>
