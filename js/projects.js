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
    });