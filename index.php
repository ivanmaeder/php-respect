<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/r.php');
require_once('sql/country.php');

\view\set('country', \country\fetch('CHN'));
\view\set('countries', \country\fetchAll());
\view\display();

?>
