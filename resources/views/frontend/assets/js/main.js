(function() {
	"use strict";
    
    window.onload = function(){

        //Header Sticky
        const getHeaderId = document.querySelector(".navbar-area");
        if (getHeaderId) {
            window.addEventListener('scroll', event => {
                const height = 150;
                const { scrollTop } = event.target.scrollingElement;
                document.querySelector('#navbar').classList.toggle('sticky', scrollTop >= height);
            });
        }

        // Back to Top
        let progressPath = document.getElementById("progress-path");
        let progressWrap = document.getElementById("progress-wrap");
        let pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.webkitTransition = "none";
        progressPath.style.strokeDasharray = pathLength + " " + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.webkitTransition =
        "stroke-dashoffset 10ms linear";
        
        const onScollEvent = function (event) {
            let scroll = window.scrollY;
            let height = document.body.scrollHeight - window.innerHeight;
            let progress = pathLength - (scroll * pathLength) / height;
            progressPath.style.strokeDashoffset = progress;

            let offset = 50;
                if (window.scrollY > offset) {
                progressWrap.classList.add("active-progress");
                } else {
                progressWrap.classList.remove("active-progress");
            }
        };

        onScollEvent();
            window.onscroll = onScollEvent;
            progressWrap.onclick = function (event) {
            window.scroll({ top: 0, behavior: "smooth" });
            return false;
        };

        //Bootstrap Tooltip
        document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
            new bootstrap.Tooltip(el);
        });

        // Preloader
        const getPreloaderId = document.getElementById('preloader');
        if (getPreloaderId) {
            getPreloaderId.style.display = 'none';
        }

    };

    //Hero Slider
    var hero_thumbslider = new Swiper(".hero-thumbslider", {
        spaceBetween: 15,
        slidesPerView: 4,
        mousewheel: true,
        freeMode: true,
        direction: "vertical",
        breakpoints:{
            0: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 3,

            }
        },
        watchSlidesProgress: true,
    });
    var hero_slider_one = new Swiper(".hero-slider-one", {
        spaceBetween: 10,
        fadeEffect: { crossFade: true },
        effect: "fade",
        speed: 1500,
        thumbs: {
            swiper: hero_thumbslider,
        },
    });

    //Product Slider
    var product_sliderOne = new Swiper(".product-slider-one", {
		loop: true,
		speed: 1500,
		spaceBetween: 25,
        pagination: {
            el: ".product-pagination",
            clickable: true,
        },
        breakpoints:{
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 25
            },
            1400: {
                slidesPerView: 4,
                spaceBetween: 30,
            }
        }
	});
    var product_sliderTwo = new Swiper(".product-slider-two", {
		loop: true,
		speed: 1500,
		spaceBetween: 25,
        pagination: {
            el: ".product-pagination",
            clickable: true,
        },
        breakpoints:{
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2.1
            },
            992: {
                slidesPerView: 2.6
            },
            1200: {
                slidesPerView: 3.2
            },
            1300: {
                slidesPerView: 3.8
            },
            1400: {
                slidesPerView: 4.2,
                spaceBetween: 25
            },
            1600: {
                slidesPerView: 4.82,
                spaceBetween: 30
            }
        }
	});
    var product_sliderThree = new Swiper(".product-slider-three", {
		loop: true,
		speed: 1500,
		spaceBetween: 25,
        navigation: {
            nextEl: ".product-next",
            prevEl: ".product-prev",
        },
        breakpoints:{
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 3
            }
        }
	});

    //Service Slider
    var service_sliderOne = new Swiper(".service-slider-one", {
		loop: true,
		speed: 1500,
		spaceBetween: 25,
        navigation: {
            nextEl: ".service-next",
            prevEl: ".service-prev",
        },
        breakpoints:{
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 3
            },
            1400: {
                slidesPerView: 4
            }
        }
	});

    //Project Slider
    var project_sliderOne = new Swiper(".project-slider-one", {
		loop: true,
		speed: 1500,
		spaceBetween: 8,
        slidesPerView: 1,
        autoHeight: true,
        navigation: {
            nextEl: ".project-next",
            prevEl: ".project-prev",
        },
        breakpoints:{
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 3,
            },
            1400: {
                slidesPerView: 4,
            }
        }
	});

    //Testimonial Slider
    var testimonial_sliderOne = new Swiper(".testimonial-slider-one", {
		loop: false,
		speed: 1500,
		spaceBetween: 25,
        slidesPerView: 1,
        autoHeight: true,
        fadeEffect: { crossFade: true },
        effect: "fade",
        pagination: {
            el: ".testimonial-pagination",
            clickable: true,
        }
	});

    var testimonial_sliderTwo = new Swiper(".testimonial-slider-two", {
		loop: true,
		speed: 1500,
		spaceBetween: 25,
        autoHeight: true,
        slidesPerView: 1,
        navigation: {
            nextEl: ".testimonial-next",
            prevEl: ".testimonial-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 1
            },
            992: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 2
            }
        }
	});

    var testimonial_sliderTwo = new Swiper(".testimonial-slider-three", {
		loop: true,
		speed: 1500,
		spaceBetween: 30,
        autoHeight: true,
        slidesPerView: 1,
        fadeEffect: { crossFade: true },
        effect: "fade",
        navigation: {
            nextEl: ".testimonial-next",
            prevEl: ".testimonial-prev",
        }
	});

    var testimonial_sliderTwo = new Swiper(".testimonial-slider-four", {
		loop: true,
		speed: 1500,
		spaceBetween: 25,
        autoHeight: true,
        slidesPerView: 1,
        pagination: {
            el: ".testimonial-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 1
            },
            992: {
                slidesPerView: 2
            },
        }
	});

    //Instagram Slider
	var insta_slider_one = new Swiper(".insta-slider-one", {
        loop: false,
        speed: 15000,
        freemode: false,
        spaceBetween: 20,
        simulateTouch: false,
        autoplay: {
            delay: 1,
            disableOnInteraction: false
        },
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 2.5
            },
            768: {
                slidesPerView: 3.5
            },
            992: {
                slidesPerView: 4.5
            },
            1200: {
                slidesPerView: 5.2,
                 spaceBetween: 20
            },
            1400: {
                slidesPerView: 6,
                 spaceBetween: 28
            }
        }
    });
	var insta_slider_two = new Swiper(".insta-slider-two", {
        loop: false,
        speed: 15000,
        freemode: false,
        spaceBetween: 0,
        simulateTouch: false,
        autoplay: {
            delay: 1,
            disableOnInteraction: false
        },
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 3.5
            },
            768: {
                slidesPerView: 4
            },
            992: {
                slidesPerView: 5
            },
            1200: {
                slidesPerView: 6
            },
            1400: {
                slidesPerView: 7
            },
            1600: {
                slidesPerView: 8
            }
        }
    });
    var insta_slider_one = new Swiper(".insta-slider-three", {
        loop: false,
        speed: 15000,
        freemode: false,
        spaceBetween: 20,
        simulateTouch: false,
        autoplay: {
            delay: 1,
            disableOnInteraction: false
        },
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 2.5
            },
            768: {
                slidesPerView: 3.5
            },
            992: {
                slidesPerView: 4.5
            },
            1200: {
                slidesPerView: 5.2,
                 spaceBetween: 20
            },
            1400: {
                slidesPerView: 7.5,
                spaceBetween: 28
            }
        }
    });

    // Counter Js
    if ("IntersectionObserver" in window) {
        let counterObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                let counter = entry.target;
                let target = parseInt(counter.innerText, 10);
                let step = target / 200;
                let current = 0;
                let timer = setInterval(function () {
                    current += step;
                    counter.innerText = Math.floor(current);
                    if (parseInt(counter.innerText, 10) >= target) {
                    clearInterval(timer);
                    }
                }, 10);
                counterObserver.unobserve(counter);
                }
            });
        });
        let counters = document.querySelectorAll(".counter");
            counters.forEach(function (counter) {
            counterObserver.observe(counter);
        });
    }

    //Custom Date
    const input = document.getElementById('customDateInput');
    const wrapper = document.getElementById('dateWrapper');

    if (input && wrapper) {
        wrapper.addEventListener('click', () => {
            if (typeof input.showPicker === 'function') {
                input.showPicker();
            } else {
                input.focus();
            }
        });
        function updateEmptyClass() {
            if (!input.value) {
                input.classList.add('empty');
            } else {
                input.classList.remove('empty');
            }
        }
        input.addEventListener('change', updateEmptyClass);
        updateEmptyClass();
    }
    //Gsap Mousemove Animation
    document.addEventListener("mousemove", mouseMoveFunc);
    let moveonmouse = gsap.utils.toArray(".moveContent");

    function mouseMoveFunc(e) {
        moveonmouse.forEach((circle, index) => {
            const depth = 65;
            const moveX = (e.pageX - window.innerWidth / 2) / depth;
            const moveY = (e.pageY - window.innerHeight / 2) / depth;
            index ++

            gsap.to(circle, {
            x: moveX * index,
            y: moveY * index,
            });
        });
    }

    //Title Animation With SplitText 
    let splitTitleLines = gsap.utils.toArray(".title-anim");

    splitTitleLines.forEach(splitTextLine => {
        const tl = gsap.timeline({
            scrollTrigger: {
            trigger: splitTextLine,
            start: 'top 90%',
            end: 'bottom 60%',
            scrub: false,
            markers: false,
            toggleActions: 'play none none none'
        }
    });

    const itemSplitted = new SplitText(splitTextLine, { type: "words, lines" });
    gsap.set(splitTextLine, { perspective: 400 });
    itemSplitted.split({ type: "lines" })
    tl.from(itemSplitted.lines, { duration: 1, delay: 0.3, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
    });

    //Text Reveal Animation
    window.addEventListener("load", function() {
        gsap.registerPlugin(CustomEase);
    
        // Wrap every letter
        const textRevealElements = document.querySelectorAll(".reveal-text");
    
        textRevealElements.forEach((element) => {
            element.innerHTML = element.textContent.replace(
                /([-A-Za-z0-9!$#%^&*@()_+|~=`{}\[\]:";'<>?,.\/]+)/g,
                '<div class="word">$1</div>'
            );
    
            let words = element.querySelectorAll(".word");
            words.forEach((word) => {
                word.innerHTML = word.textContent.replace(
                    /[-A-Za-z0-9!$#%^&*@()_+|~=`{}\[\]:";'<>?,.\/]/g,
                    "<div class='perspective'><div class='letter'><div>$&</div></div></div>"
                );
            });
    
            const letters = element.querySelectorAll(".letter");
    
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: element,
                    toggleActions: "restart none none reset"
                }
            });
            tl.set(element, { autoAlpha: 1 });
            tl.fromTo(
                letters,
                0.6, {
                    transformOrigin: "center",
                    rotationY: 90,
                    x: 30
                }, {
                    rotationY: 0.1,
                    x: 0,
                    stagger: 0.025,
                    ease: CustomEase.create("custom", "M0,0 C0.425,0.005 0,1 1,1 ")
                }
            );
        });
    });
    
    //Gsap Image Tilt Effect
    document.addEventListener("DOMContentLoaded", () => {
        const images = document.querySelectorAll(".tilt-img"); // Select all images

        images.forEach((img) => {
            img.addEventListener("mousemove", (e) => {
                const { width, height, left, top } = img.getBoundingClientRect();
                const x = (e.clientX - left - width / 2) / width * 2;
                const y = (e.clientY - top - height / 2) / height * 2;

                gsap.to(img, {
                    rotateY: x * 15, 
                    rotateX: y * -15, 
                    transformPerspective: 2000,
                    ease: "power2.out",
                    duration: 0.3,
                });
            });

            img.addEventListener("mouseleave", () => {
                gsap.to(img, {
                    rotateY: 0,
                    rotateX: 0,
                    duration: 0.5,
                    ease: "power2.out",
                });
            });
        });
    });

    //Gsap Reveal Shape Animation
    gsap.registerPlugin(ScrollTrigger);

    // Initialize Lenis
    const lenis = new Lenis({
        duration: 1.8,       // Increase for more inertia
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Custom ease
        smooth: true
    });

    // Animate scroll with requestAnimationFrame
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Sync ScrollTrigger with Lenis
    lenis.on('scroll', ScrollTrigger.update);

    // ScrollTrigger setup
    ScrollTrigger.scrollerProxy("#smooth-content", {
        scrollTop(value) {
            return arguments.length ? lenis.scrollTo(value, { immediate: true }) : lenis.scroll;
        },
        getBoundingClientRect() {
            return {
                top: 0,
                left: 0,
                width: window.innerWidth,
                height: window.innerHeight
            };
        },
        pinType: document.querySelector("#smooth-content").style.transform ? "transform" : "fixed"
    });

    // Refresh on load
    ScrollTrigger.refresh();
    
     //Move Element On Scroll
    if (document.querySelector(".move-left")) {
        gsap.to('.move-left', {
            xPercent: 60,
            ease: "none",
            scrollTrigger: {
                trigger: ".move-left",
                start: "0% 90%",
                end: "100% 10%",
                scrub: true
            }
        });
    }
    if (document.querySelector(".move-right")) {
        gsap.to('.move-right', {
            xPercent: -50,
            ease: "none",
            scrollTrigger: {
                trigger: ".move-right",
                start: "0% 90%",
                end: "100% 10%",
                scrub: true
            }
        });
    }
    if (document.querySelector(".move-top")) {
        gsap.to('.move-top', {
            yPercent: -70,
            ease: "none",
            scrollTrigger: {
                trigger: ".move-top",
                start: "0% 85%",
                end: "100% 10%",
                scrub: true
            }
        });
    }
    if (document.querySelector(".move-bottom")) {
        gsap.to('.move-bottom', {
            yPercent: 80,
            ease: "none",
            scrollTrigger: {
                trigger: ".move-bottom",
                start: "0% 5%",
                end: "100% 0%",
                scrub: true
            }
        });
    }

    //Newsletter Popup
    document.addEventListener("DOMContentLoaded", function () {
        const popup = document.getElementById("newsletter-popup");
        const overlay = document.getElementById("popup-overlay");
        const closeBtn = popup.querySelector(".close-btn");
        const checkbox = document.getElementById("dont-show-again");

        // Show after 8 seconds if user hasn't opted out
        if (!localStorage.getItem("newsletterOptOut")) {
            setTimeout(() => {
                popup.classList.add("show");
                overlay.classList.add("show");
            }, 8000);
        }

        function closePopup() {
            popup.classList.remove("show");
            overlay.classList.remove("show");

            if (checkbox.checked) {
                localStorage.setItem("newsletterOptOut", "true");
            }
        }

        closeBtn.addEventListener("click", closePopup);
        overlay.addEventListener("click", closePopup);
    });

    //Quantity Counter
    var resultEl = document.querySelector(".resultSet"),
    plusMinusWidgets = document.querySelectorAll(".v-counter");

    // Adding event listeners to all plus and minus buttons
    for (var i = 0; i < plusMinusWidgets.length; i++) {
        plusMinusWidgets[i].querySelector(".minusBtn").addEventListener("click", clickHandler);
        plusMinusWidgets[i].querySelector(".plusBtn").addEventListener("click", clickHandler);
    }

    function clickHandler(event) {
        var countEl = event.target.parentNode.querySelector(".count");
        if (event.target.className.match(/\bminusBtn\b/)) {
            countEl.value = Math.max(0, Number(countEl.value) - 1); // Prevents going below zero
        } 
        else if (event.target.className.match(/\bplusBtn\b/)) {
            countEl.value = Number(countEl.value) + 1;
        }
        triggerEvent(countEl, "change");
    }
    function triggerEvent(el, type) {
        if ('createEvent' in document) {
            // Modern browsers (IE9+)
            var e = document.createEvent('HTMLEvents');
            e.initEvent(type, false, true);
            el.dispatchEvent(e);
        } else {
            // IE 8
            var e = document.createEventObject();
            e.eventType = type;
            el.fireEvent('on' + e.eventType, e);
        }
    }

    // Scrollcue
    scrollCue.init();

})();   

    //Countdown Timer JS
    function startCountdown(element, endDate) {
        function update() {
            const now = new Date().getTime();
            const target = new Date(endDate).getTime();
            const timeLeft = target - now;

            if (timeLeft <= 0) {
                element.innerHTML = "<div class='cdown'><span class='time-count'>0</span> <p>Time's Up!</p></div>";
                clearInterval(timer);
                return;
            }

            const seconds = Math.floor((timeLeft / 1000) % 60);
            const minutes = Math.floor((timeLeft / 1000 / 60) % 60);
            const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));

            element.innerHTML = `
                <div class="cdown day"><span class="time-count">${days}</span><p>Days</p></div>
                <div class="cdown hour"><span class="time-count">${hours}</span><p>Hours</p></div>
                <div class="cdown minutes"><span class="time-count">${minutes}</span><p>Mins</p></div>
                <div class="cdown second"><span class="time-count">${seconds}</span><p>Secs</p></div>
            `;
        }
        update();
        const timer = setInterval(update, 1000);
    }

    // Only run if there are countdown elements
    document.addEventListener("DOMContentLoaded", () => {
        const countdownElements = document.querySelectorAll('[data-countdown]');
        if (countdownElements.length === 0) return; // Exit if none found

        countdownElements.forEach(el => {
            const finalDate = el.getAttribute('data-countdown');
            if (finalDate) startCountdown(el, finalDate);
        });
    });

    //Price Range Slider
    document.addEventListener('DOMContentLoaded', function () {
        const minPriceSlider = document.getElementById('minPrice');
        const maxPriceSlider = document.getElementById('maxPrice');
        const minPriceDisplay = document.getElementById('minPriceDisplay');
        const maxPriceDisplay = document.getElementById('maxPriceDisplay');
        const progress = document.querySelector('.range-progress');

        function initializePriceRangeSlider() {
            function updatePriceDisplay() {
                minPriceDisplay.textContent = `$${minPriceSlider.value}`;
                maxPriceDisplay.textContent = `$${maxPriceSlider.value}`;
            }

            function updateProgress() {
                const minVal = parseInt(minPriceSlider.value, 10);
                const maxVal = parseInt(maxPriceSlider.value, 10);
                const minRange = parseInt(minPriceSlider.min, 10);
                const maxRange = parseInt(minPriceSlider.max, 10);

                const leftPercent = ((minVal - minRange) / (maxRange - minRange)) * 100;
                const rightPercent = ((maxVal - minRange) / (maxRange - minRange)) * 100;

                progress.style.left = leftPercent + '%';
                progress.style.right = (100 - rightPercent) + '%';
            }

            minPriceSlider.addEventListener('input', function () {
                if (parseInt(minPriceSlider.value, 10) > parseInt(maxPriceSlider.value, 10)) {
                    minPriceSlider.value = maxPriceSlider.value;
                }
                updatePriceDisplay();
                updateProgress();
            });

            maxPriceSlider.addEventListener('input', function () {
                if (parseInt(maxPriceSlider.value, 10) < parseInt(minPriceSlider.value, 10)) {
                    maxPriceSlider.value = minPriceSlider.value;
                }
                updatePriceDisplay();
                updateProgress();
            });

            updatePriceDisplay();
            updateProgress();
        }

        if (minPriceSlider && maxPriceSlider && minPriceDisplay && maxPriceDisplay && progress) {
            initializePriceRangeSlider();
        } else {
            console.log("Price range slider not initialized: required elements not found.");
        }
    }); 

    //Custom Cursor
    var cursor = document.querySelector('.cursor');
    var cursorinner = document.querySelector('.cursor-inner');
    var a = document.querySelectorAll('a');

    document.addEventListener('mousemove', function(e){
        var x = e.clientX;
        var y = e.clientY;
        cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
    });

    document.addEventListener('mousemove', function(e){
        var x = e.clientX;
        var y = e.clientY;
        cursorinner.style.left = x + 'px';
        cursorinner.style.top = y + 'px';
    });

    document.addEventListener('mousedown', function(){
        cursor.classList.add('click');
        cursorinner.classList.add('cursorinnerhover')
    });

    document.addEventListener('mouseup', function(){
        cursor.classList.remove('click')
        cursorinner.classList.remove('cursorinnerhover')
    });

    a.forEach(item => {
        item.addEventListener('mouseover', () => {
            cursor.classList.add('hover');
        });
        item.addEventListener('mouseleave', () => {
            cursor.classList.remove('hover');
        });
    })
    try {

        // function to set a given theme/color-scheme
        function setTheme(themeName) {
            localStorage.setItem('pinkbakery_theme', themeName);
            document.documentElement.className = themeName;
        }
        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('pinkbakery_theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }
        // Immediately invoked function to set the theme on initial load
        (function () {
            if (localStorage.getItem('pinkbakery_theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.querySelector('.slider-btn').checked = false;
            } else {
                setTheme('theme-light');
                document.querySelector('.slider-btn').checked = true;
            }
        })();

    } catch (err) {}

