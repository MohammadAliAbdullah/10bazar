<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Invoice</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; }
        .header { background-color: #f4f4f4; padding: 10px; text-align: center; }
        .content { padding: 20px 0; }
        .footer { font-size: 0.9em; text-align: center; color: #777; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Invoice Details</h2>
        </div>
        <div class="content">
            <p>Hello, {{ $data['customer_name'] }}!</p>
            <p>Thank you for your business. Please find your invoice details below.</p>
            
            <p><strong>Invoice ID:</strong> {{ $data['invoice_id'] }}</p>
            <p><strong>Amount:</strong> ${{ number_format($data['amount'], 2) }}</p>

            <p>If you have any questions, please don't hesitate to contact us.</p>
            <p>Sincerely,</p>
            <p>The Team at Your Company</p>
        </div>
        <div class="footer">
            <p>© {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>