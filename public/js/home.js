document.addEventListener("DOMContentLoaded", function () {
    // Highlight Slider
    var swiper = new Swiper(".highlight-swiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    // Brand Swiper
    var swiper = new Swiper(".brand-swiper", {
        loop: true,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
        },
    });

    // Category Fade In
    $(document).ready(function () {
        $(".category-item").each(function (index) {
            $(this).addClass("animate__slideInLeft");
            $(this).css("animation-delay", `${index * 300}ms`);
        });
    });
});

document.addEventListener("DOMContentLoaded", async () => {
    const rssUrl = "/youtube-rss";

    try {
        const response = await fetch(rssUrl);
        if (!response.ok) {
            throw new Error(`HTTP Server Error! Status: ${response.status}`);
        }

        const xml = await response.text();

        const parser = new DOMParser();
        const rss = parser.parseFromString(xml, "application/xml");

        const entries = rss.getElementsByTagName("entry");

        let latestVideoId = null;
        for (let entry of entries) {
            const link = entry.querySelector("link").getAttribute("href");
            if (!link.includes("/shorts/")) {
                const videoIdElement = entry.getElementsByTagNameNS(
                    "http://www.youtube.com/xml/schemas/2015",
                    "videoId"
                )[0];
                latestVideoId = videoIdElement.textContent;
                break;
            }
        }

        if (!latestVideoId) {
            throw new Error("No non-Shorts video found in the RSS feed.");
        }
        const iframes = document.querySelectorAll(".youtube-container iframe");
        iframes.forEach((iframe) => {
            iframe.src = `https://www.youtube.com/embed/${latestVideoId}`;
        });
    } catch (e) {
        console.error("Error fetching YouTube RSS feed: ", e);
    }
});
