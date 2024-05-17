function showArticles() {
    // Hide all sections
    document.querySelectorAll('main section').forEach(section => {
        section.style.display = 'none';
    });
    // Show the articles section
    document.querySelector('.articles').style.display = 'block';
}

function showUsers() {
    // Hide all sections
    document.querySelectorAll('section > div').forEach(section => {
        section.style.display = 'none';
    });
    // Show the users section
    document.querySelector('.users').style.display = 'block';
}