document.addEventListener("DOMContentLoaded", () => {
    const button = document.getElementById("hamburger");
    const nav = document.getElementById("global-nav");

    if (!button || !nav) return;

    button.addEventListener("click", () => {
        const isOpen = nav.classList.toggle("is-open");

        button.classList.toggle("is-active", isOpen);
        button.setAttribute("aria-expanded", isOpen ? "true" : "false");
        nav.setAttribute("aria-hidden", isOpen ? "false" : "true");
    });

    const menuLinks = nav.querySelectorAll(".menu-item-has-children > a");

    const closeAllItems = () => {
        nav.querySelectorAll(".menu-item.is-open").forEach((item) => {
            item.classList.remove("is-open");
        });
    };

    const handleResize = () => {
        if (window.innerWidth >= 1024) {
            closeAllItems();
        }
    };

    window.addEventListener("resize", handleResize);
    handleResize();

    menuLinks.forEach((link) => {
        const item = link.closest(".menu-item");

        link.addEventListener("click", (event) => {
            if (window.innerWidth >= 1024) {
                return;
            }

            event.preventDefault();
            item.classList.toggle("is-open");
        });
    });
});

document.querySelectorAll(".cooperation > div > p").forEach((heading) => {
    heading.addEventListener("click", () => {
        const target = heading.nextElementSibling;

        if (!target) return;

        if (target.classList.contains("is-open")) {
            target.style.maxHeight = target.scrollHeight + "px";

            requestAnimationFrame(() => {
                target.style.maxHeight = "0px";
            });

            target.classList.remove("is-open");
        } else {
            target.style.maxHeight = target.scrollHeight + "px";
            target.classList.add("is-open");
        }
    });
});