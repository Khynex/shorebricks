let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("menu-list").style.top = "0";
    } else {
        document.getElementById("menu-list").style.top = "-90px";
    }
    prevScrollpos = currentScrollPos;
}

// Hide Header on on scroll down
gsap.registerPlugin(ScrollTrigger);

function splitScroll() {
    const controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
        duration: '200%',
        triggerElement: '.values-title',
        triggerHook: 0
    })

    .setPin('.values-title')

    .addTo(controller);
}
splitScroll();

gsap.to('.services', {
    x: 700,
    duration: 5,
    scrollTrigger: ".services"
});


//
// grab everything we need
const btn = document.querySelector(".mobile-menu-button");
const sidebar = document.querySelector(".sidebar");

// Event listener for the click
btn.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
});

// Text Animation
const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to("p", { x: "0%", duration: 1, stagger: 0.25 });

gsap.to(".mani", { y: 900, duration: 3 });