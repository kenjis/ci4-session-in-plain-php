<?php

// Load CodeIgniter4 bootstrap.
require __DIR__ . '/../app/Config/bootstrap.php';

$session = session();

echo 'Hello, ' . $session->get('name');
