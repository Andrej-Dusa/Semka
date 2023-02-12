function validateInput() {
    let price = document.getElementById("priceIn").value;
    if (isNaN(price)) {
        alert("Price is not a number or it is lower then 0");
        return false
    }
    if(price < 0) {
        alert("Price can't be lower then 0");
        return false
    }

    let sale = document.getElementById("saleIn").value;
    if (isNaN(sale)) {
        alert("Sale is not a number or it is lower then 0");
        return false
    }
    if(sale < 0) {
        alert("Sale can't be lower then 0 or higher then 100");
        return false
    }

    let title = document.getElementById("titleIn").value;
    if (title == "") {
        alert("Title must be filled");
        return false
    }
    if (title > 100) {
        alert("Title cant be longer then 100 characters");
        return false
    }

    let description = document.getElementById("descriptionIn").value;
    if (description == "") {
        alert("Description must be filled");
        return false
    }

    let image = document.getElementById("imageIn").value;
    if (!(image.startsWith("https"))) {
        alert("Image reference does not start with https.");
        return false
    }
    if (image > 300) {
        alert("Image reference cant be longer then 300 characters");
        return false
    }
    if (image == "") {
        alert("Image reference must be filled");
        return false
    }
    return true;
}

function validateRegistration() {
    let name = document.getElementById("nameIn").value;
    if (name == "") {
        alert("Name reference must be filled");
        return false
    }
    if (name > 100) {
        alert("Name cant be longer then 100 characters");
        return false
    }

    let email = document.getElementById("emailIn").value;
    if (email == "") {
        alert("Email must be filled");
        return false
    }
    if (email > 100) {
        alert("Email cant be longer then 100 characters");
        return false
    }

    let surname = document.getElementById("surnameIn").value;
    if (surname == "") {
        alert("Surname must be filled");
        return false
    }

    if (surname > 100) {
        alert("Surname cant be longer then 100 characters");
        return false
    }

    let password1 = document.getElementById("password1In").value;
    if (password1 > 3) {
        alert("Password must be lobger then 3 characters");
        return false
    }

    let password2 = document.getElementById("password2In").value;
    if (password2 > 3) {
        alert("Password must be lobger then 3 characters");
        return false
    }
    if (password1 != password2) {
        alert("Passwords are not matching");
        return false
    }
    if (password1 > 100 || password2 > 100) {
        alert("Password cant be longer then 100 characters");
        return false
    }
    return true;
}

function validateReview() {
    let rating = document.getElementById("ratingIn").value;
    if (rating == "") {
        alert("Rating must be filled!");
        return false
    }

    return true;
}