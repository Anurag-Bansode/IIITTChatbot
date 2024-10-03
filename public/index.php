<?php
require_once '../app/controllers/ChatbotController.php';

$controller = new ChatbotController();

$action = $_GET['action'] ?? 'index';

// Call the corresponding controller method.
if ($action === 'index') {
    // Display the chatbot interface
    $controller->index();
} elseif ($action === 'getResponse') {
    // Handle the user query and return a response
    $controller->getResponse();
}
