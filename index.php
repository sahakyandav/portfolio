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
            overflow-y: hidden;
        }

        #header {
            background-color: rgb(22, 21, 21);
            position: fixed;
            top: 0;
            z-index: 5;
        }

        @media screen and (max-width: 600px) {
            #header {
                height: 140px;
            }

            .main-slide1 {
                margin-top: 120px;
            }

            .main-intro > * {
              margin-bottom: 56px;
            }   
        }
    </style>
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
    <div class='contact-sidebar'>
        <div class="contact-item">
            <a href="https://github.com/sahakyandav" target='_blank'>
                <img src="./style/icons/github.png" alt="">
            </a>
        </div>
        <div class="contact-item">
            <a href="https://www.linkedin.com/in/david-sahakyan-775518218/" target='_blank'>
                <img src="./style/icons/linkedin.png" alt="">
            </a>
        </div>
        <div class="contact-item">
            <a href="https://www.fiverr.com/davsahakyann" target='_blank'>
                <img src="./style/icons/fiverr.png" alt="">
            </a>
        </div>
        <div class="contact-item">
             <a href="mailto: davsahakyan.work@gmail.com">
                <h1>@</h1>
            </a>
        </div>
    </div>
    <div class="main-intro">
        <div class="main-texts1">
            <div id="main-block1">
                <p id='intro'></p>
            </div>
            <p id="main-block3">
                <span id='intro3'></span>
            </p>
        </div>
        <section id="scroller1">
            <a class='scroll'>
                <span></span><span></span><span></span>
                <h1>Click to continue</h1>
            </a>
        </section>
    </div>
    <div class="main-slide1">
        <h1>A short <i>about me</i></h1>
        <div class="main-story-wrapper">
            <p class='main-story'>
                <span id="storyline"></span>
            </p>
        </div>
        <div class="main-languages">
            <div class="language" id="l1"></div>
            <div class="language" id="l2"></div>
        </div>
        <h2 id="outro">For more info on me, check <a href='./projects.php'><i>Projects</i></a> page</h2>
    </div>
    <script src="./js/script.js"></script>
    <script src="./js/uss.js"></script>
    <script src="./js/typed.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>