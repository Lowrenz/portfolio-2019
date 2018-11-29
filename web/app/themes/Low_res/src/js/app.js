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
        // Scroll function for the nav
        const changeNav = async (navBar, aboutSectionTop, navBarHeight) => {
            if (aboutSectionTop <= navBarHeight + 100) {
                navBar.className = ('top-nav visible-soft');
            } else {
                navBar.className = ('top-nav hidden-soft');
            }
        }

        const gatherVariables = async () => {
            // Create an array
            let variables = [];

            // Set the variables
            let navBar = document.querySelector('nav.top-nav'),
                aboutSection = document.getElementById('about'),
                aboutSectionTop = aboutSection.getBoundingClientRect().top,
                navBarHeight = navBar.getBoundingClientRect().height;

            // Add them to the variables array
            variables.push(navBar);
            variables.push(aboutSectionTop);
            variables.push(navBarHeight);

            return variables;
        }

        const initFunction = async () => {
            await gatherVariables().then(
                async (res) => {
                    changeNav(res[0], res[1], res[2]);
                    addAnimateOnProgress();
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