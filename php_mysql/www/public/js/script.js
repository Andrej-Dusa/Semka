function validateInput() {
    let price = document.getElementById("priceIN").value;
    if (price.isNaN() && price < 0) {
        alert("Price is not a number or it is lower then 0");
        return false
    }

    let title = document.getElementById("titleIN").value;
    if (title == "") {
        alert("Title must be filled");
        return false
    }
    if (title > 100) {
        alert("Title cant be longer then 100 characters");
        return false
    }

    let description = document.getElementById("descriptionIN").value;
    if (description == "") {
        alert("Description must be filled");
        return false
    }

    let image = document.getElementById("imageIn").value;
    if (!(image.startsWith("http."))) {
        alert("Image reference does not start with http.");
        return false
    }
    if (image > 300) {
        alert("Image reference cant be longer then 300 characters");
        return false
    }
    return true;
}