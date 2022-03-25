if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
}

// window.scrollTo(0, 0)

let scroller1 = document.querySelector('#scroller1');
var typed = new Typed('#intro', {
    strings: ['Hey', 'I\'m David'],
    typeSpeed: 90,
    backSpeed: 50,
    backDelay: 300,
    onComplete: function () {
        setTimeout(() => {
            typed.toggleBlinking();
            typed.cursor.parentElement.style.width = getComputedStyle(typed.cursor.parentElement).getPropertyValue('width');
            typed.cursor.remove();
            new Typed('#intro3', {
                strings: ['A starting back-end developer based in<br>Yerevan, Armenia'],
                typeSpeed: 85,
                onComplete: function () {
                    setTimeout(() => {
                        scroller1.style.opacity = '1';
                        scroller1.style.pointerEvents = 'auto';
                    }, 40);
                }
            })
        }, 40);
    }
});

let revealed = false;
let typed3;
let slide1 = document.querySelector('.main-slide1');
document.querySelectorAll('.scroll').forEach(btn => {
    btn.addEventListener('click', function () {
        uss.scrollYBy(document.querySelector('.main-intro').offsetHeight)
        if (!revealed) {
            revealed = true;
            setTimeout(() => {
                typed3 = new Typed('#storyline', {
                    strings: ['In 2021, I started my first full-time job as a developer', 'Learining how to create web<br>banners, I started freelancing on side', 'But then it finally clicked - front-end was not for me,<br>so I started getting into back-end', 'Currently I am learning'],
                    typeSpeed: 70,
                    backSpeed: 8,
                    backDelay: 400,
                    onComplete: function () {
                        setTimeout(() => {
                            document.body.style.overflowY = 'scroll';
                            document.querySelectorAll('.language').forEach((lang, i) => {
                                lang.style.animation = `language 0.9s ease ${i * 0.6}s forwards`;
                            })
                            setTimeout(() => {
                                document.querySelector('#outro').style.animation = `outro 1s ease forwards`;
                            }, 1550)
                        }, 40);
                    }
                })
            }, 800);
        }
    });
});