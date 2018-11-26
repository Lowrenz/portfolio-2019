/*jshint esversion: 6 */
"use strict";

document.onreadystatechange = () => {
    if (document.readyState == "interactive") {
        // Scroll function for the nav
        const changeNav = async (navBar, aboutSectionTop, navBarHeight) => {
            if (aboutSectionTop <= navBarHeight + 300) {
                navBar.className = ('top-nav fixed visible');
            } else {
                navBar.className = ('top-nav fixed hidden');
            }
        }

        const addAnimateOnProgress = async () => {

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