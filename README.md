# Using CodeIgniter4 Session in Plain PHP

## Requirements

- PHP 8.2
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

Create `.env` file:

```console
$ cp env .env
```

Run built-in PHP web server:

```console
$ bin/server.sh
```

and navigate to http://localhost:8000/.
