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


$("body").on("click", "label", function(e) {
    var getValue = $(this).attr("for");
    var goToParent = $(this).parents(".select-size");
    var getInputRadio = goToParent.find("input[id = " + getValue + "]");
    console.log(getInputRadio.attr("id"));  
  });

  
  