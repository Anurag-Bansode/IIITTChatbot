<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="chatbot.css">
</head>
<body>
    <div class="chat-container">
        <div id="chat-box" class="chat-box"></div>
        <div class="input-area">
            <input type="text" id="user-input" placeholder="Type a message..." autocomplete="off" />
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script src="chatbot.js"></script>
</body>
</html>
