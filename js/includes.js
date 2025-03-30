function loadInclude(id, file) {
  fetch(file)
    .then(res => res.ok ? res.text() : Promise.reject(res.status))
    .then(html => { document.getElementById(id).innerHTML = html; })
    .catch(err => console.error(\`Failed to load ${file}: ${err}\`));
}

document.addEventListener("DOMContentLoaded", () => {
  loadInclude("header-include", "assets/header.html");
  loadInclude("navigation-include", "assets/navigation.html");
  loadInclude("footer-include", "assets/footer.html");
});