<?php  
$title = "Synkro";
include VIEWS.'inc/header.php'; 
$allProduct=Produit::showDb();

$imagePaths = array(TELECHARGEMENT . "produit/" . $allProduct[0]["photo"],TELECHARGEMENT . "produit/" . $allProduct[1]["photo"],TELECHARGEMENT . "produit/" . $allProduct[2]["photo"]);

?>
<body>
    <main>
        <!-- le carousel  -->
        <section class="car">
        <div class="wrapper">
            
                <div class="carousel">
                    <section>
                        <div class="container">
                        <img class="img-block" src="<?= TELECHARGEMENT. "/carousel.png" ?>" alt="Produit 1" />
                            <article>
                                <h2>Daytona</h2>
                                <p class="sousprd">
                                Les lunettes anti-lumière bleue "Daytona" sont un accessoire élégant et moderne conçu pour protéger vos yeux des effets nocifs de la lumière bleue émise par les écrans électroniques tels que les ordinateurs, les smartphones et les tablettes.
                                </p>
                                <button class="boutonsa">Voir Plus</button>
                            </article>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                        <img class="img-block" src="<?= TELECHARGEMENT. "/carousel2.png" ?>" alt="Produit 1" />
                            <article>
                                <h2>Serenity</h2>
                                <p class="sousprd">
                                Les lunettes anti-lumière bleue "Serenity" sont conçues pour vous offrir une tranquillité d'esprit visuelle dans notre monde numérique. Leur design élégant et contemporain s'associe harmonieusement à leur technologie de pointe pour vous offrir une expérience visuelle supérieure.
                                </p>
                                <button class="boutonsa">Voir Plus</button>
                            </article>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                        <img class="img-block" src="<?= TELECHARGEMENT. "/carousel.png" ?>" alt="Produit 1" />
                            <article>
                                <h2>LuminoGuard</h2>
                                <p class="sousprd">
                                Les lunettes anti-lumière bleue "LuminoGuard" sont les gardiennes de vos yeux dans l'ère numérique. Leur allure moderne et leur construction robuste en font des compagnons fiables pour votre confort visuel.
                                </p>
                                <button class="boutonsa">Voir Plus</button>
                            </article>
                        </div>
                    </section>  
                </div>
                <div class="myboutons">
                <button
                    class="bi bi-chevron-left"
                    aria-label="Diapositive précedente"
                ></button
                ><button
                    class="bi bi-chevron-right"
                    aria-label="Diapositive suivante"
                ></button>
                </div>
        </div>

        </section>


</section>
</body>





      <div>
        <div class="ligne-container">
                <div class="ligne-gauche"></div>
                <h1>Mon titre</h1>
                <div class="ligne-droite"></div>
            </div>


        <section class="produit-populaire">
           
            <div class="nos-produits-populaire"> 
            <?php    
            $cpt=0;
            foreach ($allProduct as $tabprod) { 
            $cpt++;
        ?>
            <div class="produit">
                <li class="img-box"><a class="h2t" href="<?=BASE_PATH. "Produit_info?id=".$tabprod["id_montre"]?>"><img src="<?= TELECHARGEMENT. "produit/". $tabprod["photo"] ?>"  alt="<?= $tabprod["titre"] ?>"></a></li>
                <li><a class="h2t" href="<?=BASE_PATH. "Produit_info?id=".$tabprod["id_montre"]?>"> <?= $tabprod["titre"]?> </a> </li>
                
                <li ><p class="price" ><?= $tabprod["prix"]." €"?></p></li>

                <button class="bouton" onclick="window.location.href='<?=BASE_PATH.'panier?id='.$tabprod['id_montre']?>&cat=<?=$tabprod['categorie_id']?>&p=home';">
                    <iconify-icon class="icon-cart" icon="iconoir:cart" width="24" height="24"></iconify-icon>
                </button>
            </div>
           
<?php
if ($cpt == 3) {
    break;
}
}
?>
                    
            </div>
        </section>
        </div>


        <section class="produit-populaire">
           
            <div class="nos-produits-populaire"> 
            <?php    
            $cpt=0;
            foreach ($allProduct as $tabprod) { 
            $cpt++;
        ?>
            <div class="produit">
                <li class="img-box"><a class="h2t" href="<?=BASE_PATH. "Produit_info?id=".$tabprod["id_montre"]?>"><img src="<?= TELECHARGEMENT. "produit/". $tabprod["photo"] ?>"  alt="<?= $tabprod["titre"] ?>"></a></li>
                <li><a class="h2t" href="<?=BASE_PATH. "Produit_info?id=".$tabprod["id_montre"]?>"> <?= $tabprod["titre"]?> </a> </li>
                
                <li ><p class="price" ><?= $tabprod["prix"]." €"?></p></li>

                <button class="bouton" onclick="window.location.href='<?=BASE_PATH.'panier?id='.$tabprod['id_montre']?>&cat=<?=$tabprod['categorie_id']?>&p=home';">
                    <iconify-icon class="icon-cart" icon="iconoir:cart" width="24" height="24"></iconify-icon>
                </button>
            </div>
           
<?php
if ($cpt == 3) {
    break;
}
}
?>
                    
            </div>
        </section>




        <section class="produit-populaire">
            <div class="title">
                
                    <div class="fleche">
                    
                    </div>
                    
            </div>

            <div class="nos-produits-populaire"> 
        
              
        </section>
        <div class="ligne-container">
            <div class="ligne-gauche"></div>
            <h1>Mon titre</h1>
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

                    <button class="bouton">Cliquez ici</button>
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

                    <button class="bouton">Cliquez ici</button>
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






    </main>
</body>

<?php  

include VIEWS.'inc/footer.php'; 
if (isset($_SESSION['user'])) {
    app::showArray($_SESSION['user']);
}
?>
