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
                <h2>Hello {{ $model->name ?? 'Model' }},</h2>

                <p>Your application status has been updated to:</p>
                <p class="status-box">{{ ucfirst($status) }}</p>

                @if($status == 'approved')
                    <p>🎉 Congratulations! Your application has been approved. Our team will contact you soon for the next steps.</p>
                @elseif($status == 'rejected')
                    <p>❌ Unfortunately, your application was not approved this time. We encourage you to reapply in the future.</p>
                @elseif($status == 'new-request')
                    <p>📩 We’ve received your application and it’s currently under review by our recruitment team.</p>
                @elseif($status == 'on-hold')
                    <p>⏳ Your application is currently on hold. We’ll update you as soon as there’s progress.</p>
                @elseif($status == 'pending')
                    <p>🕒 Your application is pending review. We’ll notify you once it’s processed.</p>
                @endif

                <p>Thank you for choosing <strong>Citrus Talent</strong> — Pakistan’s leading talent agency.</p>

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
