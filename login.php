<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/respect/r.php');

$username = $_POST['username'];

\redirect\set('username', $username);
\redirect\http('index.php');

?>
