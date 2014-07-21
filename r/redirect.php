<?php

namespace redirect;

define('QUEUE', '_r_redirect_queue');
define('ENQ', 1);
define('DEQ', 0);

function set($key, $value) {
    $_SESSION[QUEUE][ENQ][$key] = $value;
}

function get($key) {
    $value = $_SESSION[QUEUE][DEQ][$key];

    return $value;
}

function _dequeue() {
    unset($_SESSION[QUEUE][DEQ]);

    $_SESSION[QUEUE][DEQ] = @$_SESSION[QUEUE][ENQ];

    unset($_SESSION[QUEUE][ENQ]);
}

function http($url) {
    header("Location: $url");
}


?>
