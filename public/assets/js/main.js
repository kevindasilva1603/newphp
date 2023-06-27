window.onload = function () {
    const carousel = document.querySelector(".carousel");
    const slides = carousel.querySelectorAll("section");
    const slideWidth = slides[0].offsetWidth;
    let currentIndex = 0;

    function slideImage() {
        currentIndex = (currentIndex + 1) % slides.length;
        carousel.style.transform = `translateX(-${
            currentIndex * slideWidth
        }px)`;
    }

    const previousButton = document.querySelector(".bi-chevron-left");
    const nextButton = document.querySelector(".bi-chevron-right");

    previousButton.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            carousel.style.transform = `translateX(-${
                currentIndex * slideWidth
            }px)`;
        }
    });

    nextButton.addEventListener("click", () => {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
            carousel.style.transform = `translateX(-${
                currentIndex * slideWidth
            }px)`;
        }
    });

    setInterval(slideImage, 5000);
};
