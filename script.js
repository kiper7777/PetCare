// document.getElementById('search-form').addEventListener('submit', function(event) {
//     event.preventDefault();
//     const city = document.getElementById('search-input').value;
//     alert(`Search for services in the city: ${city}`);
// });

// document.getElementById('contact-form').addEventListener('submit', function(event) {
//     event.preventDefault();
//     const name = document.getElementById('name').value;
//     const email = document.getElementById('email').value;
//     const message = document.getElementById('message').value;
//     alert(`Thank you, ${name}! Your message has been sent.`);
// });

document.getElementById("signupButton").addEventListener("click", function () {
    window.location.href = "signup.php";
});

document.getElementById("signinButton").addEventListener("click", function () {
    window.location.href = "signin.php";
});



document.addEventListener("DOMContentLoaded", function () {
    const serviceButtons = document.querySelectorAll(".service-btn");
    serviceButtons.forEach(button => {
        button.addEventListener("click", function () {
            serviceButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
        });
    });

    const sizeButtons = document.querySelectorAll(".size-btn");
    sizeButtons.forEach(button => {
        button.addEventListener("click", function () {
            sizeButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
        });
    });

    // document.querySelector(".search-btn").addEventListener("click", function () {
    //     alert("Searching for services...");
    // });

    // document.getElementById("searchButton").addEventListener("click", function () {
    //     window.location.href = "search.php";
    // });
});
