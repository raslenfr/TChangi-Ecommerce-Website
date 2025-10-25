<html>

<head>
<link rel="icon" type="image/PNG" href="../siteweb/electro-master/Capture.PNG" >
    <!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="../siteweb/electro-master/css/bootstrap.min.css"/>

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="../siteweb/electro-master/css/slick.css"/>
<link type="text/css" rel="stylesheet" href="../siteweb/electro-master/css/slick-theme.css"/>

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="../siteweb/electro-master/css/nouislider.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="../siteweb/electro-master/css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="../siteweb/electro-master/css/style.css"/>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}
body {
        display: flex;
        align-items: stretch;
        justify-content: flex-start;
        min-height: 100vh;
        position: relative;
        flex-direction: column;
        align-content: center;
}
.Btn_add {
    width: fit-content;
    margin-bottom:20px;
    background-color: #f60606;
    padding: 5px 20px;
    color: #fff;
    display: flex;
    align-items: center;
    text-align: 0;
    border-radius: 6px;
    text-decoration: 0;
}
.Btn_add img {
    margin-right: 5px;
    height: 20px;
}
/*tableau*/
table {
    border-collapse:collapse;
    color: #110101;
}
th {
    font-size: 16px;
    border-bottom: 3px solid #f2e8e8;
    padding: 5px 20px;
    font-weight: 500;
}
td {
    font-weight: 400;
    padding: 5px 30px;
    font-size: 14px;
    text-align: center;

}
img {
    height: 25px;
   
}
tr:nth-child(2n){
    background-color: #f6f8f8;
}
tr:nth-child(2n) td {
    border-bottom: 1px solid #e8dfdf;
    border-top:  1px solid #e0e0e0;
}
/*Form CSS*/
.form {
    background-color: #f6f8f8;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    border-radius: 6px;
}
.form form {
    display: flex;
    width: 350px;
    flex-direction: column;
}
.back_btn {
    color: #f73307;
    text-decoration: 0;
    display: flex;
    align-items: center;
}
.back_btn img {
    height: 16px;
    margin-right:5px ;
}
h2 {
    margin: 10px 0;
    font-weight: 500;
    text-transform: uppercase;
}
.erreur_message {
    color: red;
    font-size: 12px;
}
label {
    margin-top: 5px;
    text-transform: uppercase;
}
input{
    padding: 5px;
    border: 1px solid #999;
    outline: 0;
    margin-top: 2px;
}
input:focus{
    border: 1px solid #e5e4e1;
}
input[type="submit"]{
    margin-top: 25px;
    background-color: #ef070c;
    border: 1px solid #f1f5f3;
    cursor: pointer;
    color: #e2dada;
    text-transform: uppercase;
}
.tableliv {
    display: flex;
    flex-direction: column;
    align-content: center;
    align-items: center;
    padding-top: 30px;
}

</style>

</head>

<body>
<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +216-95-51-844</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Tchangi.Tunisie@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Sidi Daoud La Marsa </a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> Dinar</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="../siteweb/electro-master/img/slogan.png" alt="" style="height: 65;">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>500.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>600DT</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
        <nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li><a href="#">Meubles</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Vetements</a></li>
						<li><a href="#">Accessories</a></li>
						<li><a href="http://localhost/jasser/View/test.php">Livraison </a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
<?php
include '../Controller/livrC.php';
$livrC = new livrC();
$list="";
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $list = $livrC->showlivr($_GET['id']);
    //var_dump($list);
}
 if(isset($list) && empty($list)) {
    $list = $livrC->listlivr();
}
//var_dump($list);
?><html>

<head></head>

<body>
    
<div>
        <form action="" method="GET">
            <input type="text" name="id" id="id_livraison" placeholder="Enter ID">
            <input type="submit" value="Search">
        </form>
    </div>
		<center>
        <h1>List of livraisons</h1>
    </center>
	<center> <table border="1" align="center" width="70%">
        <tr>
            <th>Id livraisoon</th>
            <th> Id client </th>
			<th> Id livreur </th>
			<th> adresse </th>
			<th> date of livraison </th>
			<th> Id commande </th> <center>




        </tr>
        <?php
        
         foreach ($list as $livr) {
        ?>
            <tr>
                <td><?=$livr['id_livraison']; ?></td>
                <td><?=$livr['id_client']; ?></td>
				<td><?=$livr['id_livreur']; ?></td>
				<td><?=$livr['adresse']; ?></td>
				<td><?=$livr['dob']; ?></td>
				<td><?=$livr['id_commande']; ?></td>





            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>