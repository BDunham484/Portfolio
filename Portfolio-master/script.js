const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");

// Toggle Nav
    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        nav.classList.toggle("nav-in");
    // Animate Links
    navLinks.forEach((link, index) => {
        if (link.style.animation) {
            link.style.animation = ""
        } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + .75}s`;
        }
            
        });
        // Burger Animation
        burger.classList.toggle("toggle");
    });
    
}

navSlide();


function parallax(element, distance, speed) {
    const item = document.querySelector(element);
    item.style.transform = `translateY(${distance * speed}px)`;

}

window.addEventListener("scroll", function(){
    parallax("header", window.scrollY, .9);
    parallax('#triangle2', window.scrollY, 0.3);
    parallax('#triangle3', window.scrollY, 0.2);
});


