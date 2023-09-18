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

// Function to run all initial functions
function init() {
    listenToDropdown();
}

// Run the init function when the DOM is loaded
document.addEventListener("DOMContentLoaded", init);