function loadContent(url) {
    const contentArea = document.getElementById('content-area');
    fetch(url)
        .then(response => response.text())
        .then(html => {
            contentArea.innerHTML = html;
        })
        .catch(error => console.error('Error loading content:', error));
}
