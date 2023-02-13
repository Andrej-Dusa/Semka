async function getCart() {
    const cartForm = document.getElementById('cart1');
    if (cartForm) {

        const response = await fetch('?c=cart&a=load');
        const shoes = await response.json();

        document.getElementById('cart1').innerHTML = '';
        let totalprice = 0;


        shoes.forEach(function(shoe) {
            const newBlock = document.createElement('div');
            newBlock.innerHTML =
                `<li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">${shoe.title}</h6>
                    </div>
                    <img class="img-cart img-responsive" src=${shoe.image_ref} alt="Image">
                    <span class="text-muted">${shoe.price}€</span>
                    <a href="?c=cart&a=delete&id=${shoe.id}" class="btn btn-danger">X</a>
                </li>`

            document.getElementById('cart1').appendChild(newBlock);
            totalprice += shoe.price;
        })
        parseFloat(totalprice).toFixed(2);
        const newBlokc = document.createElement('div');
        newBlokc.innerHTML =
        ` <li class="list-group-item d-flex justify-content-between">
                    <span>Total (EURO)</span>
                    <strong>${parseFloat(totalprice).toFixed(2)}€</strong>
                </li>`
        document.getElementById('cart1').appendChild(newBlokc);
    }
}

async function deleteCart() {
    const cartForm = document.getElementById('cart1');
    if (cartForm) {
        cartForm.addEventListener('submit', async function (event) {
            // prevent the default form submit behavior
            event.preventDefault();

            const response = await fetch('?c=cart&a=load');
            const shoes = await response.json();

            document.getElementById('cart1').innerHTML = '';
            let totalprice = 0;


            shoes.forEach(function(shoe) {
                const newBlock = document.createElement('div');
                newBlock.innerHTML =
                    `<li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">${shoe.title}</h6>
                    </div>
                    <img class="img-cart img-responsive" src=${shoe.image_ref} alt="Image">
                    <span class="text-muted">${shoe.price}€</span>
                    <a href="?c=cart&a=delete&id=${shoe.id}" class="btn btn-danger" id="cart-delete">X</a>
                </li>`

                document.getElementById('cart1').appendChild(newBlock);
                totalprice += shoe.price;
            })
            parseFloat(totalprice).toFixed(2);
            const newBlock = document.createElement('div');
            newBlock.innerHTML =
                ` <li class="list-group-item d-flex justify-content-between">
                    <span>Total (EURO)</span>
                    <strong>${parseFloat(totalprice).toFixed(2)}€</strong>
                </li>`
            document.getElementById('cart1').appendChild(newBlock);
        });
    }
}

window.onload = getCart();

