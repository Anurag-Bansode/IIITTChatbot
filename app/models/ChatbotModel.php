<?php
class ChatbotModel{
        private $apiUrl = "https://en.wikipedia.org/w/api.php";
    public function searchWikipedia($query) {
        $url = $this->apiUrl . "?action=query&list=search&srsearch=" . urlencode($query) . "&format=json";
        $data = $this->makeRequest($url);

        if(isset($data['query']['search'][0]))
        {
            $title= $data['query']['search'][0]['title'];
            return $this->getSummary($title);
        }
        return "Sorry ,I couldn't find  anything related";
    }
    public function getSummary($title) { 
        $url = $this->apiUrl . "?action=query&prop=extracts&exintro&explaintext&titles=" . urlencode($title) . "&format=json";

        $data = $this->makeRequest($url);
        $pages= $data ['query']['pages'];
        foreach($pages as $page)
        {
            return $page['extract'];
        }
    
    }
    public function makeRequest($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}
