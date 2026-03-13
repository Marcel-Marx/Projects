<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakeflix</title>
    <style>
        /* --- Reset & Basic Setup --- */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #000;
            color: #fff;
            /* Ein dunkles Hintergrundbild, das an Filme erinnert, mit einem starken schwarzen Overlay */
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0, rgba(0, 0, 0, 0.4) 60%, rgba(0, 0, 0, 0.8) 100%), 
                              url('https://images.unsplash.com/photo-1594909122845-11baa439b7bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a {
            text-decoration: none;
            color: #737373;
        }

        a:hover {
            text-decoration: underline;
        }

        /* --- Header / Logo --- */
        header {
            padding: 25px 3%;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
        }

        .logo {
            color: #e50914;
            font-size: 2.5rem;
            font-weight: 900;
            letter-spacing: 1px;
            font-family: 'Arial Black', Impact, sans-serif;
            text-transform: uppercase;
        }

        /* --- Main Login Container --- */
        .login-wrapper {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 90px;
            padding-bottom: 90px;
        }

        .login-box {
            background-color: rgba(0, 0, 0, 0.75);
            border-radius: 4px;
            width: 100%;
            max-width: 450px;
            padding: 60px 68px 40px;
            min-height: 660px;
        }

        .login-box h1 {
            font-size: 2rem;
            font-weight: 500;
            margin-bottom: 28px;
        }

        /* --- Form Elements --- */
        form {
            display: flex;
            flex-direction: column;
        }

        .input-group {
            margin-bottom: 16px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            background-color: #333;
            border: 0;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            padding: 16px 20px;
            outline: none;
        }

        .input-group input:focus {
            background-color: #454545;
        }

        .input-group input::placeholder {
            color: #8c8c8c;
        }

        .btn-submit {
            background-color: #e50914;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
            padding: 16px;
            margin-top: 24px;
            margin-bottom: 12px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn-submit:hover {
            background-color: #c11119;
        }

        /* --- Form Help (Remember me & Need help) --- */
        .form-help {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            color: #b3b3b3;
            margin-bottom: 60px;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 5px;
            width: 16px;
            height: 16px;
            background: #737373;
            border: none;
            border-radius: 2px;
        }

        /* --- Extra Information --- */
        .signup-now {
            color: #737373;
            font-size: 16px;
            margin-bottom: 13px;
        }

        .signup-now span {
            color: #fff;
        }

        .signup-now span:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        .recaptcha-terms {
            font-size: 13px;
            color: #8c8c8c;
            line-height: 1.3;
        }

        .recaptcha-terms a {
            color: #0071eb;
        }

        /* --- Footer --- */
        footer {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 30px 0;
            margin-top: auto;
            border-top: 1px solid #73737333;
        }

        .footer-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 5%;
        }

        .footer-title {
            color: #737373;
            font-size: 16px;
            margin-bottom: 30px;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
        }

        .footer-links li {
            list-style: none;
            width: 25%;
            margin-bottom: 16px;
            font-size: 13px;
        }

        /* --- Responsive Design for Mobile --- */
        @media (max-width: 740px) {
            body {
                background-image: none;
                background-color: #000;
            }

            header {
                padding: 15px 5%;
            }

            .logo {
                font-size: 2rem;
            }

            .login-wrapper {
                padding-top: 70px;
                padding-bottom: 0;
            }

            .login-box {
                background-color: transparent;
                padding: 20px 5%;
                min-height: auto;
                max-width: 100%;
            }

            footer {
                background-color: transparent;
                border-top: none;
                padding: 30px 5%;
            }

            .footer-links li {
                width: 50%;
            }
        }
    </style>
</head>
<body>

    <!-- Logo / Header -->
    <header>
        <div class="logo">FAKEFLIX</div>
    </header>

    <!-- Main Login Area -->
    <main class="login-wrapper">
        <div class="login-box">
            <h1>Sign In</h1>
            
            <form action="/redirect" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="login" placeholder="Email or phone number" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-submit">Sign In</button>
                <div class="form-help">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" checked>
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="#">Need help?</a>
                </div>
            </form>

            <!-- Additional Links / Info -->
            <div class="signup-now">
                New to Fakeflix? <span>Sign up now.</span>
            </div>
            
            <div class="recaptcha-terms">
                This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#">Learn more.</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-title">
                <a href="#">Questions? Contact us.</a>
            </div>
            <ul class="footer-links">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Cookie Preferences</a></li>
                <li><a href="#">Corporate Information</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>
