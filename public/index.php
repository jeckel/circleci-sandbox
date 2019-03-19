<?php

include '../c3.php';

include '../src/Hello.php';

$hello = new Hello($_GET['name']);
?>
<html>
<head></head>
<body>
<?= $hello ?>
<?php phpinfo() ?>
</body>
</html>

