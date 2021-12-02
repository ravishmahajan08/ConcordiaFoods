<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="Description" content="Page #2, Aisles">
  <meta name="Author" content="Shiloh Rodrigues">
  <meta name="keywords" content="grocery, food, store">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <link rel="shortcut icon" href="../images/favicon.ico" />
  <title>Concordia Foods</title>
</head>

<body>

  <div class="container-xxl pt-2">

    <header id="mainHeader">
      <div id="logo">
        <a href="../index.html"><img class="img-fluid" src="../images/CFlogo.png" alt="Concordia Foods"></a>
      </div>
      <nav>
        <div class="dropdown">
          <button class="dropbtn">Account</button>
          <div class="dropdown-content">
            <a href="../FrontEndPages/login.html">Login</a>
            <a href="../FrontEndPages/p6.html">Sign Up</a>
          </div>
        </div>
        <a href="../FrontEndPages/Cart_P4.html">View Cart</a>
        <div class="dropdown">
          <button class="dropbtn active">Products</button>
          <div class="dropdown-content">
            <a href="Produce_Aisle.html">Fruits & Vegetables</a>
            <a href="MeatAisle.html">Meats</a>
            <a href="FrozenFoods_Aisle.html">Frozen Foods</a>
            <a href="Snacks_Aisle.html">Snacks</a>
            <a href="drinksAisle.html">Drinks</a>
          </div>
        </div>
        <a href="../index.html">Home</a>
      </nav>
    </header>

    <header id="aisleHeader">
      <h1>Aisle Name</h1>
    </header>

    <aside id="aisleSidebar">
      <h2>Aisles</h2>
      <nav>
        <ul>
          <li><a class="active" href="Produce_Aisle.html">Fruits & Vegetables</a></li>
          <li><a href="MeatAisle.html">Meats</a></li>
          <li><a href="FrozenFoods_Aisle.html">Frozen Foods</a></li>
          <li><a href="Snacks_Aisle.html">Snacks</a></li>
          <li><a href="drinksAisle.html">Drinks</a></li>
        </ul>
      </nav>
    </aside>

    <article id="aisleProducts">
      <h2>Our Products</h2>
      <div class="flex-productContainer">
        <div class="productContainer">
          <img class="img-fluid" src="../images/apples.jpg" alt="apple" />
          <h3>Apples</h3>
          <p class="price">$4.39/kg</p>
          <button type="button" onclick="window.location.href = '../ProductDescriptionPages/Apples.html'">View Details</button>
        </div>
        <div class="productContainer">
          <img class="img-fluid" src="../images/bananas.jpg" alt="banana" />
          <h3>Bananas</h3>
          <p class="price">$1.57/kg</p>
          <button type="button" onclick="window.location.href = '../ProductDescriptionPages/Bananas.html'">View Details</button>
        </div>
        <div class="productContainer">
          <img class="img-fluid" src="../images/carrots.jpg" alt="carrot" />
          <h3>Carrots</h3>
          <p class="price">$2.34/kg</p>
          <button type="button" onclick="window.location.href = '../ProductDescriptionPages/Carrots.html'">View Details</button>
        </div>
        <div class="productContainer">
          <img class="img-fluid" src="../images/cucumbers.jpg" alt="cucumber" />
          <h3>Cucumbers</h3>
          <p class="price">$1.99/kg</p>
          <button type="button" onclick="window.location.href = '../ProductDescriptionPages/Cucumbers.html'">View Details</button>
        </div>
        <div class="productContainer">
          <img class="img-fluid" src="../images/oranges.jpg" alt="oranges" />
          <h3>Oranges</h3>
          <p class="price">$3.77/kg</p>
          <button type="button" onclick="window.location.href = '../ProductDescriptionPages/Oranges.html'">View Details</button>
        </div>
        <div class="productContainer">
          <img class="img-fluid" src="../images/peaches.jpg" alt="peaches" />
          <h3>Peach</h3>
          <p class="price">$2.15/kg</p>
          <button type="button" onclick="window.location.href = '../ProductDescriptionPages/Peach.html'">View Details</button>
        </div>
      </div>
    </article>

    <footer id="mainFooter">
      <img id="logo" class="img-fluid" src="../images/CFlogo.png" alt="Concordia Foods logo">
      <div class="ftMain">
        <div class="ftList">
          <p>Aisles</p>
          <ul>
            <li><a href="Produce_Aisle.html">Fruits & Vegetables</a></li>
            <li><a href="MeatAisle.html">Meats</a></li>
            <li><a href="FrozenFoods_Aisle.html">Frozen Foods</a></li>
            <li><a href="Snacks_Aisle.html">Snacks</a></li>
            <li><a href="drinksAisle.html">Drinks</a></li>
          </ul>
        </div>
        <div class="ftList">
          <p>Login/Sign Up</p>
          <ul>
            <li><a href="../FrontEndPages/login.html">Login</a></li>
            <li><a href="../FrontEndPages/p6.html">Sign Up</a></li>
          </ul>
        </div>
        <div class="ftList">
          <p>Authors</p>
          <ul>
            <li>Shiloh Rodrigues</li>
            <li>Amrit Sohpal</li>
            <li>Adam Farahat</li>
            <li>Ravish Mahajan</li>
            <li>Brahim Hamid</li>
          </ul>
        </div>
        <div class="ftList">
          <p>Backend Functions</p>
          <ul>
            <li><a href="../BackEndPages/ProductList.html">Product List</a></li>
            <li><a href="../BackEndPages/p8.html">Edit a Product</a></li>
            <li><a href="../BackEndPages/UsersList.html">User List</a></li>
            <li><a href="../BackEndPages/User_Edit.html">Edit a User</a></li>
            <li><a href="../BackEndPages/p11.html">Order List</a></li>
            <li><a href="../BackEndPages/Order_Edit.html">Edit an Order</a></li>
          </ul>
        </div>
      </div>
    </footer>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>