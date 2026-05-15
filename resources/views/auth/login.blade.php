<x-guest-layout>
<a href = "/" style="text-decoration: none;">🏠</a>

@if (session('status'))
    <div class="auth-status success">
        {{ session('status') }}
    </div>
@endif
<div class="auth-header">
    <h1 class="auth-title">{{ __('Welcome Back') }}</h1>
    <p class="auth-subtitle">{{ __('Sign in to your account') }}</p>
</div>

<form method="POST" action="{{ route('login') }}" class="auth-form">
    @csrf

    <!-- Email Address -->
    <div class="auth-form-group">
        <label for="email" class="auth-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" name="email" class="auth-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Enter your email" />
        @error('email')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password -->
    <div class="auth-form-group">
        <label for="password" class="auth-label">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" class="auth-input @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Enter your password" />
        @error('password')
            <span class="auth-error">{{ $message }}</span>
        @enderror
    </div>

    <!-- Remember Me -->
    <div class="auth-form-group">
        <label for="remember_me" class="auth-checkbox-label">
            <input id="remember_me" type="checkbox" name="remember" />
            <span>{{ __('Remember me for 30 days') }}</span>
        </label>
    </div>

    <button type="submit" class="auth-btn auth-btn-primary">
        {{ __('Sign In') }}
    </button>
</form>

<div class="auth-footer">
    @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="auth-link">{{ __('Forgot your password?') }}</a>
        <br/>
    @endif
    {{ __("Don't have an account?") }}
    <a href="{{ route('register') }}" class="auth-link">{{ __('Create one') }}</a>
</div>
</x-guest-layout>
