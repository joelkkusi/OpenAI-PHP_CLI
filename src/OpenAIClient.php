<?php

require_once 'config.php';

class OpenAIClient
{
    private $client;

    // Initialize the OpenAI client
    public function __construct()
    {
        // Get the OpenAI API key from the environment variables from the .env file
        $apiKey = $_ENV['OPENAI_API_KEY'];
        $this->client = OpenAI::client($apiKey);
    }

    // Get the OpenAI client
    public function getClient()
    {
        return $this->client;
    }
}