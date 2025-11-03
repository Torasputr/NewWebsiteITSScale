document.addEventListener("DOMContentLoaded", function () {
    function initializeDesktopFeatures() {
        // Check if the screen is in desktop mode
        if (window.matchMedia("(min-width: 1024px)").matches) {
            // Milestone Buttons
            const milestonebuttons = document.querySelectorAll(
                ".milestonebtn-container button"
            );
            const milestonetexts = document.querySelectorAll(
                ".milestonetext-container h6"
            );

            milestonebuttons.forEach((button) => {
                button.addEventListener("click", function () {
                    milestonetexts.forEach((text) =>
                        text.classList.add("d-none")
                    );

                    const year = this.id.split("-")[0];
                    document
                        .getElementById(year + "-text")
                        .classList.remove("d-none");
                });
            });

            // Visi Misi Buttons
            document
                .getElementById("visi-btn")
                .addEventListener("click", function () {
                    document
                        .querySelector(".visi-text")
                        .classList.remove("d-none");
                    document
                        .querySelector(".visi-text")
                        .classList.add("d-block");
                    document
                        .querySelector(".misi-text")
                        .classList.remove("d-block");
                    document
                        .querySelector(".misi-text")
                        .classList.add("d-none");
                });

            document
                .getElementById("misi-btn")
                .addEventListener("click", function () {
                    document
                        .querySelector(".visi-text")
                        .classList.add("d-none");
                    document
                        .querySelector(".visi-text")
                        .classList.remove("d-block");
                    document
                        .querySelector(".misi-text")
                        .classList.add("d-block");
                    document
                        .querySelector(".misi-text")
                        .classList.remove("d-none");
                });
        }
    }

    function initializeMobileSwiper() {
        // Check if the screen is in mobile mode
        if (window.innerWidth < 1024) {
            new Swiper(".swiper-container", {
                slidesPerView: 1, // Show one slide at a time
                spaceBetween: 10, // Space between slides
                pagination: {
                    el: ".swiper-pagination", // Pagination dots
                    clickable: true,
                },
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
            });
        }
    }

    // Call functions
    initializeDesktopFeatures();
    initializeMobileSwiper();
});
