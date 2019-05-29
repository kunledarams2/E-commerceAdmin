

<?php

$query = require 'Core/bootstrap.php';

$dataAll= $query->selectAll('regist_table');

var_dump($dataAll);

require("views/index.view.php");

