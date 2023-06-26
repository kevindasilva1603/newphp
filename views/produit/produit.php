<?php  
$title = "Produit";
include VIEWS.'inc/header.php';
$allProduct = Produit::showDb();

// Vérifions si l'id de la montre existe bien 
$id = $_GET['id'] ?? '';
$h1 = '';

switch ($id) {
    case '1':
        $h1 = 'Homme';
        break;
    case '2':
        $h1 = 'Montre de Sport';
        break;
    case '3':
        $h1 = 'Femme';
        break;
   
        header("Location:" . BASE_PATH . " ");
        exit;
}

?>

<body>
    
    <h1 class="title-h1"><?= $h1 ?></h1>
    
    <main><div class="nos-produits">
    <?php    
    foreach ($allProduct as $product) {
        if ($_GET['id'] == $product['categorie_id'] || $_GET['id'] == 'homme') {
    ?>
            <div class="produit">
                <li class="img-box"><a href="Produit_info?id=<?= $product["id_montre"] ?>&cat=<?= $product["categorie_id"] ?>"><img src="<?= TELECHARGEMENT . "produit/" . $product["photo"] ?>" alt="<?= $product["titre"] ?>"></a></li>
                <li><a class="h2t" href="Produit_info?id=<?= $product["id_montre"] ?>&cat=<?= $product["categorie_id"] ?>"><?= $product["titre"] ?></a></li>
                <li><p class="prix-promo"><?= $product["prix"] . " €" ?></p></li>
                <button class="bouton" onclick="window.location.href='panier?id=<?= $product['id_montre'] ?>&cat=<?= $product['categorie_id'] ?>&p=prd';">
                    <iconify-icon class="icon-cart" icon="iconoir:cart" width="24" height="24"></iconify-icon>
                </button>
            </div>
    <?php
        }
    }
    ?>
</div>


        
    </main>

<?php  include VIEWS.'inc/footer.php'; ?>
