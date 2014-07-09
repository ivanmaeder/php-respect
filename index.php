<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/r.php');
require_once('sql/country.php');

//foreach (\country\fetchAll() as $row) {
    //echo $row['name'] . '<br>';
//}

\view\set('countries', \country\fetchAll());
\view\display();

?>
