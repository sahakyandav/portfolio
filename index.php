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
        <div class="main-texts1">
            <div id="main-block1">
                <p id='intro'></p>
            </div>
            <p id="main-block3">
                <span id='intro3'></span>
            </p>
        </div>
        <section id="scroller1">
            <a href="#2" class='scroll'>
                <span></span><span></span><span></span>
                <h1>Click to continue</h1>
            </a>
        </section>
    </div>
    <div class="nor" style='height: 100vh'></div>
    <div class="nor2" style='height: 100vh'></div>
    <script src="./js/script.js"></script>
    <script src="./js/universalsmoothscroll-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        let scroller1 = document.querySelector('#scroller1');
        
        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual';
        }
        window.scrollTo(0,0)

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

        setTimeout(() => {
            var typed2 = new Typed('#intro3', {
            strings: ['A back-end developer based in Yerevan, Armenia'],
            typeSpeed: 90,
            onComplete: function() {
                setTimeout(() => {
                    scroller1.style.opacity = '1';
                    scroller1.style.pointerEvents = 'auto';
                }, 40);
            }
        })}, 2400);

        document.querySelectorAll('.scroll').forEach(btn => {
            btn.addEventListener('click', function() {
                // window.scrollBy({
                    // left: 0,
                    // top: document.documentElement.clientHeight,
                    // behavior: 'smooth'
                // });
                uss.scrollYBy(781)
            });
        });
    </script>
</body>

</html>