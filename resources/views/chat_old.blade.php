<!DOCTYPE html>
<html>

<head>
    <title>AI Chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        #chat-box {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 20px;
        }

        .msg {
            margin-bottom: 10px;
        }

        .msg.user {
            text-align: right;
            color: blue;
        }

        .msg.bot {
            text-align: left;
            color: green;
        }
    </style>
</head>

<body>

    <div id="chat-box">
        <div id="messages"></div>
        <input type="text" id="user-message" placeholder="Ask a question..." style="width:80%">
        <button id="send-btn">Send</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var route =  '{{ url('/chat-message') }}';
        $('#send-btn').on('click', function() {
            let msg = $('#user-message').val();
            if (!msg) return;

            $('#messages').append(`<div class="msg user"><b>You:</b> ${msg}</div>`);
            $('#user-message').val('');

            $.ajax({
                url: route,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    message: msg
                },
                success: function(res) {
                    $('#messages').append(`<div class="msg bot"><b>Bot:</b> ${res.reply}</div>`);
                }
            });
        });
    </script>

</body>

</html>
