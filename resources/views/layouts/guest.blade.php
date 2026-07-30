<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Digicrome') }} — Admin Login</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/fav-icon/icon.webp') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
    *, *::before, *::after { box-sizing: border-box; }

    body.login-body {
        margin: 0;
        min-height: 100vh;
        font-family: 'Figtree', -apple-system, sans-serif;
        background: #0a0e1a;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }

    /* ── Animated gradient background ── */
    .login-bg {
        position: fixed;
        inset: 0;
        background: linear-gradient(135deg, #0a0e1a 0%, #0f1b3d 40%, #0d1f3c 70%, #0a0e1a 100%);
        z-index: 0;
    }

    /* Floating orbs */
    .orb {
        position: fixed;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.35;
        animation: floatOrb 8s ease-in-out infinite;
        pointer-events: none;
    }
    .orb-1 { width: 500px; height: 500px; background: #1d4ed8; top: -150px; left: -100px; animation-delay: 0s; }
    .orb-2 { width: 400px; height: 400px; background: #7c3aed; bottom: -120px; right: -80px; animation-delay: 3s; }
    .orb-3 { width: 300px; height: 300px; background: #0ea5e9; bottom: 20%; left: 30%; animation-delay: 1.5s; }

    @keyframes floatOrb {
        0%, 100% { transform: translateY(0) scale(1); }
        50%       { transform: translateY(-30px) scale(1.05); }
    }

    /* Grid pattern overlay */
    .login-grid {
        position: fixed;
        inset: 0;
        background-image:
            linear-gradient(rgba(59,130,246,.04) 1px, transparent 1px),
            linear-gradient(90deg, rgba(59,130,246,.04) 1px, transparent 1px);
        background-size: 50px 50px;
        z-index: 1;
        pointer-events: none;
    }

    /* Floating particles */
    .particles { position: fixed; inset: 0; z-index: 2; pointer-events: none; overflow: hidden; }
    .particle {
        position: absolute;
        width: 3px;
        height: 3px;
        background: rgba(96,165,250,.6);
        border-radius: 50%;
        animation: particleFloat linear infinite;
    }
    @keyframes particleFloat {
        0%   { transform: translateY(100vh) translateX(0) scale(0); opacity: 0; }
        10%  { opacity: 1; }
        90%  { opacity: 0.6; }
        100% { transform: translateY(-100px) translateX(40px) scale(1); opacity: 0; }
    }

    /* ── Card ── */
    .login-wrapper {
        position: relative;
        z-index: 10;
        width: 100%;
        max-width: 440px;
        padding: 20px;
        animation: slideUp .5s cubic-bezier(.16,1,.3,1) both;
    }
    @keyframes slideUp {
        from { opacity: 0; transform: translateY(32px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .login-card {
        background: rgba(15, 23, 42, 0.75);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border: 1px solid rgba(99,179,237,.15);
        border-radius: 20px;
        padding: 40px 36px;
        box-shadow:
            0 0 0 1px rgba(255,255,255,.04) inset,
            0 32px 80px rgba(0,0,0,.5),
            0 0 60px rgba(29,78,216,.15);
    }

    /* ── Logo + Heading ── */
    .login-logo {
        display: block;
        margin: 0 auto 20px;
        height: 42px;
        width: auto;
        filter: brightness(1.1);
        animation: fadeIn .6s .2s both;
    }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

    .login-title {
        text-align: center;
        font-size: 22px;
        font-weight: 700;
        color: #f1f5f9;
        margin: 0 0 4px;
        animation: fadeIn .5s .3s both;
    }
    .login-subtitle {
        text-align: center;
        font-size: 13px;
        color: #64748b;
        margin: 0 0 28px;
        animation: fadeIn .5s .35s both;
    }

    /* ── Form elements ── */
    .field-group {
        margin-bottom: 18px;
        animation: slideUp .5s cubic-bezier(.16,1,.3,1) both;
    }
    .field-group:nth-child(1) { animation-delay: .4s; }
    .field-group:nth-child(2) { animation-delay: .5s; }
    .field-group:nth-child(3) { animation-delay: .55s; }
    .field-group:nth-child(4) { animation-delay: .6s; }

    .field-label {
        display: block;
        font-size: 12.5px;
        font-weight: 600;
        color: #94a3b8;
        margin-bottom: 7px;
        text-transform: uppercase;
        letter-spacing: .5px;
    }
    .field-input {
        width: 100%;
        background: rgba(30,41,59,.8);
        border: 1px solid rgba(99,179,237,.15);
        border-radius: 10px;
        padding: 11px 14px;
        font-size: 14px;
        color: #f1f5f9;
        outline: none;
        transition: border-color .2s, box-shadow .2s, background .2s;
        font-family: inherit;
    }
    .field-input::placeholder { color: #475569; }
    .field-input:focus {
        border-color: #3b82f6;
        background: rgba(30,41,59,1);
        box-shadow: 0 0 0 3px rgba(59,130,246,.18);
    }

    .input-icon-wrap { position: relative; }
    .input-icon-wrap .field-input { padding-left: 40px; }
    .input-icon {
        position: absolute;
        left: 13px;
        top: 50%;
        transform: translateY(-50%);
        color: #475569;
        font-size: 15px;
        pointer-events: none;
    }
    .field-input:focus + .input-icon,
    .input-icon-wrap:focus-within .input-icon { color: #3b82f6; }

    /* Error */
    .field-error { font-size: 12px; color: #f87171; margin-top: 5px; }

    /* Remember + Forgot row */
    .form-row-flex {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        animation: fadeIn .5s .6s both;
    }
    .remember-label {
        display: flex;
        align-items: center;
        gap: 7px;
        font-size: 13px;
        color: #94a3b8;
        cursor: pointer;
        user-select: none;
    }
    .remember-label input[type="checkbox"] {
        width: 15px;
        height: 15px;
        accent-color: #3b82f6;
        cursor: pointer;
    }
    .forgot-link {
        font-size: 12.5px;
        color: #60a5fa;
        text-decoration: none;
        transition: color .15s;
    }
    .forgot-link:hover { color: #93c5fd; text-decoration: underline; }

    /* Submit button */
    .btn-login {
        width: 100%;
        margin-top: 22px;
        padding: 13px;
        background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 50%, #3b82f6 100%);
        border: none;
        border-radius: 10px;
        color: #fff;
        font-size: 14.5px;
        font-weight: 600;
        cursor: pointer;
        letter-spacing: .3px;
        transition: all .2s;
        position: relative;
        overflow: hidden;
        font-family: inherit;
        animation: slideUp .5s .65s both;
    }
    .btn-login::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255,255,255,.12) 0%, transparent 60%);
        opacity: 0;
        transition: opacity .2s;
    }
    .btn-login:hover { transform: translateY(-1px); box-shadow: 0 8px 24px rgba(37,99,235,.5); }
    .btn-login:hover::before { opacity: 1; }
    .btn-login:active { transform: translateY(0); }

    /* Pulse ring on button */
    .btn-login::after {
        content: '';
        position: absolute;
        inset: -1px;
        border-radius: 11px;
        border: 1px solid rgba(96,165,250,.4);
        animation: ringPulse 2.5s ease-in-out infinite;
    }
    @keyframes ringPulse {
        0%, 100% { opacity: 0; transform: scale(1); }
        50% { opacity: 1; transform: scale(1.01); }
    }

    /* Status alert */
    .auth-status {
        background: rgba(20,83,45,.4);
        border: 1px solid #16a34a;
        color: #86efac;
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 13px;
        margin-bottom: 16px;
        animation: fadeIn .3s;
    }

    /* Divider */
    .login-divider {
        display: flex;
        align-items: center;
        gap: 12px;
        margin: 24px 0 0;
        animation: fadeIn .5s .7s both;
    }
    .login-divider hr { flex: 1; border: none; border-top: 1px solid rgba(255,255,255,.08); }
    .login-divider span { font-size: 11px; color: #475569; white-space: nowrap; }

    /* Footer note */
    .login-footer-note {
        text-align: center;
        font-size: 12px;
        color: #334155;
        margin-top: 12px;
        animation: fadeIn .5s .8s both;
    }
    </style>
</head>
<body class="login-body">

    {{-- Background layers --}}
    <div class="login-bg"></div>
    <div class="login-grid"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    {{-- Floating particles --}}
    <div class="particles" id="particles"></div>

    {{-- Card --}}
    <div class="login-wrapper">
        <div class="login-card">
            <img loading="eager" width="219" height="74" src="{{ asset('assets/images/logo.webp') }}" alt="DigiCrome" class="login-logo">
            <h1 class="login-title">Welcome back</h1>
            <p class="login-subtitle">Sign in to your CMS dashboard</p>

            {{ $slot }}

            <div class="login-divider">
                <hr><span>DigiCrome CMS &copy; {{ date('Y') }}</span><hr>
            </div>
        </div>
        <p class="login-footer-note">Secure admin area — unauthorised access is prohibited</p>
    </div>

    <script>
    // Generate floating particles
    (function(){
        const container = document.getElementById('particles');
        const count = 22;
        for(let i = 0; i < count; i++){
            const p = document.createElement('div');
            p.className = 'particle';
            const size = Math.random() * 3 + 1.5;
            p.style.cssText = `
                width:${size}px; height:${size}px;
                left:${Math.random()*100}%;
                animation-duration:${Math.random()*12+8}s;
                animation-delay:${Math.random()*10}s;
                opacity:${Math.random()*.5+.2};
                background:rgba(${Math.random()>0.5?'96,165,250':'139,92,246'},.7);
            `;
            container.appendChild(p);
        }
    })();
    </script>
</body>
</html>
