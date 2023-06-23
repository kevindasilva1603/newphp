<?php
$title = "Produit";
include VIEWS . 'inc/header.php';
$Product_selected = Produit::Produit_info();
$i = '0';

// Fil d'Ariane
$breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);
echo '<ul class="breadcrumb">';
foreach ($breadcrumb as $title => $url) {
    if ($url == '#') {
        echo '<li class="active">' . $title . '</li>';
    } else {
        echo '<li><a href="' . $url . '">' . $title . '</a></li>';
    }
}
echo '</ul>';
?>

<body>
    <main>  
        <div class="section">
            
            
            
            <div class="photo">
                <img src="<?= TELECHARGEMENT . "produit/" . $Product_selected[$i]['photo'] ?>" class="img-fluid" alt="<?= $Product_selected[$i]["titre"] ?>"></div>
                <div class="infos">
                <h1 class="produititle"><?= $Product_selected[$i]['titre'] ?></h1>
                <hr class="hrpd"/>
            <p class="desc"> <?= $Product_selected[$i]["description"] ?></p>
            <hr class="hrpd"/>
            <p class="ptitle"><?= $Product_selected[$i]["autonomie"] ?></p><hr />
            <p class="prixI">Prix : <?= $Product_selected[$i]["prix"] . " €" ?></p>
            <div class="forbuttons">
                
            <button class="bouton" onclick="window.location.href='<?=BASE_PATH.'panier?id='.$Product_selected[$i]['id_montre']?>&cat=<?=$Product_selected[$i]['categorie_id']?>&p=prd_info';">
	 								<p class="ajouterpanier">Ajouter au panier</p>
									<iconify-icon class="icon-cart" icon="iconoir:cart" width="24" height="24"></iconify-icon>
								</button>
            </div>
        </div>

    </main>
</body>

<?php include VIEWS . 'inc/footer.php'; ?>
