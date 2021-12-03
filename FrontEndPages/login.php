<!DOCTYPE html>
<?php
session_start();
 ?>
<html>
	<head>
	<meta charset="utf-8"../>
	<meta name="Description" content="login"../>
	<meta name="Author" content="Adam Farahat"../>
	<meta name="keywords" content="grocery,store,login,Concordia,Foods"../>
	<meta name="viewport" content="width=device-width, initial-scale=1"../>
	<title>Concordia Foods</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"../>
	<link rel="stylesheet" type="text/css" href="../style.css"../>
	<link rel="icon" href="../images/favicon.ico?v1"../>
	</head>
	<body>
		<div class="container-xxl pt-2">
			<header id="mainHeader">
		    <div id="logo">
		      <a href="../index.html"><img class="img-fluid" src="../images/CFlogo.png" alt="Concordia Foods"></a>
		    </div>
		    <nav>
		      <div class="dropdown">
		        <<?php if(isset($_SESSION['StudentID'])){echo "<button class='dropbtn active'>".$_SESSION['StudentID']."</button>";}
                    else{echo "<button class='dropbtn active'>Account</button>";}?>
		        <div class="dropdown-content">
		          <?php
              if(isset($_SESSION['StudentID'])){echo'<a href="Logout.php">Logout</a>';}
              else{echo'<a href="../FrontEndPages/login.php">Login</a>';}
              ?>
		          <a href="../FrontEndPages/p6.html">Sign Up</a>
		        </div>
		      </div>
		      <a href="../FrontEndPages/Cart_P4.html">View Cart</a>
		      <div class="dropdown">
		        <button class="dropbtn">Products</button>
		        <div class="dropdown-content">
		          <a href="../AislePages/Produce_Aisle.html">Fruits & Vegetables</a>
		          <a href="../AislePages/MeatAisle.html">Meats</a>
		          <a href="../AislePages/FrozenFoods_Aisle.html">Frozen Foods</a>
		          <a href="../AislePages/Snacks_Aisle.html">Snacks</a>
		          <a href="../AislePages/drinksAisle.html">Drinks</a>
		        </div>
		      </div>
		      <a href="../index.html">Home</a>
		    </nav>
			</header>
			<header id="aisleHeader">
				<h1>Login</h1>
			</header>
		<article class="login">
			<br>
			<br>
			<img src="../images/CFlogoShort.png" alt="CFlogoShort.png"../>
			<br>
				<form action="Validate.php" method="post">
					<label><large>S</large>tudentID</label><br>
					<input type="text" name="StudentID" required>
					<br><br>
					<label><large>P</large>assword</label><br>
					<input type="password" name="Password" required><br><br>
					<button type="submit"class="button">Login</button><br><br>
				</form>
				<?php
					if(isset($_SESSION["error"])){
						$error=$_SESSION["error"];
						echo "<span id='error'>$error</span><br>";
					}
				 ?>
			<a href="#forgot-pw" class="forgot-pw"><large>F</large>orgot <large>P</large>assword</a>
		</article>
	<footer id="mainFooter">
    <img id="logo" class="img-fluid" src="../images/CFlogo.png" alt="Concordia Foods Logo"../>
    <div class="ftMain">
      <div class="ftList">
          <p>Aisles</p>
          <ul>
            <li><a href="../AislePages/Produce_Aisle.html">Fruits & Vegetables</a></li>
            <li><a href="../AislePages/MeatAisle.html">Meats</a></li>
            <li><a href="../AislePages/FrozenFoods_Aisle.html">Frozen Foods</a></li>
            <li><a href="../AislePages/Snack_Aisle.html">Snacks</a></li>
            <li><a href="../AislePages/drinksAisle.html">Drinks</a></li>
          </ul>
        </div>
      <div class="ftList">
        <p>Login/Sign Up
          <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="p6.html">Sign Up</a></li>
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
            <li><a href="../BackEndPages/UserList.html">User List</a></li>
            <li><a href="../BackEndPages/User_Edit.html">Edit a User</a></li>
            <li><a href="../BackEndPages/p11.html">Order List</a></li>
            <li><a href="../BackEndPages/Order_Edit.html">Edit an Order</a></li>
          </ul>
        </div>
    </div>
  </footer>
</body>
</html>
<?php
	unset($_SESSION["error"]);
 ?>
