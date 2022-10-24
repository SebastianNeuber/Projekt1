<?php
// include, require, include_one (wird 1x ausgeführt)

include_once('dbcon.php');

if ($connection) {
    $ausgabe = 'SELECT * FROM ergebnisse';
    foreach ($connection->query($ausgabe) as $row) {
        echo $row['user_name'] . " " . $row['user_email'];
    }
}
