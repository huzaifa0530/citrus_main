<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Citrus Talent — Application Status Update</title>
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
            background-color: #f7931e; /* Citrus orange color */
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

        .status-box {
            display: inline-block;
            background-color: #f0f0f0;
            padding: 8px 14px;
            border-radius: 6px;
            font-weight: bold;
            color: #f7931e;
        }

        .email-footer {
            text-align: center;
            background-color: #f9f9f9;
            padding: 15px;
            font-size: 13px;
            color: #777;
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
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-content">
            <div class="email-header">
                <h1>Citrus Talent</h1>
            </div>

            <div class="email-body">
                <h2>Hello {{ $name ?? 'Model' }},</h2>

                @if ($status == 'new-request')
                    <p>🎉 Thank you for verifying your email!</p>
                    <p>Your application has been successfully submitted and is now marked as a 
                        <span class="status-box">New Request</span>.
                    </p>
                    <p>Our Citrus Talent recruitment team will review your profile soon and get back to you.</p>
                @else
                    <p>Your application status has been updated to:
                        <span class="status-box">{{ ucfirst($status) }}</span>.
                    </p>
                @endif

                <p>We appreciate your interest in working with <strong>Citrus Talent</strong> — where top talent meets opportunity.</p>

                <a href="{{ url('/') }}" class="btn">Visit Our Website</a>
            </div>

            <div class="email-footer">
                © {{ date('Y') }} Citrus Talent. All rights reserved.<br>
                <a href="{{ url('/') }}" style="color:#f7931e; text-decoration:none;">www.citrustalent.com</a>
            </div>
        </div>
    </div>
</body>
</html>
