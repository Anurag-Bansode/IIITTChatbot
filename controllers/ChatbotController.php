<?php
class ChatbotController {
    private $apiUrl = "https://en.wikipedia.org/w/api.php";

    public function searchWikipedia($query) {
        $url = $this->apiUrl . "?action=query&list=search&srsearch=" . urlencode($query) . "&format=json";

        // Initialize cURL session
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response, true);
        
        return $data['query']['search'] ?? null;
    }
}
