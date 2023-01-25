<?php

function fd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function dd($data) {
    die(fd($data));
}

function formatEuro($amount) {
    return "€ " . number_format($amount / 100, 2, ",", ".");
}
