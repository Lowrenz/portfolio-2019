/*jshint esversion: 6 */
"use strict";

document.onreadystatechange = () => {
    if (document.readyState == "interactive") {
        const isInViewport = (elem) => {
            if (typeof elem !== "undefined") {
                let bounding = elem.getBoundingClientRect();

                return (
                    bounding.top >= 0 &&
                    bounding.left >= 0 &&
                    bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
        };

        const addAnimateOnProgress = async () => {
            let charts = document.querySelectorAll("#skills figure.chart"),
                i = 0,
                numberOfCharts = charts.length;

            for (i; i <= numberOfCharts; i++) {
                if (isInViewport(charts[i])) {
                    if (typeof charts[i] != "undefined") {
                        charts[i].classList.add("animate");
                    }
                }
            }
        }

        const addPulsateOnNeon = async () => {
            let neon = document.querySelectorAll(".neon-circle img"),
                i = 0,
                numberOfNeons = neon.length;

            for (i; i <= numberOfNeons; i++) {
                if (isInViewport(neon[i])) {
                    if (typeof neon[i] != "undefined") {
                        neon[i].classList.add("pulsate");
                    }
                }
            }
        }

        // Scroll function for the nav
        const changeNav = async (navBar, aboutSectionTop, navBarHeight, headerBar) => {
            if (aboutSectionTop <= navBarHeight + 100) {
                navBar.className = ('top-nav visible-soft');
                headerBar.className = ('purple-bg');
            } else {
                navBar.className = ('top-nav hidden-soft');
                headerBar.className = ('');
            }
        }

        const gatherVariables = async () => {
            // Create an array
            let variables = [];

            // Set the variables
            let navBar = document.querySelector('nav.top-nav'),
                headerBar = document.querySelector('header'),
                aboutSection = document.getElementById('about'),
                aboutSectionTop = aboutSection.getBoundingClientRect().top,
                navBarHeight = navBar.getBoundingClientRect().height;

            // Add them to the variables array
            variables.push(navBar);
            variables.push(aboutSectionTop);
            variables.push(navBarHeight);
            variables.push(headerBar);

            return variables;
        }
        
        // TODO

        // const doElsCollide = async (el1, el2) => {
        //     el1.offsetBottom = el1.offsetTop + el1.offsetHeight;
        //     el1.offsetRight = el1.offsetLeft + el1.offsetWidth;
        //     el2.offsetBottom = el2.offsetTop + el2.offsetHeight;
        //     el2.offsetRight = el2.offsetLeft + el2.offsetWidth;
            
        //     return !((el1.offsetBottom < el2.offsetTop) ||
        //              (el1.offsetTop > el2.offsetBottom) ||
        //              (el1.offsetRight < el2.offsetLeft) ||
        //              (el1.offsetLeft > el2.offsetRight))
        // };
        
        const initFunction = async () => {
            await gatherVariables().then(
                async (res) => {
                    changeNav(res[0], res[1], res[2], res[3]);
                    addAnimateOnProgress();
                    addPulsateOnNeon();
                }
            );
        }

        // Scroll event listener
        window.onscroll = async () => {
            await initFunction();
        }

        // Initialize your application or run some code.
        AOS.init();
        initFunction();
    }
}