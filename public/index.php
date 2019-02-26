<?php

include '../c3.php';

$name = isset($_GET['name']) ? $_GET['name'] : 'World';

echo "Hello $name";
