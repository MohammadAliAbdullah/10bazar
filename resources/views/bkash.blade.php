<!DOCTYPE html>
<html>

<head>
    <title>bKash Sandbox Payment</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <h2>Pay with bKash</h2>

    <input type="number" id="amount" placeholder="Enter amount" value="50" />
    <button id="payBtn">Pay Now</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#payBtn').on('click', function() {
            const amount = $('#amount').val();
            
            if (!amount || amount <= 0) {
                alert("Enter a valid amount");
                return;
            }

            $.ajax({
                url: "{{ url('/bkash/create') }}",
                type: 'POST',
                data: {
                    amount: amount
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response && response.bkashURL) {
                        // Open bKash payment gateway
                        window.location.href = response.bkashURL;
                    } else {
                        alert("bKash URL not found.");
                    }
                },
                error: function(xhr) {
                    alert("Payment initiation failed.");
                }
            });
        });
    </script>

</body>

</html>
