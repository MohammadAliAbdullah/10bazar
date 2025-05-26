<!DOCTYPE html>
<html>
<head>
    <title>bKash Payment</title>
</head>
<body>
    <h2>Make a Payment with bKash</h2>

    <form action="{{ route('bkash.create') }}" method="POST">
        @csrf
        <label>Amount:</label>
        <input type="text" name="amount" required><br><br>

        <button type="submit">Pay with bKash</button>
    </form>
</body>
</html>
