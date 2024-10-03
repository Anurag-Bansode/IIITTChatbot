<?php
require_once '../controllers/ChatbotController.php';

$controller = new ChatbotController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['query'])) {
    $query = $_POST['query'];
    $results = $controller->searchWikipedia($query);

echo "Result for your query";
echo "<p>htmlspecialchars($results)</p>";
echo"<a href='/'>Ask another question</a>";

} else {
    // Include the form view
    include '../views/url_form.php';
}
