<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Citrus Talent — Verify Your Email</title>
    <style>
        body {
            background-color: #f4f4f7;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333333;
            margin: 0;
            padding: 0;
        }

        .email-wrapper {
            width: 100%;
            padding: 20px 0;
            background-color: #f4f4f7;
        }

        .email-content {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .email-header {
            background-color: #f7931e;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .email-header h1 {
            margin: 0;
            font-size: 22px;
            letter-spacing: 1px;
        }

        .email-body {
            padding: 25px;
            line-height: 1.6;
        }

        .email-body h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .otp-box {
            display: inline-block;
            background-color: #f0f0f0;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            color: #f7931e;
            font-size: 20px;
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            background-color: #f7931e;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #e67e00;
        }

        .email-footer {
            text-align: center;
            background-color: #f9f9f9;
            padding: 15px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-content">
            <div class="email-header">
                <h1>Citrus Talent</h1>
            </div>

            <div class="email-body">
                <h2>Hello {{ $name ?? 'User' }},</h2>

                <p>Thank you for registering with <strong>Citrus Talent</strong>! 🎉</p>

                <p>Your verification code is:</p>
                <div class="otp-box">{{ $otp }}</div>

                <p>Please enter this code on the verification page to confirm your email.</p>

                <a href="{{ $verifyUrl ?? url('/') }}" class="btn">Verify Email</a>
            </div>

            <div class="email-footer">
                © {{ date('Y') }} Citrus Talent. All rights reserved.<br>
                <a href="{{ url('/') }}" style="color:#f7931e; text-decoration:none;">www.citrustalent.com</a>
            </div>
        </div>
    </div>
</body>
</html>
