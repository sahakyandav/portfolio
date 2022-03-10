<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davsahakyan</title>
    <link rel="stylesheet" href="./style/style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

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
    <?php
        echo "<div class='view-blog'>
        <a href='./blog.php'><- Return to blog</a>
        <div class='view-author'>{$_POST['author']}</div>
        <div class='view-title'>{$_POST['title']}</div>
        <div class='view-date'>{$_POST['date']}</div>
        <div class='view-content'>{$_POST['content']}</div>
        </div>";
    ?>
</body>
</html>