<?php

require('../classes/StrUtils.php');

$string = new StrUtils('Hello World');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StrUtils</title>
</head>
<body>

<p><?= $string->bold() ?></p>
<p><?= $string->underline() ?></p>
<p><?= $string->italic() ?></p>
<p><?= $string->capitalize() ?></p>
<p><?= $string->uglify() ?></p>

</body>
</html>

