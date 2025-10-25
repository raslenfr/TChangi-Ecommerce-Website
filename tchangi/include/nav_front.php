<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="../template/index.php">Tchangi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"></a>
                </li>
            </ul>
        </div>  
        <?php
        $productCount = 0;
        if (isset($_SESSION['utilisateur'])) {
            $idUtilisateur = $_SESSION['utilisateur']['id'];
            $productCount = count($_SESSION['panier'][$idUtilisateur] ?? []);
        }
        function calculerRemise($prix, $discount)
        {
            return $prix - (($prix * $discount) / 100);
        }

        ?>
        <a class="btn float-end" href="../deconnexion.php"><i
                    class="fa-solid fa-screwdriver-wrench"></i> Deconnecter</a>
        <a class="btn float-end" href="../">
                 </a>
        <a class="btn float-end" href="panier.php"><i class="fa-solid fa-cart-shopping"></i> Panier
            (<?php echo $productCount; ?>)</a>
    </div>
</nav>


