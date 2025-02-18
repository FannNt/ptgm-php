<?php


$date = "00:00";
if (date($date) > date('24:00') || date($date) < date("00:00")) {
    echo "Dunia lain";
}else {
    if ($date > date("18:30")) {
        echo "<p>Malam</p>";
    } elseif ($date > date("17:30")) {
        echo "<p>Petang</p>";
    } elseif ($date > date("15:00")) {
        echo "<p> sore </p>";
    } elseif ($date > date("10:00")) {
        echo "<p> Siang </p>";
    } elseif ($date > date("04:00")) {
        echo "<p> Pagi </p>";
    } elseif ($date >= date("00:00")) {
        echo "<p> Dini hari </p>";
    }
}
