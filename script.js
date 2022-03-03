document.querySelector('.home').onclick = () => {
    location.replace('index.php')
}
document.querySelector('.projects').onclick = () => {
    location.replace('projects.php')
}
document.querySelector('.contact').onclick = () => {
    location.replace('contact.php')
}
document.querySelector('.blog').onclick = () => {
    location.replace('blog.php')
}

// window.onload = function () {
    let startElements = ['header'];

    startElements.forEach(e => {
        // document.querySelector(e).style.animation = 'onload 0.8s forwards';
        document.querySelector(e).style.opacity = '1';
    })
// }    