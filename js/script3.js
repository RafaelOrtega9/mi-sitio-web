const carticon = document.querySelector("#cart-icon"); 
const cart = document.querySelector(".cart");
const cartClose = document.querySelector("#cart-close");

carticon.addEventListener("click", () => cart.classList.add("active"));
cartClose.addEventListener("click", () => cart.classList.remove("active"));

const addCartButtons = document.querySelectorAll(".add-cart");
addCartButtons.forEach(button => {
    button.addEventListener("click", event => {
        const productBox = event.target.closest(".product-box");
        addToCart(productBox);
    });
});

const cartContent = document.querySelector(".cart-content");

const addToCart = productBox => {
    const productImgSrc = productBox.querySelector("img").src;
    const productTitle = productBox.querySelector(".product-title").textContent;
    const productPrice = productBox.querySelector(".price").textContent;

    const cartItems = cartContent.querySelectorAll(".cart-product-title");
    for (let item of cartItems) {
        if (item.textContent === productTitle) {
            alert("Este item ya está en el carrito");
            return;
        }
    }

    const cartBox = document.createElement("div");
    cartBox.classList.add("cart-box");
    cartBox.innerHTML = `
        <img src="${productImgSrc}" class="cart-img">
        <div class="cart-detail">
            <h2 class="cart-product-title">${productTitle}</h2>
            <span class="cart-price">${productPrice}</span>
            <div class="cart-quantity">
                <button id="decrement">-</button>
                <span class="number">1</span>
                <button id="increment">+</button>
            </div>
        </div>
        <i class="ri-delete-bin-line cart-remove"></i>
    `;
    cartContent.appendChild(cartBox);

    cartBox.querySelector(".cart-remove").addEventListener("click", () => {
        cartBox.remove();
        updateCartCount(-1);
        updateTotalPrice();
        saveCartState();
    });

    cartBox.querySelector(".cart-quantity").addEventListener("click", event => {
        const numberElement = cartBox.querySelector(".number");
        const decrementButton = cartBox.querySelector("#decrement");
        let quantity = parseInt(numberElement.textContent);
        if (event.target.id === "decrement" && quantity > 1) {
            quantity--;
            if (quantity === 1) {
                decrementButton.style.color = "#fff";
            }
        } else if (event.target.id === "increment") {
            quantity++;
            decrementButton.style.color = "#fff";
        }
        numberElement.textContent = quantity;
        updateTotalPrice();
        saveCartState();
    });

    updateCartCount(1);
    updateTotalPrice();
    saveCartState();
};

const updateTotalPrice = () => {
    const totalPriceElement = document.querySelector(".total-price");
    const cartBoxes = cartContent.querySelectorAll(".cart-box");
    let total = 0;
    cartBoxes.forEach(cartBox => {
        const priceElement = cartBox.querySelector(".cart-price");
        const quantityElement = cartBox.querySelector(".number");

        const price = parseFloat(priceElement.textContent.replace("$", ""));
        const quantity = parseInt(quantityElement.textContent);
        total += price * quantity;
    });
    totalPriceElement.textContent = `$${total}`;
};

let cartItemCount = 0;
const updateCartCount = change => {
    const cartItemCountBadge = document.querySelector(".cart-item-count");
    cartItemCount += change;
    if (cartItemCount > 0) {
        cartItemCountBadge.style.visibility = "visible";
        cartItemCountBadge.textContent = cartItemCount;
    } else {
        cartItemCountBadge.style.visibility = "hidden";
        cartItemCountBadge.textContent = "";
    }
};

const buyButton = document.querySelector(".btn-buy");
buyButton.addEventListener("click", () => {
    const cartBoxes = cartContent.querySelectorAll(".cart-box");
    if (cartBoxes.length === 0) {
        alert("Tu carrito está vacío. Por favor, agrega artículos para realizar la comprar");
        return;
    }
    cartBoxes.forEach(cartBox => cartBox.remove());
    cartItemCount = 0;
    updateCartCount(0);
    updateTotalPrice();
    saveCartState();
    alert("¡Gracias por su compra!");
});

function saveCartState() {
    localStorage.setItem("cartState", cartContent.innerHTML);
    localStorage.setItem("cartItemCount", cartItemCount);
}

function loadCartState() {
    const savedCart = localStorage.getItem("cartState");
    if (savedCart) {
        cartContent.innerHTML = savedCart;
        const savedCount = localStorage.getItem("cartItemCount");
        cartItemCount = savedCount ? parseInt(savedCount) : 0;
        updateCartCount(0);
        
        const cartBoxes = cartContent.querySelectorAll(".cart-box");
        cartBoxes.forEach(cartBox => {
            cartBox.querySelector(".cart-remove").addEventListener("click", () => {
                cartBox.remove();
                updateCartCount(-1);
                updateTotalPrice();
                saveCartState();
            });
            cartBox.querySelector(".cart-quantity").addEventListener("click", event => {
                const numberElement = cartBox.querySelector(".number");
                const decrementButton = cartBox.querySelector("#decrement");
                let quantity = parseInt(numberElement.textContent);
                if (event.target.id === "decrement" && quantity > 1) {
                    quantity--;
                    if (quantity === 1) {
                        decrementButton.style.color = "#fff";
                    }
                } else if (event.target.id === "increment") {
                    quantity++;
                    decrementButton.style.color = "#fff";
                }
                numberElement.textContent = quantity;
                updateTotalPrice();
                saveCartState();
            });
        });
        updateTotalPrice();
    }
}

window.addEventListener("load", loadCartState);