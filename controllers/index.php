<?php
require 'core/Grocery.php';

$groceries = $app['database']->selectAll('groceries', 'Grocery');

$title = 'Boodschappenlijst';
require 'views/index.view.php';
