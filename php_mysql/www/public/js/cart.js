async function getCart() {
    const cartForm = document.getElementById('cart1');
    if (cartForm) {

        const response = await fetch('?c=cart&a=load');
        const cart = await response.json();

        document.getElementById('cart1').innerHTML = '';
        let totalprice = 0;

        cart.forEach(function(x) {
            const newReview = document.createElement('div');
            newReview.innerHTML =
                `<li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">${x.title}</h6>
                    </div>
                    <img class="img-cart img-responsive" src=${x.image_ref} alt="Image">
                    <span class="text-muted">${x.price}€</span>
                </li>`

            document.getElementById('cart1').appendChild(newReview);
            totalprice += x.price;
        })
        parseFloat(totalprice).toFixed(2);
        const newReview = document.createElement('div');
        newReview.innerHTML =
        ` <li class="list-group-item d-flex justify-content-between">
                    <span>Total (EURO)</span>
                    <strong>${parseFloat(totalprice).toFixed(2)}€</strong>
                </li>`
        document.getElementById('cart1').appendChild(newReview);
    }
}

window.onload = getCart();

