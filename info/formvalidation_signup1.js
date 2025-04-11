let emailInput = document.getElementById("email");
let emailMessage = document.getElementById("emailMessage");
let emailError = document.getElementById("emailError");

let usernameInput = document.getElementById("username");
let usernameMessage = document.getElementById("usernameMessage");
let usernameError = document.getElementById("usernameError");

let passwordInput = document.getElementById("password");
let passwordMessage = document.getElementById("passwordMessage");
let passwordError = document.getElementById("passwordError");

let fnameInput = document.getElementById("fname");
let fnameMessage = document.getElementById("fnameMessage");
let fnameError = document.getElementById("fnameError");

let lnameInput = document.getElementById("lname");
let lnameMessage = document.getElementById("lnameMessage");
let lnameError = document.getElementById("lnameError");

emailInput.addEventListener("focus", () => {
    emailMessage.style.display = "block"; 
    emailError.style.display = "none"; 
});

usernameInput.addEventListener("focus", () => {
    usernameMessage.style.display = "block"; 
    usernameError.style.display = "none"; 
});

passwordInput.addEventListener("focus", () => {
    passwordMessage.style.display = "block"; 
    passwordError.style.display = "none"; 
});

fnameInput.addEventListener("focus", () => {
    fnameMessage.style.display = "block"; 
    fnameError.style.display = "none"; 
});

lnameInput.addEventListener("focus", () => {
    lnameMessage.style.display = "block"; 
    lnameError.style.display = "none"; 
});

emailInput.addEventListener("blur", () => {
    let email = emailInput.value.trim();
    emailMessage.style.display = "none"; 

    if (email === "") {
        emailError.textContent = "Enter your email";
        emailError.style.display = "block";
    } else if (!validateEmail(email)) {
        emailError.textContent = "Please enter a valid email address";
        emailError.style.display = "block";
    } else {
        emailError.style.display = "none"; 
    }
});

usernameInput.addEventListener("blur", () => {
    let username = usernameInput.value.trim();
    usernameMessage.style.display = "none"; 

    if (username === "") {
        usernameError.textContent = "The field cannot be empty";
        usernameError.style.display = "block";
    } else if (!validateUsername(username)) {
        usernameError.textContent = "Must contain letters, numbers and be 4 or more characters in length";
        usernameError.style.display = "block";
    } else {
        usernameError.style.display = "none"; 
    }
});

passwordInput.addEventListener("blur", () => {
    let password = passwordInput.value.trim();
    passwordMessage.style.display = "none"; 

    if (password === "") {
        passwordError.textContent = "The field cannot be empty";
        passwordError.style.display = "block";
    } else if (!validatePassword(password)) {
        passwordError.textContent = "Must contain at least 1 letter, 1 number and be 6 characters in length";
        passwordError.style.display = "block";
    } else {
        passwordError.style.display = "none"; 
    }
});

fnameInput.addEventListener("blur", () => {
    let fname = fnameInput.value.trim();
    fnameMessage.style.display = "none"; 

    if (fname === "") {
        fnameError.textContent = "Enter your first name";
        fnameError.style.display = "block";
    } else if (!validateFname(fname)) {
        fnameError.textContent = "Please enter a valid first name";
        fnameError.style.display = "block";
    } else {
        fnameError.style.display = "none"; 
    }
});

lnameInput.addEventListener("blur", () => {
    let lname = lnameInput.value.trim();
    lnameMessage.style.display = "none"; 

    if (lname === "") {
        lnameError.textContent = "Enter your last name";
        lnameError.style.display = "block";
    } else if (!validateLname(lname)) {
        lnameError.textContent = "Please enter a valid last name";
        lnameError.style.display = "block";
    } else {
        lnameError.style.display = "none"; 
    }
});

document.getElementById("submit").addEventListener("click", (e) => {
    e.preventDefault();
        let email = emailInput.value.trim();
        let username = usernameInput.value.trim();
        let password = passwordInput.value.trim();
        let fname = fnameInput.value.trim();
        let lname = lnameInput.value.trim();
    
    let isValid = true;

    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let usernamePattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
    let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
    let fnamePattern = /^[a-zA-Z]{2,20}$/;
    let lnamePattern = /^[a-zA-Z]{2,20}$/;

    let emailMatch = emailPattern.test(email);
    let usernameMatch = usernamePattern.test(username)
    let passwordMatch = passwordPattern.test(password)
    let fnameMatch = fnamePattern.test(fname)
    let lnameMatch = lnamePattern.test(lname)
    console.log(emailMatch)
    console.log(usernameMatch)
    console.log(passwordMatch)
    console.log(fnameMatch)
    console.log(lnameMatch)

  
    if (!emailMatch) {
        emailError.innerHTML = "Please enter a valid email address";
        emailError.style.visibility = "visible";
        isValid = false;
    } else {
        emailError.style.visibility = "hidden";
    }

    if (!usernameMatch) {
        usernameError.innerHTML = "Please enter a valid username1";
        usernameError.style.visibility = "visible";
        isValid = false;
    } else {
        usernameError.style.visibility = "hidden";
    }

    if (!passwordMatch) {
        passwordError.innerHTML = "Please enter a valid password1";
        passwordError.style.visibility = "visible";
        isValid = false;
    } else {
        passwordError.style.visibility = "hidden";
    }

    if (!fnameMatch) {
        fnameError.innerHTML = "Please enter a valid first name";
        fnameError.style.visibility = "visible";
        isValid = false;
    } else {
        fnameError.style.visibility = "hidden";
    }

    if (!lnameMatch) {
        lnameError.innerHTML = "Please enter a valid last name";
        lnameError.style.visibility = "visible";
        isValid = false;
    } else {
        lnameError.style.visibility = "hidden";
    }

    if (isValid) {
        alert("Form successfully submitted!");
    }
    console.log("email:", email);
    console.log(emailMatch);
    console.log(emailPattern);
    console.log(isValid);

    console.log("username:", username);
    console.log(usernameMatch);
    console.log(usernamePattern);
    console.log(isValid);

    console.log("password:", password);
    console.log(passwordMatch);
    console.log(passwordPattern);
    console.log(isValid);

    console.log("first name:", fname);
    console.log(fnameMatch);
    console.log(fnamePattern);
    console.log(isValid);

    console.log("last name:", lname);
    console.log(lnameMatch);
    console.log(lnamePattern);
    console.log(isValid);
});

function validateEmail(email) {
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}

function validateUsername(username) {
    let usernamePattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
    return usernamePattern.test(username);
}

function validatePassword(password) {
    let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
    return passwordPattern.test(password);
}

function validateFname(fname) {
    let fnamePattern = /^[a-zA-Z]{2,20}$/;
    return fnamePattern.test(fname);
}

function validateLname(lname) {
    let lnamePattern = /^[a-zA-Z]{2,20}$/;
    return lnamePattern.test(lname);
}


