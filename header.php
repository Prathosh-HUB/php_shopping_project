  
  
  
  <!-- header -->
   <header>
  <div class="header_body">
    <a href="index.php" class="logo">CoolshoP</a>
    <nav class="navbar">
      <a href="">Add products</a>
      <a href="">View products</a>
      <a href="">shopit</a>
    </nav>

   <!-- shoping card -->
    <a href="" class="cart"><i class="fa-solid fa-cart-shopping"></i><span><sup>4</sup></span></a>
    <!-- <div id="menu-btn" class="fas fa-bars"></div> -->

  </div>
 </header>

 <style>
    /* Header styling */
header {
    background-color: #007BFF;
    padding: 15px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: white;
    position: sticky;
    top: 0;
    z-index: 1000;
}

/* Header container */
.header_body {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Logo */
.logo {
    font-size: 24px;
    font-weight: bold;
    color: white;
    text-decoration: none;
    letter-spacing: 1px;
}

/* Navbar links */
.navbar {
    display: flex;
    gap: 20px;
}

.navbar a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    padding: 6px 10px;
    transition: background 0.3s, color 0.3s;
}

.navbar a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
}

/* Shopping cart icon */
.cart {
    color: white;
    font-size: 20px;
    position: relative;
    text-decoration: none;
}

.cart span {
    position: absolute;
    top: -8px;
    right: -10px;
    background: red;
    color: white;
    font-size: 12px;
    padding: 2px 6px;
    border-radius: 50%;
}

/* Responsive: Mobile navbar */
@media (max-width: 768px) {
    .header_body {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar {
        flex-direction: column;
        width: 100%;
        margin-top: 10px;
    }

    .navbar a {
        padding: 10px 0;
    }
}

 </style>