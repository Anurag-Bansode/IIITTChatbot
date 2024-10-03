<?php
require_once '../app/controllers/ChatbotController.php';

$controller = new ChatbotController();

$action = $_GET['action'] ?? 'index';


if ($action === 'index') {
    // Display the chatbot interface
    $controller->index();
} elseif ($action === 'getResponse') {

    $controller->getResponse();
}
