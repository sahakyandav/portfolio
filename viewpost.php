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
        <a href='./blog.php'><- Return to blog</a><br><br>
        <div class='view-author'>Author &nbsp;<span class='bold'>{$_POST['author']}</span></div>
        <div class='view-title'>Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='bold'>{$_POST['title']}</span></div>
        <div class='view-date'>Date  &nbsp;&nbsp;&nbsp;&nbsp;<span class='bold'>{$_POST['date']}</span></div><br>
        <div class='view-content'>{$_POST['content']}</div>
        </div>";
    ?>
</body>
</html>