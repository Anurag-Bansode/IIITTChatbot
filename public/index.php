<?php
require_once '../controllers/ChatbotController.php';

$controller = new ChatbotController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['query'])) {
    $query = $_POST['query'];
    $results = $controller->searchWikipedia($query);

    // Include the result view
    include '../views/result.php';
} else {
    // Include the form view
    include '../views/url_form.php';
}
