
# OpenAI_CLI

A simple OpenAI cli tool that uses openai-php/client & PHP.


## Requirements

**At least** [PHP 8.1](https://www.php.net/releases) \
[Composer 2.8.2](https://getcomposer.org/)


## Run Locally

Clone the project

```bash
  git clone https://github.com/joelkkusi/OpenAI-PHP_CLI
```

Go to the project directory

```bash
  cd OpenAI-PHP_CLI
```

Install dependencies

```bash
  composer install
```

Create .env

```bash
  cp .example.env .env
```

From root
```bash
  php src/index.php
```

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file.
You can get you own API key for fre by creating a account & project at [OpenAI](https://platform.openai.com/settings/organization/general)

`OPENAI_API_KEY`


## Acknowledgements

 - [openai-php/client](https://github.com/openai-php/client)
 - [guzzlehttp/guzzle](https://github.com/guzzle/guzzle/)
 - [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)
