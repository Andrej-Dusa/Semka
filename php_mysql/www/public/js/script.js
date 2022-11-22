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
        alert("Image reference does not start with http.");
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