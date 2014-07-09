<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/respect/r.php');

$username = \redirect\get('username');

\view\set('username', $username);
\view\display();

?>
