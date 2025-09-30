// ------------------- Contatori animati -------------------
const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        let count = +counter.innerText;
        const increment = target / 200; // circa 0.5 secondi
        if(count < target) {
            counter.innerText = Math.ceil(count + increment);
            requestAnimationFrame(updateCount);
        } else {
            counter.innerText = target;
        }
    };
    updateCount();
});

// ------------------- Scroll banner -------------------
const scrollWrapper = document.getElementById('scrollBanner');
let leftPos = window.innerWidth; // parte da destra
const speed = 4; // px per frame, più veloce

function animateScrollBanner() {
    leftPos -= speed;
    scrollWrapper.style.left = leftPos + 'px';

    // quando esce completamente a sinistra, resetta a destra
    if (leftPos + scrollWrapper.offsetWidth < 0) {
        leftPos = window.innerWidth;
    }
    requestAnimationFrame(animateScrollBanner);
}

requestAnimationFrame(animateScrollBanner);
