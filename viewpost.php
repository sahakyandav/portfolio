<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davsahakyan</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        a {
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            color: purple;
        }
    </style>
</head>
<body>
    <a href="./blog.php"><- Return to blog</a>
    <br>
    <?php
        echo $_POST['author'] . '<br>';
        echo $_POST['title'] . '<br>';
        echo $_POST['date'] . '<br>';
        echo $_POST['content'] . '<br>';

    ?>
</body>
</html>