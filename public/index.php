<?php

// Load CodeIgniter4 bootstrap.
require __DIR__ . '/../app/Config/bootstrap.php';

// This is a plain PHP file.

echo 'Hello World!';
?>

<p>
<a href="./session.php">Show the Session data</a>.
</p>

<?php
$session = session();
$session->set('name', 'John');

echo 'Environment: '. ENVIRONMENT;
