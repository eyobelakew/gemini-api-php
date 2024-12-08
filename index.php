<?php

// Import necessary namespaces
use GeminiAPI\Client;
use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;

require 'vendor/autoload.php';

// Initialize the Gemini API client with your API key
$client = new Client('GEMINI_API_KEY'); 

try {
    // Generate content using the specified generative model
    $response = $client->generativeModel(ModelName::GEMINI_PRO)->generateContent(
        new TextPart('Put the question here')
    );
    echo "Generated Content: " . $response->text();
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

?>
