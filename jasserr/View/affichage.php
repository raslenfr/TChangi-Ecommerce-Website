
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
						<li><a href="http://localhost/proj3/jasser/View/affichage.php">Livraison </a></li>
						<li><a href="http://localhost/proj3/jasserr/View/affichage.php">Facture </a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
<div class="container">
<center>
        <h1>List of factures</h1>
        </center>

       
		<center>
  	  <table >
        <tr id="items" align= "center">
            <th>Id Facture</th>
            <th>Id Livraison</th>
            <th>Co Client</th>
            <th>Co Livreur</th>
            </center>
        </tr>
        <?php
        include '../Controller/factureC.php';
        $factureC = new factureC();
        $list = $factureC->listfacture();
        foreach ($list as $facture) {
        ?>
            <tr>
                <td><?= $facture['id_facture']; ?></td>
                <td><?= $facture['id_livraison']; ?></td>
                <td><?= $facture['co_client']; ?></td>
                <td><?= $facture['co_livreur']; ?></td>
              
                
            </tr>
        <?php
        }
        ?>
    </table>
</div>
   
   
</body>

</html>