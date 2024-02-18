# Using CodeIgniter4 Session in Plain PHP

This repository shows how to use CodeIgniter4's 
[Session Library](https://codeigniter.com/user_guide/libraries/sessions.html)
in plain PHP.

## Requirements

- PHP 7.4 or later
- CodeIgniter 4.4.5

## Diretory Structure

```
.
├── app/
│   └── Config/   ... Config for CodeIgniter4
├── composer.json
├── composer.lock
├── public/       ... Plain PHP application
│   └── index.php
└── vendor/
```

## How to Run

Install Composer dependencies:

```console
$ composer update
```

Create `.env` file:

```console
$ cp env .env
```

Run built-in PHP web server:

```console
$ bin/server.sh
```

and navigate to http://localhost:8000/.
