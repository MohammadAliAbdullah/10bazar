@extends('Frontend.Layout.master')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        #chat-container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        #messages {
            /* height will be set dynamically */
            height: 400px;
            /* height: auto; */
            overflow-y: auto;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 15px;
        }

        .msg {
            margin-bottom: 10px;
        }

        .msg.user {
            text-align: right;
            color: #007bff;
        }

        .msg.bot {
            text-align: left;
            color: #28a745;
        }

        input[type="text"] {
            width: 75%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
        }
    </style>
    <div id="chat-container">
        <h3>Live Chat Assistant</h3>
        <div id="messages"></div>
        <input type="text" id="user-message" placeholder="Type your message..." />
        <button id="send-btn">Send</button>
    </div>
    <script>
        var route = '{{ url('/chat-message') }}';
        $('#send-btn').on('click', function() {
            let msg = $('#user-message').val().trim();
            if (!msg) return;

            $('#messages').append(`<div class="msg user"><strong>You:</strong> ${msg}</div>`);
            $('#user-message').val('');

            $.ajax({
                url: '{{ url('/chat-message') }}',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    message: msg
                },
                success: function(res) {
                    $('#messages').append(
                        `<div class="msg bot"><strong>Bot:</strong> ${res.reply}</div>`);
                    $('#messages').scrollTop($('#messages')[0].scrollHeight);
                },
                error: function() {
                    $('#messages').append(
                        `<div class="msg bot"><strong>Bot:</strong> Something went wrong. Please try again.</div>`
                    );
                }
            });
        });

        // Optional: Press Enter to send
        $('#user-message').keypress(function(e) {
            if (e.which == 13) {
                $('#send-btn').click();
            }
        });
    </script>
@endsection
