<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davsahakyan</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <header id="header">
        <h1 class="page-title"><span class="blue">dav</span>sahakyan</h1>
        <div class="menu">
            <div class="home"><a class="active-page">Home</a></div>
            <div class="projects"><a>Projects</a></div>
            <div class="contact"><a>Contact</a></div>
            <div class="blog"><a>Blog</a></div>
        </div>
    </header>
    <div class="main-intro">
        <div id="main-block1">
            <p id='intro'></p>
        </div>
        <!-- <div id="main-block2">
            <p id='intro2'></p>
        </div> -->
        <p id="main-block3">
            <span id='intro3'></span>
        </p>
    </div>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('#intro', {
            strings: ['Hey', 'I\'m David'],
            typeSpeed: 90,
            backSpeed: 50,
            backDelay: 300,
            onComplete: function() {
                setTimeout(() => {
                    typed.toggleBlinking();
                    typed.cursor.parentElement.style.width = getComputedStyle(typed.cursor.parentElement).getPropertyValue('width');
                    typed.cursor.remove();
                }, 40);
            }
        });

        // setTimeout(() => {
        //     var typed2 = new Typed('#intro2', {
        //     strings: ['I\'m David'],
        //     typeSpeed: 90,
        //     onComplete: function() {
        //         setTimeout(() => {
        //             typed2.toggleBlinking();
        //             typed2.cursor.parentElement.style.width = getComputedStyle(typed2.cursor.parentElement).getPropertyValue('width');
        //             typed2.cursor.remove();
        //         }, 40);
        //     }
        // });
        // }, 750);

        setTimeout(() => {
            var typed2 = new Typed('#intro3', {
            strings: ['A back-end developer based in Yerevan, Armenia'],
            typeSpeed: 90,
            onComplete: function() {
                setTimeout(() => {
                    // typed2.toggleBlinking();
                    // typed2.cursor.parentElement.style.width = '300px';
                    // typed2.cursor.remove();
                }, 40);
            }
        });
        }, 2400);
    </script>
</body>

</html>