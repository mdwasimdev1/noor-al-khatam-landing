<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login — Noor Al Khatam</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: #0a0b0f;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Ambient background glow */
        body::before {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(245,158,11,0.06) 0%, transparent 70%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        body::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(245,158,11,0.04) 0%, transparent 70%);
            bottom: 10%;
            right: 10%;
            pointer-events: none;
        }

        /* Grid dots background */
        .bg-grid {
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(circle, rgba(255,255,255,0.04) 1px, transparent 1px);
            background-size: 32px 32px;
            pointer-events: none;
        }

        .login-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: #111318;
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 20px;
            padding: 40px 36px;
            backdrop-filter: blur(20px);
            box-shadow:
                0 0 0 1px rgba(245,158,11,0.05),
                0 40px 80px rgba(0,0,0,0.5),
                0 0 60px rgba(245,158,11,0.03);
        }

        .login-logo {
            text-align: center;
            margin-bottom: 32px;
        }

        .login-logo-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(245,158,11,0.18), rgba(217,119,6,0.08));
            border: 1px solid rgba(245,158,11,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
        }

        .login-logo-icon svg {
            width: 28px;
            height: 28px;
            color: #f59e0b;
        }

        .login-brand {
            font-family: 'Cinzel', serif;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.18em;
            color: #f59e0b;
            text-transform: uppercase;
            display: block;
        }

        .login-brand-sub {
            font-size: 11px;
            color: #64748b;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            display: block;
            margin-top: 4px;
        }

        .login-heading {
            font-size: 20px;
            font-weight: 700;
            color: #e2e8f0;
            text-align: center;
            margin-bottom: 6px;
        }

        .login-sub {
            font-size: 12px;
            color: #64748b;
            text-align: center;
            margin-bottom: 28px;
        }

        .form-group { margin-bottom: 18px; }

        .form-label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.09em;
            color: #64748b;
            margin-bottom: 7px;
        }

        .form-input {
            width: 100%;
            padding: 11px 14px;
            background: #181b22;
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 10px;
            color: #e2e8f0;
            font-size: 13.5px;
            font-family: 'Inter', sans-serif;
            outline: none;
            transition: border-color 0.18s, box-shadow 0.18s;
        }

        .form-input:focus {
            border-color: rgba(245,158,11,0.45);
            box-shadow: 0 0 0 3px rgba(245,158,11,0.08);
        }

        .form-input::placeholder { color: #475569; }

        .form-input.error { border-color: rgba(239,68,68,0.5); }

        .field-error {
            font-size: 11px;
            color: #f87171;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .remember-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 22px;
        }

        .remember-row input[type="checkbox"] {
            width: 14px;
            height: 14px;
            accent-color: #f59e0b;
        }

        .remember-row label {
            font-size: 12px;
            color: #94a3b8;
            cursor: pointer;
        }

        .btn-login {
            width: 100%;
            padding: 13px;
            border-radius: 10px;
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: #000;
            font-size: 13px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: all 0.18s;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-family: 'Inter', sans-serif;
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(245,158,11,0.35);
        }

        .btn-login:active { transform: translateY(0); }

        .btn-login svg { width: 16px; height: 16px; }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #475569;
            text-decoration: none;
            transition: color 0.15s;
        }

        .back-link:hover { color: #f59e0b; }

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 20px 0;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background: rgba(255,255,255,0.07);
        }

        .divider-text { font-size: 11px; color: #475569; }
    </style>
</head>
<body>
    <div class="bg-grid"></div>

    <div class="login-wrapper">
        <div class="login-card">
            <!-- Logo -->
            <div class="login-logo">
                <div class="login-logo-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <span class="login-brand">Noor Al Khatam</span>
                <span class="login-brand-sub">Admin Portal</span>
            </div>

            <h1 class="login-heading">Welcome Back</h1>
            <p class="login-sub">Sign in to manage your landing page</p>

            <form method="POST" action="{{ route('admin.login.post') }}" id="login-form">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="admin@nooralkhatam.com"
                        autocomplete="email"
                        class="form-input {{ $errors->has('email') ? 'error' : '' }}"
                        required
                        autofocus
                    >
                    @error('email')
                        <div class="field-error">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:12px;height:12px">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        autocomplete="current-password"
                        class="form-input {{ $errors->has('password') ? 'error' : '' }}"
                        required
                    >
                    @error('password')
                        <div class="field-error">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:12px;height:12px">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="remember-row">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Keep me signed in</label>
                </div>

                <button type="submit" class="btn-login">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    Sign In to Dashboard
                </button>
            </form>

            <a href="{{ route('landing') }}" class="back-link">← Back to Landing Page</a>
        </div>
    </div>
</body>
</html>
