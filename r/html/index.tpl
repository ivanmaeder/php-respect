<h1><?= $country['name'] ?></h1>
<ul>
<?php

foreach ($countries as $country) {
    echo '<li>' . $country['name'] . '</li>';
}

?>
</ul>
