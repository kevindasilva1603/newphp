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
    <section>
<div class="wrapo">
<div class="containerinfo">
    <h1 class="titi">Optical Safety</h1>
    <div class="so">
    <p class="infi">Du service client expert à un délicat chiffon de nettoyage pour lentilles, chaque étape de votre expérience est importante. Nos produits tiennent leurs promesses, tout comme nous.</p>
    <div class="containercircle">
        <li class="lio">
    <i class="fa-regular fa-circle-check" style="color: #261a21;"></i>
    <p class="infi">Échanges gratuits</p>
    </li>
    <li class="lio">
    <i class="fa-regular fa-circle-check" style="color: #261a21;"></i>
    
    <p class="infi">Garantie de remboursement de 30 jours
</p>
    </li>
    <li class="lio">
    <i class="fa-regular fa-circle-check" style="color: #261a21;"></i>
        <p class="infi">Garantie de remboursement de 30 jours
</p>
        </li>
        </div>
        <p class="po">Veuillez noter que "FSA" fait référence à un compte de dépenses flexible (Flexible Spending Account) et "HSA" fait référence à un compte d'épargne santé (Health Savings Account). Ces termes peuvent varier selon le pays et le système de soins de santé.</p>
</div>
</div>
<img class="imginfo" src="<?= TELECHARGEMENT . "/p1.png" ?>" alt="">
</div>
</section>
<div class="wrapi">
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
        </div>
</body>

<?php include VIEWS . 'inc/footer.php'; ?>
