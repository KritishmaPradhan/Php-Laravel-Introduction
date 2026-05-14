<x-guest-layout>
<div class="auth-header">
    <h1 class="auth-title">{{ __('Reset Password') }}</h1>
    <p class="auth-subtitle">{{ __('Forgot your password?') }}</p>
</div>

<p style="font-size: 0.875rem; color: #6b7280; margin-bottom: 1.5rem;">
    {{ __('No problem. Enter your email address and we\'ll send you a link to reset your password.') }}
</p>

@if (session('status'))
    <div class="auth-status success">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('password.email') }}" class="auth-form">
    @csrf

    <!-- Email Address -->
    <div class="auth-form-group">
        <label for="email" class="auth-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" name="email" class="auth-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus placeholder="Enter your email" />
        @error('email')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="auth-btn auth-btn-primary">
        {{ __('Send Reset Link') }}
    </button>
</form>

<div class="auth-footer">
    <a href="{{ route('login') }}" class="auth-link">{{ __('Back to Sign In') }}</a>
</div>
</x-guest-layout>
