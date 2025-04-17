let cart = JSON.parse(localStorage.getItem("cart")) || [];
let container = document.getElementById("cart-container");
let total = 0;

cart.forEach(item => {
  const formattedPrice = item.price.toLocaleString('en-IN', {
    style: 'currency',
    currency: 'INR'
  });

  container.innerHTML += `<p>${item.name} - ${formattedPrice}</p>`;
  total += item.price;
});

const formattedTotal = total.toLocaleString('en-IN', {
  style: 'currency',
  currency: 'INR'
});

document.getElementById("total").innerText = `Total: ${formattedTotal}`;

// Clear cart function
function clearCart() {
  localStorage.removeItem("cart");
  document.getElementById("cart-container").innerHTML = "";
  document.getElementById("total").innerText = "Total: ₹0.00";
  alert("Cart cleared!");
}
document.getElementById('contactForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const message = document.getElementById('message').value.trim();

  if (name && email && message) {
    alert(`Thanks, ${name}! Your message has been sent.`);
    this.reset();
  } else {
    alert("Please fill in all fields.");
  }
});
