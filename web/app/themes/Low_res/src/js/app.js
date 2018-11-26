document.onreadystatechange = () => {
    if (document.readyState == "interactive") {
        // Initialize your application or run some code.
        AOS.init();

        // Scroll function for the nav
        const changeNav = async (navBar, aboutSection, aboutSectionTop, navBarHeight)  => {
            console.log("changeNav");
            if(aboutSectionTop <= navBarHeight) {
                  navBar.className = ('top-nav hidden');
            } else if(aboutSectionTop >= navBarHeight) {
                 navBar.className =  ('top-nav sticky visible');
            }
        }

        const addAnimateOnProgress = async () => {
            console.log("addAnimateOnProgress");
        }

        const gatherVariables = async () => {
            console.log("gatherVariables");

            // Create an array
            let variables = [];

            // Set the variables
            let navBar = document.querySelector('nav.top-nav'),
                aboutSection = document.getElementById('about'),
                aboutSectionTop = aboutSection.getBoundingClientRect().top, 
                navBarHeight = navBar.getBoundingClientRect().height;
            
            // Add them to the variables array
            variables.push(navBar);
            variables.push(aboutSection);
            variables.push(aboutSectionTop);
            variables.push(navBarHeight);

            console.log(variables);

        }

        window.onscroll = async () => {
            let variables = gatherVariables();
            changeNav(variables[0], variables[1], variables[2], variables[3]);
            addAnimateOnProgress();
        }
    }
}