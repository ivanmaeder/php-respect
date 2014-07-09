<?php

/* Include this file in all controller scripts.
 */

$include_path = array($_SERVER['DOCUMENT_ROOT'] . '/respect/');

set_include_path(implode($include_path, ':'));

include('redirect.php');
include('view.php');

session_start();

\redirect\_dequeue();

?>
