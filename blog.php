<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header id="header">
        <h1 class="page-title"><span class="blue">dav</span>sahakyan</h1>
        <div class="menu">
            <div class="home"><a>Home</a></div>
            <div class="projects"><a>Projects</a></div>
            <div class="contact"><a>Contact</a></div>
            <div class="blog"><a class="active-page">Blog</a></div>
        </div>
    </header>
    <script src="./script.js"></script>
    <div class="main-content">
        <div class="write-entry">
            <form id='form' action="process-blog.php" method="post" onsubmit='return validate()'>
                Author: <input type="text" name="author" id='authorInput'><br>
                <span class="error" id='e1'></span><br>
                Title: <input type="text" name="title" id='titleInput'><br>
                <span class="error" id='e2'></span><br>
                <textarea type="text" name="entry" id="textarea" contenteditable="true"></textarea><br>
                <span class="error" id='e3'></span><br>
                <input type="submit" id="submit-entry">
            </form>
        </div>
        <?php
        $myfile = fopen("blog.txt", "r+") or die("Unable to open file!");
        if (filesize("blog.txt") != 0) {
            while (!feof($myfile)) {
                $l = fgets($myfile);
                $c = explode("-", $l);
                echo "<div class='blog-entry'>On {$c[0]}, <span class='bold'>{$c[1]}</span> wrote:" . "<br><span class='bold'>$c[2]</span><br>" . $c[3] . "<br><br></div>";
            }
        }
        fclose($myfile);
        ?>
        </p>
        <script>
            function validate() {
                let returnOne = true;
                let returnTwo = true;
                let returnThree = true;
                let n = document.querySelector('#authorInput');
                let p = document.querySelector('#titleInput');
                let t = document.querySelector('#textarea');
                let e1 = document.querySelector('#e1');
                let e2 = document.querySelector('#e2');
                let e3 = document.querySelector('#e3');
                if (n.value === "") {
                    e1.innerText = 'this field cannot be empty'
                    returnOne = false;
                } else {
                    e1.innerText = ''
                    returnOne = true;
                }
                if (p.value === "") {
                    e2.innerText = 'this field cannot be empty'
                    returnTwo = false;
                } else {
                    e2.innerText = ''
                    returnTwo = true;
                }
                if (t.value === "") {
                    e3.innerText = 'this field cannot be empty'
                    returnThree = false;
                } else {
                    e3.innerText = ''
                    returnThree = true;
                }
                return (returnOne && returnTwo && returnThree);
            }
        </script>
</body>

</html>