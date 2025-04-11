    let fnameInput = document.getElementById("fname");
    let fnameMessage = document.getElementById("fnameMessage");
    let fnameError = document.getElementById("fnameError");

    let lnameInput = document.getElementById("lname");
    let lnameMessage = document.getElementById("lnameMessage");
    let lnameError = document.getElementById("lnameError");

    let postcodeInput = document.getElementById("postcode");
    let postcodeMessage = document.getElementById("postcodeMessage");
    let postcodeError = document.getElementById("postcodeError");

    let emailInput = document.getElementById("email");
    let emailMessage = document.getElementById("emailMessage");
    let emailError = document.getElementById("emailError");

    let passwordInput = document.getElementById("password");
    let passwordMessage = document.getElementById("passwordMessage");
    let passwordError = document.getElementById("passwordError");


    fnameInput.addEventListener("focus", () => {
        fnameMessage.style.display = "block"; 
        fnameError.style.display = "none"; 
    });

    lnameInput.addEventListener("focus", () => {
        lnameMessage.style.display = "block"; 
        lnameError.style.display = "none"; 
    });

    postcodeInput.addEventListener("focus", () => {
        postcodeMessage.style.display = "block"; 
        postcodeError.style.display = "none"; 
    });

    emailInput.addEventListener("focus", () => {
        emailMessage.style.display = "block"; 
        emailError.style.display = "none"; 
    });

    passwordInput.addEventListener("focus", () => {
        passwordMessage.style.display = "block"; 
        passwordError.style.display = "none"; 
    });



    fnameInput.addEventListener("blur", () => {
        let fname = fnameInput.value.trim();
        fnameMessage.style.display = "none"; 

        if (fname === "") {
            fnameError.textContent = "The field cannot be empty";
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
            lnameError.textContent = "The field cannot be empty";
            lnameError.style.display = "block";
        } else if (!validateLname(lname)) {
            lnameError.textContent = "Please enter a valid last name";
            lnameError.style.display = "block";
        } else {
            lnameError.style.display = "none"; 
        }
    });

    postcodeInput.addEventListener("blur", () => {
        let postcode = postcodeInput.value.trim();
        postcodeMessage.style.display = "none"; 

        if (postcode === "") {
            postcodeError.textContent = "The field cannot be empty";
            postcodeError.style.display = "block";
        } else if (!validatePostcode(postcode)) {
            postcodeError.textContent = "Must contain letters, numbers and be 4 or more characters in length";
            postcodeError.style.display = "block";
        } else {
            postcodeError.style.display = "none"; 
        }
    });

    emailInput.addEventListener("blur", () => {
        let email = emailInput.value.trim();
        emailMessage.style.display = "none"; 

        if (email === "") {
            emailError.textContent = "The field cannot be empty";
            emailError.style.display = "block";
        } else if (!validateEmail(email)) {
            emailError.textContent = "Please enter a valid email address";
            emailError.style.display = "block";
        } else {
            emailError.style.display = "none"; 
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


document.getElementById("signup-form").addEventListener("submit", (e) => {
    e.preventDefault();
    let fname = fnameInput.value.trim();
    let lname = lnameInput.value.trim();
    let postcode = postcodeInput.value.trim();
    let email = emailInput.value.trim();
    let password = passwordInput.value.trim();
        
    
    let isValid = true;

    let fnamePattern = /^[a-zA-Z]{2,20}$/;
    let lnamePattern = /^[a-zA-Z]{2,20}$/;
    let postcodePattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
    
    let fnameMatch = fnamePattern.test(fname)
    let lnameMatch = lnamePattern.test(lname)
    let postcodeMatch = postcodePattern.test(postcode)
    let emailMatch = emailPattern.test(email);
    let passwordMatch = passwordPattern.test(password)
    
    console.log(fnameMatch)
    console.log(lnameMatch)
    console.log(postcodeMatch)
    console.log(emailMatch)
    console.log(passwordMatch)
   

  
    if (!fnameMatch) {
        fnameError.innerHTML = "Please enter a valid first name";
        fnameError.style.visibility = "visible";
        isValid = false;
    } else {
        fnameError.style.visibility = "hidden";
        /* <?php echo $isValid="<script> isValid </script>"
        ?> */
        
    }

    if (!lnameMatch) {
        lnameError.innerHTML = "Please enter a valid last name";
        lnameError.style.visibility = "visible";
        isValid = false;
    } else {
        lnameError.style.visibility = "hidden";
    }

    if (!postcodeMatch) {
        postcodeError.innerHTML = "Please enter a valid postcode";
        postcodeError.style.visibility = "visible";
        isValid = false;
    } else {
        postcodeError.style.visibility = "hidden";
    }

    if (!emailMatch) {
        emailError.innerHTML = "Please enter a valid email address";
        emailError.style.visibility = "visible";
        isValid = false;
    } else {
        emailError.style.visibility = "hidden";
    }

   
    if (!passwordMatch) {
        passwordError.innerHTML = "Please enter a valid password";
        passwordError.style.visibility = "visible";
        isValid = false;
    } else {
        passwordError.style.visibility = "hidden";
    }

   
    if (isValid) {
        alert("Form successfully submitted!");
        document.getElementById("signup-form").reset();
    }
    console.log("first name:", fname);
    console.log(fnameMatch);
    console.log(fnamePattern);
    console.log(isValid);

    console.log("last name:", lname);
    console.log(lnameMatch);
    console.log(lnamePattern);
    console.log(isValid);

    console.log("postcode:", postcode);
    console.log(postcodeMatch);
    console.log(postcodePattern);
    console.log(isValid);

    console.log("email:", email);
    console.log(emailMatch);
    console.log(emailPattern);
    console.log(isValid);

    console.log("password:", password);
    console.log(passwordMatch);
    console.log(passwordPattern);
    console.log(isValid);
});

function validateFname(fname) {
    let fnamePattern = /^[a-zA-Z]{2,20}$/;
    return fnamePattern.test(fname);
}

function validateLname(lname) {
    let lnamePattern = /^[a-zA-Z]{2,20}$/;
    return lnamePattern.test(lname);
}

function validatePostcode(postcode) {
    let postcodePattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
    return postcodePattern.test(postcode);
}

function validateEmail(email) {
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}

function validatePassword(password) {
    let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
    return passwordPattern.test(password);
}

let form=document.getElementById("signup-form");
form.removeEventListener("submit", handleSubmit);
form.addEventListener("submit", handleSubmit);

function handleSubmit(e){
    e.preventDefault();
    console.log("The form has been successfully submitted");
}





