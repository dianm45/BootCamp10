const products = [
    {
        name: "Laptop ASUS VivoBook",
        price: 7500000,
        category: "Elektronik",
        image: "images/laptop.jpg",
        description: "Laptop untuk kebutuhan kerja dan belajar."
    },
    {
        name: "Mouse Wireless Logitech",
        price: 350000,
        category: "Elektronik",
        image: "images/mouse.jpg",
        description: "Mouse wireless praktis untuk aktivitas sehari-hari."
    },
    {
        name: "Keyboard Mechanical",
        price: 650000,
        category: "Elektronik",
        image: "images/keyboard.jpg",
        description: "Keyboard mechanical dengan desain nyaman."
    },
    {
        name: "Headphone Bluetooth",
        price: 450000,
        category: "Elektronik",
        image: "images/headphone.jpg",
        description: "Headphone bluetooth dengan suara jernih."
    },
    {
        name: "Smartwatch",
        price: 1200000,
        category: "Elektronik",
        image: "images/smartwatch.jpg",
        description: "Smartwatch dengan berbagai fitur pintar."
    },

    {
        name: "Kaos Basic Putih",
        price: 100000,
        category: "Fashion",
        image: "images/kaos.jpg",
        description: "Kaos basic dengan bahan nyaman."
    },
    {
        name: "Kemeja Casual",
        price: 250000,
        category: "Fashion",
        image: "images/kemeja.jpg",
        description: "Kemeja casual untuk aktivitas sehari-hari."
    },
    {
        name: "Hoodie Oversize",
        price: 300000,
        category: "Fashion",
        image: "images/hoodie.jpg",
        description: "Hoodie oversize dengan desain modern."
    },
    {
        name: "Celana Jeans",
        price: 350000,
        category: "Fashion",
        image: "images/jeans.jpg",
        description: "Celana jeans dengan bahan berkualitas."
    },
    {
        name: "Sneakers Casual",
        price: 550000,
        category: "Fashion",
        image: "images/sneakers.jpg",
        description: "Sneakers casual untuk penggunaan sehari-hari."
    },

    {
        name: "Tas Ransel",
        price: 400000,
        category: "Fashion",
        image: "images/tas.jpg",
        description: "Tas ransel untuk sekolah dan aktivitas kerja."
    },
    {
        name: "Topi Casual",
        price: 85000,
        category: "Fashion",
        image: "images/topi.jpg",
        description: "Topi casual dengan desain sederhana."
    },
    {
        name: "Jaket Denim",
        price: 450000,
        category: "Fashion",
        image: "images/jaket.jpg",
        description: "Jaket denim dengan desain klasik."
    },
    {
        name: "Dompet Pria",
        price: 150000,
        category: "Fashion",
        image: "images/dompet.jpg",
        description: "Dompet praktis dengan banyak ruang penyimpanan."
    },
    {
        name: "Sandal Casual",
        price: 120000,
        category: "Fashion",
        image: "images/sandal.jpg",
        description: "Sandal nyaman untuk penggunaan sehari-hari."
    },

    {
        name: "Novel Romance",
        price: 95000,
        category: "Buku",
        image: "images/novel.jpg",
        description: "Novel romance dengan cerita menarik."
    },
    {
        name: "Buku Pemrograman JavaScript",
        price: 180000,
        category: "Buku",
        image: "images/javascript.jpg",
        description: "Buku untuk mempelajari JavaScript dari dasar."
    },
    {
        name: "Buku HTML dan CSS",
        price: 150000,
        category: "Buku",
        image: "images/html-css.jpg",
        description: "Panduan membuat website menggunakan HTML dan CSS."
    },
    {
        name: "Buku UI UX Design",
        price: 175000,
        category: "Buku",
        image: "images/uiux.jpg",
        description: "Panduan dasar desain UI dan UX."
    },
    {
        name: "Buku Database",
        price: 160000,
        category: "Buku",
        image: "images/database.jpg",
        description: "Buku pembelajaran database untuk pemula."
    },

    {
        name: "Kopi Arabica",
        price: 85000,
        category: "Makanan",
        image: "images/kopi.jpg",
        description: "Kopi arabica dengan aroma dan rasa khas."
    },
    {
        name: "Teh Hijau",
        price: 45000,
        category: "Makanan",
        image: "images/teh.jpg",
        description: "Teh hijau dengan rasa ringan dan menyegarkan."
    },
    {
        name: "Cokelat Premium",
        price: 75000,
        category: "Makanan",
        image: "images/cokelat.jpg",
        description: "Cokelat premium dengan rasa manis dan lembut."
    },
    {
        name: "Keripik Kentang",
        price: 30000,
        category: "Makanan",
        image: "images/keripik.jpg",
        description: "Keripik kentang renyah dengan berbagai rasa."
    },
    {
        name: "Cookies Chocolate",
        price: 55000,
        category: "Makanan",
        image: "images/cookies.jpg",
        description: "Cookies cokelat renyah dan lezat."
    },

    {
        name: "Tumbler Stainless",
        price: 150000,
        category: "Rumah Tangga",
        image: "images/tumbler.jpg",
        description: "Tumbler stainless untuk menjaga suhu minuman."
    },
    {
        name: "Lampu Meja",
        price: 180000,
        category: "Rumah Tangga",
        image: "images/lampu.jpg",
        description: "Lampu meja minimalis untuk ruang kerja."
    },
    {
        name: "Bantal Sofa",
        price: 120000,
        category: "Rumah Tangga",
        image: "images/bantal.jpg",
        description: "Bantal sofa lembut dengan desain modern."
    },
    {
        name: "Rak Buku",
        price: 450000,
        category: "Rumah Tangga",
        image: "images/rak.jpg",
        description: "Rak buku minimalis untuk menyimpan koleksi buku."
    },
    {
        name: "Jam Dinding",
        price: 100000,
        category: "Rumah Tangga",
        image: "images/jam.jpg",
        description: "Jam dinding dengan desain minimalis."
    },

    {
        name: "Sepatu Running",
        price: 650000,
        category: "Olahraga",
        image: "images/sepatu-running.jpg",
        description: "Sepatu ringan untuk aktivitas olahraga."
    },
    {
        name: "Matras Yoga",
        price: 200000,
        category: "Olahraga",
        image: "images/matras.jpg",
        description: "Matras yoga nyaman untuk latihan."
    },
    {
        name: "Botol Olahraga",
        price: 90000,
        category: "Olahraga",
        image: "images/botol.jpg",
        description: "Botol minum praktis untuk olahraga."
    },
    {
        name: "Dumbbell 5KG",
        price: 250000,
        category: "Olahraga",
        image: "images/dumbbell.jpg",
        description: "Dumbbell untuk latihan kekuatan di rumah."
    },
    {
        name: "Bola Futsal",
        price: 180000,
        category: "Olahraga",
        image: "images/futsal.jpg",
        description: "Bola futsal untuk latihan dan pertandingan."
    },

    {
        name: "Lip Balm",
        price: 45000,
        category: "Kecantikan",
        image: "images/lip-balm.jpg",
        description: "Lip balm untuk menjaga kelembapan bibir."
    },
    {
        name: "Face Wash",
        price: 85000,
        category: "Kecantikan",
        image: "images/face-wash.jpg",
        description: "Pembersih wajah untuk penggunaan sehari-hari."
    },
    {
        name: "Moisturizer",
        price: 120000,
        category: "Kecantikan",
        image: "images/moisturizer.jpg",
        description: "Moisturizer untuk menjaga kelembapan kulit."
    },
    {
        name: "Sunscreen",
        price: 110000,
        category: "Kecantikan",
        image: "images/sunscreen.jpg",
        description: "Sunscreen untuk melindungi kulit dari sinar matahari."
    },
    {
        name: "Parfum",
        price: 250000,
        category: "Kecantikan",
        image: "images/parfum.jpg",
        description: "Parfum dengan aroma segar dan tahan lama."
    },

    {
        name: "Kamera Digital",
        price: 4500000,
        category: "Elektronik",
        image: "images/kamera.jpg",
        description: "Kamera digital untuk kebutuhan fotografi."
    },
    {
        name: "Power Bank",
        price: 300000,
        category: "Elektronik",
        image: "images/powerbank.jpg",
        description: "Power bank dengan kapasitas besar."
    },
    {
        name: "Speaker Bluetooth",
        price: 400000,
        category: "Elektronik",
        image: "images/speaker.jpg",
        description: "Speaker bluetooth dengan suara berkualitas."
    },
    {
        name: "Tablet Android",
        price: 2500000,
        category: "Elektronik",
        image: "images/tablet.jpg",
        description: "Tablet Android untuk hiburan dan produktivitas."
    },
    {
        name: "Webcam",
        price: 350000,
        category: "Elektronik",
        image: "images/webcam.jpg",
        description: "Webcam untuk meeting dan video conference."
    },

    {
        name: "Planner Harian",
        price: 60000,
        category: "Alat Tulis",
        image: "images/planner.jpg",
        description: "Planner untuk membantu mengatur aktivitas."
    },
    {
        name: "Notebook",
        price: 45000,
        category: "Alat Tulis",
        image: "images/notebook.jpg",
        description: "Notebook untuk mencatat berbagai kebutuhan."
    },
    {
        name: "Pulpen Gel",
        price: 15000,
        category: "Alat Tulis",
        image: "images/pulpen.jpg",
        description: "Pulpen gel dengan tinta yang nyaman digunakan."
    },
    {
        name: "Pensil Warna",
        price: 75000,
        category: "Alat Tulis",
        image: "images/pensil-warna.jpg",
        description: "Pensil warna untuk menggambar dan mewarnai."
    },
    {
        name: "Stabilo Set",
        price: 55000,
        category: "Alat Tulis",
        image: "images/stabilo.jpg",
        description: "Set stabilo dengan berbagai warna."
    }
];

console.log("Jumlah produk:", products.length);


/* =========================
   ELEMENT
========================= */

const productList = document.getElementById("productList");
const productCount = document.getElementById("productCount");
const categoryFilter = document.getElementById("categoryFilter");
const sortFilter = document.getElementById("sortFilter");
const sortFilterTop = document.getElementById("sortFilterTop");
const searchInput = document.getElementById("searchInput");
const navbarSearch = document.getElementById("navbarSearch");

const priceRange = document.getElementById("priceRange");
const priceValue = document.getElementById("priceValue");

const emptyMessage = document.getElementById("emptyMessage");
const resetFilter = document.getElementById("resetFilter");


/* =========================
   CART
========================= */

let cart = [];


/* =========================
   FORMAT PRICE
========================= */

function formatPrice(price) {
    return `Rp ${price.toLocaleString("id-ID")}`;
}


/* =========================
   DISPLAY PRODUCTS
========================= */

function displayProducts(data) {

    productList.innerHTML = "";

    productCount.textContent = data.length;

    if (data.length === 0) {

        emptyMessage.classList.remove("d-none");

        return;

    } else {

        emptyMessage.classList.add("d-none");

    }


    data.forEach((product, index) => {

        const productCard = `
            <div class="col">

                <div class="card h-100">

                    <div class="position-relative">

                        <img
                            src="${product.image}"
                            class="card-img-top"
                            alt="${product.name}"
                        >

                        ${
                            index < 3
                            ?
                            `<span
                                class="position-absolute top-0 start-0 m-2 badge bg-danger"
                            >
                                Terlaris
                            </span>`
                            :
                            ""
                        }

                    </div>


                    <div class="card-body d-flex flex-column">

                        <div class="mb-2">

                            <span class="badge">
                                ${product.category}
                            </span>

                        </div>


                        <h5 class="card-title">
                            ${product.name}
                        </h5>


                        <p class="card-text">
                            ${product.description}
                        </p>


                        <div class="product-rating">

                            <span>
                                ★
                            </span>

                            4.${(index % 6) + 3}

                            <small>
                                (${50 + index * 7})
                            </small>

                        </div>


                        <div class="mt-auto">

                            <p class="fw-bold mb-2">
                                ${formatPrice(product.price)}
                            </p>


                            <button
                                class="btn btn-primary w-100 add-cart-btn"
                                onclick="addToCart(${products.indexOf(product)})"
                            >

                                <i class="bi bi-cart-plus"></i>

                                Keranjang

                            </button>

                        </div>

                    </div>

                </div>

            </div>
        `;

        productList.innerHTML += productCard;

    });

}


/* =========================
   CATEGORY
========================= */

const categories = [
    ...new Set(
        products.map(product => product.category)
    )
];

categories.forEach(category => {

    const option = document.createElement("option");

    option.value = category;
    option.textContent = category;

    categoryFilter.appendChild(option);

});


/* =========================
   FILTER PRODUCTS
========================= */

function filterProducts() {

    const keyword = searchInput.value
        .toLowerCase()
        .trim();

    const selectedCategory = categoryFilter.value;

    const maxPrice = Number(priceRange.value);

    let filteredProducts = products.filter(product => {

        const matchesSearch =
            product.name
                .toLowerCase()
                .includes(keyword) ||

            product.description
                .toLowerCase()
                .includes(keyword);


        const matchesCategory =
            selectedCategory === "all" ||
            product.category === selectedCategory;


        const matchesPrice =
            product.price <= maxPrice;


        return (
            matchesSearch &&
            matchesCategory &&
            matchesPrice
        );

    });


    applySorting(filteredProducts);

}


/* =========================
   SORTING
========================= */

function applySorting(data) {

    const sortValue = sortFilter.value;

    if (sortValue === "name-asc") {

        data.sort((a, b) =>
            a.name.localeCompare(b.name)
        );

    }

    if (sortValue === "name-desc") {

        data.sort((a, b) =>
            b.name.localeCompare(a.name)
        );

    }

    if (sortValue === "price-low") {

        data.sort((a, b) =>
            a.price - b.price
        );

    }

    if (sortValue === "price-high") {

        data.sort((a, b) =>
            b.price - a.price
        );

    }


    displayProducts(data);

}


/* =========================
   SEARCH
========================= */

searchInput.addEventListener(
    "input",
    filterProducts
);


/* =========================
   NAVBAR SEARCH
========================= */

navbarSearch.addEventListener(
    "input",
    () => {

        searchInput.value =
            navbarSearch.value;

        filterProducts();

    }
);


/* =========================
   CATEGORY FILTER
========================= */

categoryFilter.addEventListener(
    "change",
    filterProducts
);


/* =========================
   SORT FILTER
========================= */

sortFilter.addEventListener(
    "change",
    filterProducts
);


/* =========================
   TOP SORT
========================= */

sortFilterTop.addEventListener(
    "change",
    () => {

        sortFilter.value =
            sortFilterTop.value;

        filterProducts();

    }
);


/* =========================
   PRICE FILTER
========================= */

priceRange.addEventListener(
    "input",
    () => {

        priceValue.textContent =
            formatPrice(
                Number(priceRange.value)
            );

        filterProducts();

    }
);


/* =========================
   RESET FILTER
========================= */

resetFilter.addEventListener(
    "click",
    () => {

        searchInput.value = "";

        navbarSearch.value = "";

        categoryFilter.value = "all";

        sortFilter.value = "default";

        sortFilterTop.value = "default";

        priceRange.value = 10000000;

        priceValue.textContent =
            "Rp 10.000.000";

        displayProducts(products);

    }
);


/* =========================
   ADD TO CART
========================= */

function addToCart(productIndex) {

    const product = products[productIndex];

    const existingProduct =
        cart.find(
            item => item.productIndex === productIndex
        );


    if (existingProduct) {

        existingProduct.quantity++;

    } else {

        cart.push({

            productIndex: productIndex,

            quantity: 1

        });

    }


    updateCart();

    openCart();

}


/* =========================
   UPDATE CART
========================= */

function updateCart() {

    const cartItems =
        document.getElementById("cartItems");

    const cartCount =
        document.getElementById("cartCount");

    const cartHeaderCount =
        document.getElementById("cartHeaderCount");

    const cartSubtotal =
        document.getElementById("cartSubtotal");

    const cartTotal =
        document.getElementById("cartTotal");


    const totalQuantity =
        cart.reduce(
            (total, item) =>
                total + item.quantity,
            0
        );


    const subtotal =
        cart.reduce(
            (total, item) => {

                const product =
                    products[item.productIndex];

                return total +
                    product.price *
                    item.quantity;

            },
            0
        );


    cartCount.textContent =
        totalQuantity;

    cartHeaderCount.textContent =
        totalQuantity;


    cartSubtotal.textContent =
        formatPrice(subtotal);


    const shipping =
        subtotal > 0 ? 15000 : 0;


    cartTotal.textContent =
        formatPrice(
            subtotal + shipping
        );


    if (cart.length === 0) {

        cartItems.innerHTML = `

            <div class="cart-empty">

                <i class="bi bi-cart-x"></i>

                <h5>
                    Keranjang masih kosong
                </h5>

                <p>
                    Yuk pilih produk favoritmu.
                </p>

            </div>

        `;

        return;

    }


    cartItems.innerHTML = "";


    cart.forEach(item => {

        const product =
            products[item.productIndex];


        cartItems.innerHTML += `

            <div class="cart-item">

                <img
                    src="${product.image}"
                    alt="${product.name}"
                >


                <div class="cart-item-info">

                    <h6>
                        ${product.name}
                    </h6>

                    <strong>
                        ${formatPrice(product.price)}
                    </strong>


                    <div class="quantity-control">

                        <button
                            onclick="changeQuantity(
                                ${item.productIndex},
                                -1
                            )"
                        >
                            −
                        </button>

                        <span>
                            ${item.quantity}
                        </span>

                        <button
                            onclick="changeQuantity(
                                ${item.productIndex},
                                1
                            )"
                        >
                            +
                        </button>

                    </div>

                </div>


                <button
                    class="remove-cart"
                    onclick="removeFromCart(
                        ${item.productIndex}
                    )"
                >

                    <i class="bi bi-trash"></i>

                </button>

            </div>

        `;

    });

}


/* =========================
   CHANGE QUANTITY
========================= */

function changeQuantity(
    productIndex,
    change
) {

    const item =
        cart.find(
            item =>
                item.productIndex === productIndex
        );


    if (!item) return;


    item.quantity += change;


    if (item.quantity <= 0) {

        cart =
            cart.filter(
                item =>
                    item.productIndex !== productIndex
            );

    }


    updateCart();

}


/* =========================
   REMOVE CART
========================= */

function removeFromCart(productIndex) {

    cart =
        cart.filter(
            item =>
                item.productIndex !== productIndex
        );

    updateCart();

}


/* =========================
   OPEN CART
========================= */

const cartButton =
    document.getElementById("cartButton");

const cartSidebar =
    document.getElementById("cartSidebar");

const cartOverlay =
    document.getElementById("cartOverlay");

const closeCart =
    document.getElementById("closeCart");


function openCart() {

    cartSidebar.classList.add("show");

    cartOverlay.classList.add("show");

}


function closeCartSidebar() {

    cartSidebar.classList.remove("show");

    cartOverlay.classList.remove("show");

}


cartButton.addEventListener(
    "click",
    openCart
);


closeCart.addEventListener(
    "click",
    closeCartSidebar
);


cartOverlay.addEventListener(
    "click",
    closeCartSidebar
);


/* =========================
   INITIAL DISPLAY
========================= */

displayProducts(products);