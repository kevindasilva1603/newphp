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
        $h1 = 'Enfant';
        break;
    case '3':
        $h1 = 'Femme';
        break;
   
        header("Location:" . BASE_PATH . " ");
        exit;
}

?>

<body>
    
    <h1 class="title-h1"><?= $h1 ?> Catégorie</h1>
    
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


</main>

<div class="ligne-container">
            <div class="ligne-gauche"></div>
            <h1>Catégories</h1>
            <div class="ligne-droite"></div>
        </div>
        <section>

        <div class="categorie">
                <div class="produit">
                    <img
                        class="img-block"
                        src="<?= TELECHARGEMENT. "/image 13.png" ?>"
                        alt="Produit 3"
                    />

                    <button onclick="window.location.href='http://localhost:8888/Projet-ws/public/index.php/Produit?id=3'" class="bouton">Cliquez ici</button>
                </div>
                <div class="produit">
                    <img
                        class="img-block"
                         src="<?= TELECHARGEMENT. "/image 14.png" ?>"
                        alt="Produit 3"
                    />

                    <button class="bouton">Cliquez ici</button>
                </div>
                <div class="produit">
                    <img
                        class="img-block"
                        src="<?= TELECHARGEMENT. "/image12.png" ?>"
                        alt="Produit 3"
                    />

                    <button onclick="window.location.href='http://localhost:8888/Projet-ws/public/index.php/Produit?id=1'" class="bouton">Cliquez ici</button>
                </div>
            </div>
        </section>
        
        <div class="before-footer">
            <div class="produit">
                <img
                    class="img-blocko"
                    src="<?= TELECHARGEMENT. "/truck.png" ?>"
                    alt="Produit 3"
                />
                <h2>Livraison gratuite</h2>
                <a href="#" class="prixo">En savoir plus </a>
            </div>
            <div class="produit">


            <img class="blockos" src="<?= TELECHARGEMENT. "/glop.png" ?>"alt="Produit 3">



                <h2>Adaptez a tout style</h2>
                <a href="#" class="prixo">En savoir plus </a>
            </div>
        </div>





<?php  include VIEWS.'inc/footer.php'; ?>
