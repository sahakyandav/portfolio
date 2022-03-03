<html>

<body>
    Redirecting back to blog...
    <?php
    $author = $title = $entry = "";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $author = test_input($_POST["author"]);
        $title = test_input($_POST["title"]);
        $entry = test_input($_POST["entry"]);
        $start_char = "\n";
        $myfile = fopen("blog.txt", "a+") or die("Unable to open file!");
        if (filesize('blog.txt') === 0)
            $start_char = '';
        fwrite($myfile, $start_char . date("m.d.y, G:i:s") . "-{$author}-{$title}-{$entry}");
        fclose($myfile);
        header("Location: blog.php");
    }
    ?>
</body>

</html>