<x-guest-layout>

    {{-- Session status --}}
    @if (session('status'))
        <div class="auth-status">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Email --}}
        <div class="field-group">
            <label for="email" class="field-label">Email Address</label>
            <div class="input-icon-wrap">
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="field-input"
                    placeholder="admin@example.com"
                    required
                    autofocus
                    autocomplete="username"
                />
                <i class="bi bi-envelope input-icon"></i>
            </div>
            @error('email')
                <p class="field-error">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="field-group">
            <label for="password" class="field-label">Password</label>
            <div class="input-icon-wrap">
                <input
                    id="password"
                    type="password"
                    name="password"
                    class="field-input"
                    placeholder="••••••••"
                    required
                    autocomplete="current-password"
                />
                <i class="bi bi-lock input-icon"></i>
            </div>
            @error('password')
                <p class="field-error">{{ $message }}</p>
            @enderror
        </div>

        {{-- Remember + Forgot --}}
        <div class="form-row-flex">
            <label class="remember-label">
                <input type="checkbox" name="remember" id="remember_me">
                <span>Remember me</span>
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-link">Forgot password?</a>
            @endif
        </div>

        {{-- Submit --}}
        <button type="submit" class="btn-login">
            <i class="bi bi-box-arrow-in-right me-2"></i> Sign In
        </button>
    </form>

    {{-- Bootstrap Icons (needed for the icons in this form) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}" type="text/css">

</x-guest-layout>
