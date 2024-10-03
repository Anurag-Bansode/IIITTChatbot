function sendMessage() {
    const inputField = document.getElementById('user-input');
    const userInput = inputField.value.trim();

    if (userInput === "") return;

    addMessage(userInput, 'user-message');
    inputField.value = '';

    fetch('/index.php?action=getResponse', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ query: userInput })
    })
    .then(response => response.json())
    .then(data => {
        addMessage(data.response, 'bot-message');
    })
    .catch(error => {
        console.error('Error:', error);
        addMessage("Sorry, something went wrong.", 'bot-message');
    });
}

function addMessage(message, className) {
    const chatBox = document.getElementById('chat-box');
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${className}`;
    messageDiv.textContent = message;
    chatBox.appendChild(messageDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
}
