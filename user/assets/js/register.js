/* Display error message */
function displayError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

/* Validate form */
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var mobile = document.contactForm.mobile.value;
    var country = document.contactForm.country.value;
    var gender = document.contactForm.gender.value;
    var hobbies = [];
    var checkboxes = document.getElementsByName("hobbies[]");
    for(var i=0; i < checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            // Populate hobbies array with selected values
            hobbies.push(checkboxes[i].value);
        }
    }
    
	// Defining error variables with a default value
    var nameErr = emailErr = mobileErr = countryErr = genderErr = true;
    
    // Validate name
    if(name == "") {
        displayError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            displayError("nameErr", "Please enter a valid name");
        } else {
            displayError("nameErr", "");
            nameErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        displayError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            displayError("emailErr", "Please enter a valid email address");
        } else{
            displayError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate mobile number
    if(mobile == "") {
        displayError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            displayError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            displayError("mobileErr", "");
            mobileErr = false;
        }
    }
    
    // Validate country
    if(country == "Select") {
        displayError("countryErr", "Please select your country");
    } else {
        displayError("countryErr", "");
        countryErr = false;
    }
    
    // Validate gender
    if(gender == "") {
        displayError("genderErr", "Please select your gender");
    } else {
        displayError("genderErr", "");
        genderErr = false;
    }
    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Country: " + country + "\n" +
                          "Gender: " + gender + "\n";
        if(hobbies.length) {
            dataPreview += "Hobbies: " + hobbies.join(", ");
        }
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};