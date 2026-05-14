<x-guest-layout>
<div class="auth-header">
    <h1 class="auth-title">{{ __('Reset Your Password') }}</h1>
    <p class="auth-subtitle">{{ __('Create a new password') }}</p>
</div>

<form method="POST" action="{{ route('password.store') }}" class="auth-form">
    @csrf

    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <!-- Email Address -->
    <div class="auth-form-group">
        <label for="email" class="auth-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" name="email" class="auth-input @error('email') is-invalid @enderror" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" placeholder="Enter your email" />
        @error('email')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password -->
    <div class="auth-form-group">
        <label for="password" class="auth-label">{{ __('New Password') }}</label>
        <input id="password" type="password" name="password" class="auth-input @error('password') is-invalid @enderror" required autocomplete="new-password" placeholder="Enter new password" />
        @error('password')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="auth-form-group">
        <label for="password_confirmation" class="auth-label">{{ __('Confirm Password') }}</label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="auth-input @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password" placeholder="Confirm new password" />
        @error('password_confirmation')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="auth-btn auth-btn-primary">
        {{ __('Reset Password') }}
    </button>
</form>

<div class="auth-footer">
    <a href="{{ route('login') }}" class="auth-link">{{ __('Back to Sign In') }}</a>
</div>
</x-guest-layout>
