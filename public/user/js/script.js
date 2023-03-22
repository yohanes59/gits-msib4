// Start Burger Menu
let barsIcon = document.querySelector(".mobile .bars");
let xmarkIcon = document.querySelector(".mobile .xmark");
let mobNavList = document.querySelector(".mobile .mob-list ul");

// open burger-menu
barsIcon.addEventListener("click", showMobList);
function showMobList() {
  mobNavList.style.left = "0px";
  mobNavList.style.transition = ".3s";
  xmarkIcon.style.display = "flex";
  barsIcon.style.display = "none";
};

// close burger-menu
xmarkIcon.addEventListener("click", closeMobList);
function closeMobList() {
  mobNavList.style.left = "-200%";
  mobNavList.style.transition = ".8s";
  xmarkIcon.style.display = "none";
  barsIcon.style.display = "flex";
};
// End Burger Menu


// Start Shopping Cart
let cartIcon = document.querySelectorAll(".cart");
let shoppingCart = document.querySelector(".shopping-cart");
let xmark = document.querySelector(".shopping-cart .xmark");

cartIcon.forEach((e) => {
  e.addEventListener("click", showCart);
})
// Menampilkan Pop Up Keranjang Belanja
function showCart() {
  shoppingCart.style.opacity = `1`;
  shoppingCart.style.visibility = `visible`;
  shoppingCart.style.transition = `.3s`;
};
// Menutup Pop Up Keranjang Belanja
xmark.addEventListener("click", closeCart);
function closeCart() {
  shoppingCart.style.opacity = `0`;
  shoppingCart.style.visibility = `hidden`;
  shoppingCart.style.transition = `.5s`;
};
// End Shopping Cart


// Start Total Harga
// Menampilkan Total Harga
const quantities = document.getElementsByClassName('quantity');
const prices = document.getElementsByClassName('cart-price');
// Hitung total harga
let totalPrice = 0;
for (let i = 0; i < quantities.length; i++) {
  const quantity = parseInt(quantities[i].value);
  const price = parseInt(prices[i].textContent.replace(/\D/g, ''));
  totalPrice += quantity * price;
}
// Tampilkan total harga pada elemen total-cart-price
const totalCartPrice = document.querySelector('.total-cart-price');
totalCartPrice.textContent = totalPrice.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
// End Total Harga


// Start Banyak Jenis Item diKeranjang
// Mengambil elemen cart-boxes dan amount
const cartBoxes = document.querySelector('.cart-boxes');
const amount = document.querySelector('.amount');

// Mengambil jumlah total produk dalam keranjang
const totalProducts = cartBoxes.children.length;

// Menampilkan jumlah total produk dalam keranjang ke elemen amount
amount.innerHTML = totalProducts;
// Ends Banyak Jenis Item diKeranjang