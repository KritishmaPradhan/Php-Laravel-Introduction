<x-guest-layout>
<div class="auth-header">
    <h1 class="auth-title">{{ __('Confirm Password') }}</h1>
    <p class="auth-subtitle">{{ __('Verify your identity') }}</p>
</div>

<p style="font-size: 0.875rem; color: #6b7280; margin-bottom: 1.5rem;">
    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
</p>

<form method="POST" action="{{ route('password.confirm') }}" class="auth-form">
    @csrf

    <!-- Password -->
    <div class="auth-form-group">
        <label for="password" class="auth-label">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" class="auth-input @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Enter your password" />
        @error('password')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="auth-btn auth-btn-primary">
        {{ __('Confirm') }}
    </button>
</form>
</x-guest-layout>
