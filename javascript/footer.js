window.addEventListener("DOMContentLoaded", (e) => { 
    let footer = document.querySelector("footer");

    let copyright = document.createElement("p");
    copyright.textContent = "© 2021 Olga Koldachenko";

    let source = document.createElement("a");
    source.href = "https://github.com/okold/homepage";
    source.textContent = "Source Code";

    footer.appendChild(source);
    footer.appendChild(copyright);
});