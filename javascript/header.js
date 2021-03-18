window.addEventListener("DOMContentLoaded", (e) => {
    let header = document.querySelector("header");
    let nav = document.createElement("ul");
    nav.id = "nav";

    let links = [
        {href: "index.html", text: "Home"},
        {href: "stories.html", text: "Stories"},
        {href: "https://github.com/okold/", text: "GitHub"},
        {href: "mailto: okold525@mtroyal.ca", text: "Email"}
    ];

    for (let link of links) {
        let li = document.createElement("li");

        let a = document.createElement("a");

        a.href = link.href;
        a.textContent = link.text;

        li.appendChild(a);
        nav.appendChild(li);
    }

    header.appendChild(nav);
})