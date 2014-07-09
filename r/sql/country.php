<?php

namespace country;

function fetchAll() {
    $q = "SELECT name
          FROM country";

    return \db\fetchAll($q);
}

function fetch($code) {
    $q = "SELECT name
          FROM country
          WHERE code = '$code'";

    return \db\fetch($q);
}

?>
