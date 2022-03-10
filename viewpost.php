<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davsahakyan</title>
    <link rel="stylesheet" href="./style/style.css">
    <style>
        a {
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            color: purple;
        }

        .view-blog-main {
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <header id="header">
        <h1 class="page-title"><span class="blue">dav</span>sahakyan</h1>
        <div class="menu">
            <div class="home"><a>Home</a></div>
            <div class="projects"><a class="active-page">Projects</a></div>
            <div class="contact"><a>Contact</a></div>
            <div class="blog"><a>Blog</a></div>
        </div>
    </header>
    <div class="view-blog-main">
        <?php
            echo "<div class='view-blog'>
            <a href='./blog.php'><- Return to blog</a><br><br>
            <div class='view-author'>Author &nbsp;<span class='bold'>{$_POST['author']}</span></div>
            <div class='view-title'>Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='bold'>{$_POST['title']}</span></div>
            <div class='view-date'>Date  &nbsp;&nbsp;&nbsp;&nbsp;<span class='bold'>{$_POST['date']}</span></div><br>
            <div class='view-content'>{$_POST['content']}</div>
            </div>";
        ?>
    </div>
</body>
</html>