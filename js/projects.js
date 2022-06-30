fetch('https://api.github.com/users/sahakyandav/repos')
    .then(response => response.text())
    .then(data => {
        let repos = JSON.parse(data);
        repos.sort((a, b) => {
            return a.stargazers_count - b.stargazers_count;
        }).forEach(repo => {
            let div = document.createElement('div');
            div.classList.add('repo');
            div.innerHTML = `
                    <div class="repo-title">
                        <a href=${repo.html_url} target = '_blank'>
                            ${repo.name}
                        </a>
                    </div>
                    <div class="repo-description">
                        ${!!repo.description ? repo.description : 'No description yet'}
                    </div>
                    <div class="repo-stars">
                        &#9733;${repo.stargazers_count}
                    </div>
                `;
            document.querySelector('.repos').appendChild(div)
        })
    }).catch(e => {
        document.querySelector('.repos').innerHTML = `<h2 class="github-fallback">Sorry, the github api got a bit overloaded.<br>Check back a bit later</h2>`
    })

window.addEventListener('load', () => {
    let element = document.querySelector('.introduction a');
    setTimeout(() => {
        element.classList.add('introduction-animated');
        if (window.innerWidth > 600) {
            setTimeout(() => {
                element.classList.remove('introduction-animated');
            }, 2000)
        }
    }, 400)
})