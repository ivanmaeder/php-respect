<?php

namespace country;

function fetchAll() {
    $connection = mysqli_connect('localhost', 'root', 'root', 'world');

    $q = "SELECT name
          FROM country";

    $result = mysqli_query($connection, $q);

    while ($row = mysqli_fetch_assoc($result)) {
        yield $row;
    }
}

?>
