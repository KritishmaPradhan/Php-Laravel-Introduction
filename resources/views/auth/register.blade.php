<x-guest-layout>
<a href = "/" style="text-decoration: none;">🏠</a>

<div class="auth-header">
    <h1 class="auth-title">{{ __('Create Account') }}</h1>
    <p class="auth-subtitle">{{ __('Join us today and get started') }}</p>
</div>

<form method="POST" action="{{ route('register') }}" class="auth-form">
    @csrf

    <!-- Name -->
    <div class="auth-form-group">
        <label for="name" class="auth-label">{{ __('Full Name') }}</label>
        <input id="name" type="text" name="name" class="auth-input @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Enter your full name" />
        @error('name')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <!-- Email Address -->
    <div class="auth-form-group">
        <label for="email" class="auth-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" name="email" class="auth-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="username" placeholder="Enter your email" />
        @error('email')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password -->
    <div class="auth-form-group">
        <label for="password" class="auth-label">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" class="auth-input @error('password') is-invalid @enderror" required autocomplete="new-password" placeholder="Create a strong password" />
        @error('password')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="auth-form-group">
        <label for="password_confirmation" class="auth-label">{{ __('Confirm Password') }}</label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="auth-input @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password" placeholder="Confirm your password" />
        @error('password_confirmation')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="auth-btn auth-btn-primary">
        {{ __('Create Account') }}
    </button>
</form>

<div class="auth-footer">
    {{ __('Already have an account?') }}
    <a href="{{ route('login') }}" class="auth-link">{{ __('Sign In') }}</a>
</div>
</x-guest-layout>
