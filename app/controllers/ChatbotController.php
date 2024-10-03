<?php
require_once '../app/models/ChatbotModel.php';

class ChatbotController
{
    private $chatbotModel;

    public function __construct()
    {
        $this->chatbotModel = new ChatbotModel();
    }
    public function index()
    {
        require_once '../app/views/chatbot.php';
    }
    public function getResponse()
    {
        // Get the query from the POST request
        $input = json_decode(file_get_contents("php://input"), true);

        if (isset($input['query'])) {
            $query = $input['query'];
            $response = $this->chatbotModel->searchWikipedia($query);
            echo json_encode(['response' => $response]);
        } else {
            echo json_encode(['response' => "Sorry, I didn't understand that."]);
        }
    }
}
