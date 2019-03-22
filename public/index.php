<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../c3.php';

include '../src/Hello.php';

$hello = new Hello($_GET['name']);
?>
<html>
<head></head>
<body>
<?= $hello ?>
</body>
</html>

