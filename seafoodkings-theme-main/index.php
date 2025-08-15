<?php get_header(); ?>
  <img src="octo4.png" alt="Sea Food Kings Banner" class="logo-banner">

  <header>
    <div class="nav-links">
      <a href="index.html">Home</a>
      <a href="aboutus.html">About Us</a>
      <a href="cart.html">Cart</a>
      <a href="https://wa.me/919152299833" target="_blank">Contact Us</a>
    </div>

    <h2>Premium Seafood, Delivered Fresh</h2>
    <p>Choose your quantity & enjoy seafood royalty at your doorstep</p>
    <div class="cart-right">
      <a href="cart.html" class="cart-btn">🛒 View Cart <span id="cartCount2" class="cart-count">0</span></a>
    </div>
  </header>

  <div class="product-container" id="productList">
    <!-- Product cards will be inserted here -->
  </div>

  <script src="products.js"></script>
  <script>
    const productList = document.getElementById("productList");
    const cart = JSON.parse(localStorage.getItem("cart")) || [];

    function updateCartCount() {
      const count = cart.length;
      document.getElementById("cartCount2").textContent = count;
    }

    function addToCart(product, qty) {
      const item = {
        name: `${product.name} (${qty}kg)`,
        price: Math.round(product.basePrice * qty)
      };
      cart.push(item);
      localStorage.setItem("cart", JSON.stringify(cart));
      updateCartCount();
      alert("✅ Added to cart!");
    }

    updateCartCount();

    if (typeof products !== 'undefined' && Array.isArray(products)) {
      products.forEach(product => {
        const card = document.createElement("div");
        card.className = "product-card";
        card.innerHTML = `
          <img src="${product.image}" alt="${product.name}">
          <h3>${product.name}</h3>
          <p>₹${product.basePrice}/kg</p>
          <input type="number" step="0.25" min="1" class="qty-input" value="1">
          <button class="add-btn">Add to Cart</button>
        `;
        const qtyInput = card.querySelector(".qty-input");
        const addBtn = card.querySelector(".add-btn");
        addBtn.addEventListener("click", () => addToCart(product, parseFloat(qtyInput.value)));
        productList.appendChild(card);
      });
    } else {
      productList.innerHTML = "<p style='color: red;'>Product list not loaded.</p>";
    }
  </script>
<?php get_footer(); ?>
