document.onreadystatechange = () => {
    if (document.readyState == "interactive") {
        // Initialize your application or run some code.
        AOS.init();
    }
}