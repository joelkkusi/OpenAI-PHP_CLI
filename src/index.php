<?php

require_once 'OpenAIClient.php';

// Initialize the OpenAI client
$openAIClient = new OpenAIClient();
$client = $openAIClient->getClient();

// Set the model to use
$model = 'gpt-4o-mini';

// Get the prompt from the user
$prompt = readline('Enter your message: ');

// Create a chat session
$result = $client->chat()->create([
    'model' => $model,
    'messages' => [
        [
            'role' => 'user',
            'content' => $prompt,
        ],
    ],
]);

// Output the response
echo $result->choices[0]->message->content;