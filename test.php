<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include('pagination.php');

    echo pagination(10);
    echo "<br>\n";
    echo pagination(60);
    echo "<br>\n";
    echo pagination(120);
    echo "<br>\n";
    echo pagination(600);
    echo "<br>\n";
    echo pagination(50, ['current_page' => 49, 'step' => 3]);
    echo "<br>\n";
    echo pagination(20, ['current_page' => 4, 'step' => 5]);


    ?>

</body>

</html>