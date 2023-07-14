
window.addEventListener('DOMContentLoaded', event => {
    const listHoursArray = document.body.querySelectorAll('.list-hours li');
    listHoursArray[new Date().getDay()].classList.add(('today'));
})

const wrapper = document.querySelector('.wrapper');
const signUpLink = document.querySelector('.signUp-link');
const signInLink = document.querySelector('.signIn-link');

signUpLink.addEventListener('click', () => {
    wrapper.classList.add('animate-signIn');
    wrapper.classList.remove('animate-signUp');
});

signInLink.addEventListener('click', () => {
    wrapper.classList.add('animate-signUp');
    wrapper.classList.remove('animate-signIn');
});

function login(event) {
    event.preventDefault();

    // Get the values from the form
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var loginType = document.getElementById("loginType").value;

    // Perform different actions based on the login type
    if (loginType === "admin") {
        // Logic for admin login
        if (username === "admin" && password === "admin123") {
            // Redirect to admin dashboard
            window.location.href = "admin/dashboard";
        } else {
            alert("Invalid admin credentials");
        }
    } else if (loginType === "user") {
        // Logic for user login
        if (username === "user" && password === "user123") {
            // Redirect to user dashboard
            window.location.href = "frontend/home";
        } else {
            alert("Invalid user credentials");
        }
    }
}
