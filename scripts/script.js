// Select the necessary elements
let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.nav-bar');
let searchForm = document.querySelector('.search-form');
let shoppingCart = document.querySelector('.shopping-cart');
let userForm = document.querySelector('.login-form');

// Toggle search form
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');  // Close navbar when search is active
    shoppingCart.classList.remove('active');
    userForm.classList.remove('active');
}

// Toggle shopping cart
document.querySelector('#cart-btn').onclick = () => {
    //shoppingCart.classList.toggle('active');
    navbar.classList.remove('active');  // Close navbar when cart is active
    searchForm.classList.remove('active');
    userForm.classList.remove('active');
};

// Toggle login form
document.querySelector('#user-btn').onclick = () => {
    userForm.classList.toggle('active');
    navbar.classList.remove('active');  // Close navbar when login is active
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
};

// Toggle navbar for mobile view
menuBtn.onclick = () => {
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    userForm.classList.remove('active');
};

// Close all active elements on scroll
window.onscroll = () => {
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    //shoppingCart.classList.remove('active');
    userForm.classList.remove('active');
};
