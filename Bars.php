<?php
 session_start();
 if(empty($_SESSION['uname']))
 {
    // echo "hi again";
   header("Location: login.php");
 }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gelato </title>
        <link rel="stylesheet" type="text/css" href="style.css">
	<form>
		<header id="hr">
			<p id="img"> <img src="./img/Gelato.logo.png" alt="logo"> </p>
		    <h1 id="top">Gelato</h1>
			<h2 id="top1"> <a href="Login.php"><img src="./img/login.logo.png" alt="logo"></a></h2>
      <h3 id="top2"> <a href="shoppigcart.php"><img src="./img/shopping cart.png"alt="shoppingcart"></a></h3>
      <h2 id="top3"> <a href="logout.php" >logout</a></h2>
	        <h3 id="namei">
            <?php
              echo $_SESSION['uname'];
            ?>
            </h3>
	    </header>

         <body>   
             <nav id="navbar">
	      	    <ul class="navcontent">
			        <li><a href="pagehome.php">Home</a></li>
	     	        <li><a href="AboutUs.php">AboutUs</a></li>
			        <li><a href="Prices.php">Prices</a></li>
			        <li><a href="ContactUs.php">ContactUs</a></li>
              <li><a href="profile.php" ><?php echo $_SESSION['uname'];?></a><li>
		       </ul>
            </nav>
         </body>
    </form>
	<main id="main">
	  <form>
      <br> <br> <br>
	    	<div class="container">
            <div class="card">
              <div class="card__header">
                <img src="./img/avocado.jpg" alt="card__image">
              </div>
              <div class="card__body">
                <h4>avocado</h4>
              </div>
              <div class="card__footer">
                    <h3>Price: 2.5 LY.D <button> add cart </button></h3>
              </div>
            </div>
            <div class="card">
              <div class="card__header">
                <img src="./img/bars-chocolate.jpg" alt="card__image">
              </div>
              <div class="card__body">
                <h4>chocolate</h4>
              </div>
              <div class="card__footer">
                    <h3>Price: 2.5 LY.D <button> add cart </button></h3>
              </div>
            </div>
            <div class="card">
              <div class="card__header">
                <img src="./img/fistachio-bars.jpg" alt="card__image">
              </div>
              <div class="card__body">
                <h4>Pistachio</h4>
              </div>
              <div class="card__footer">
                    <h3>Price: 2.5 LY.D <button> add cart </button></h3>
              </div>
            </div>
            <div class="card">
                <div class="card__header">
                  <img src="./img/strawberries-bars.jpg" alt="card__image" >
                </div>
                <div class="card__body">
                  <h4>strawberries</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 2.5 LY.D <button> add cart </button></h3>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                  <img src="./img/vanilla_bars.jpg" alt="card__image" >
                </div>
                <div class="card__body">
                  <h4>vanilla</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 2.5 LY.D <button> add cart </button></h3>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                  <img src="./img/coffee_bars.jpg" alt="card__image">
                </div>
                <div class="card__body">
                  <h4>coffee</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 2.5 LY.D <button> add cart </button></h3>
                </div>
            </div>	
        </div>
	</form>
   </main>
   <footer>
    <div id="footer">
		  <h4>© 2022-2023 GELATO </h4>
	    </div>
   </footer>
</html>