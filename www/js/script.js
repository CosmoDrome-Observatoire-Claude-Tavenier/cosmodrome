// Function to toggle the navbar when the hamburger icon is clicked
function toggleNavbar() {
    let deployedNavbar = document.getElementsByClassName("navbar--deployed")[0];
    deployedNavbar.classList.toggle("navbar--deployed__inactive");
}

// Function to listen mouse over on dropdown menu to show the dropdown menu
function listenToDropdown() {
    let dropdowns = document.getElementsByClassName("navbar--dropdown--interaction");
    let dropdownsChildren = [];

    for (let i = 0; i < dropdowns.length; i++) {
        dropdownsChildren.push(dropdowns[i].children[1]);
    }
    
    for (let i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener("mouseover", function() {
            dropdownsChildren[i].classList.add("navbar--deployed--dropdown__active");
        });
    }

    for (let i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener("mouseout", function() {
            dropdownsChildren[i].classList.remove("navbar--deployed--dropdown__active");
        });
    }
}

// Function to set a background color to the navbar after scroll
function listenToScroll() {
    let navbar = document.getElementsByClassName("navbar")[0];
    let navbarHeight = navbar.offsetHeight;

    console.log("test")
    
    window.addEventListener("scroll", function() {
        if (window.pageYOffset > navbarHeight) {
            console.log("scrolled");
            navbar.classList.add("navbar__scrolled");
        } else {
            navbar.classList.remove("navbar__scrolled");
        }
    });
}

// Function to run all initial functions
function init() {
    listenToScroll();
    listenToDropdown();
}

// Run the init function when the DOM is loaded
document.addEventListener("DOMContentLoaded", init);