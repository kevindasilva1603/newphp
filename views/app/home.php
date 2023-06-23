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
                                <h2>La terre</h2>
                                <p>
                                    Sa bonne taille crée une attraction
                                    suffisante qui empêche la vapeur d’eau et
                                    l’atmosphère de s’échapper dans l’espace et
                                    qui nous protège des rayonnements
                                    ultraviolets.La terre est un écosystème
                                    géant. La terre est un ensemble d'êtres
                                    vivants dans un environnement commun.Si un
                                    écosystème est un milieu naturel ou
                                    artificiel composé d'êtres vivants qui y
                                    habitent, alors la terre est un écosystème
                                    géant.
                                </p>
                            </article>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                        <img class="img-block" src="<?= TELECHARGEMENT. "/carousel2.png" ?>" alt="Produit 1" />
                            <article>
                                <h2>La Température</h2>
                                <p>
                                    Son juste éloignement du Soleil maintient et
                                    un effet de serre favorable qui permet de
                                    maintenir l’eau sous sa forme liquide avec
                                    ses pluies, ses rivières ses lacs et ses
                                    océans, et établit une température moyenne
                                    de 18° très favorable au développement de la
                                    vie.
                                </p>
                            </article>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                        <img class="img-block" src="<?= TELECHARGEMENT. "/carousel.png" ?>" alt="Produit 1" />
                            <article>
                                <h2>Renouvellement</h2>
                                <p>
                                    La Terre est aussi vivante sur le plan
                                    géologique. La chaleur résiduelle qu’elle
                                    renferme dans ses couches profondes permet
                                    l’existence du volcanisme, du mouvement des
                                    plaques tectoniques qui, en dépit des
                                    tremblements de terres destructeurs, permet
                                    à long terme le soulèvement de nouvelles
                                    chaînes de montagne, crée de nouveau océans
                                    et transforme lentement les contours des
                                    continents.
                                </p>
                            </article>
                        </div>
                    </section>
                </div>
                
                <button
                    class="bi bi-chevron-left"
                    aria-label="Diapositive précedente"
                ></button
                ><button
                    class="bi bi-chevron-right"
                    aria-label="Diapositive suivante"
                ></button>
          
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
                <li class="img-box"><a href="Produit_info?id=<?=$tabprod["id_montre"]?>"><img src="<?= TELECHARGEMENT. "produit/". $tabprod["photo"] ?>" alt="<?= $tabprod["titre"] ?>"></a></li>
                <li><a class="h2t"  href="Produit_info?id=<?=$tabprod["id_montre"]?>"> <?= $tabprod["titre"]?> </a> </li>
                <li class="price"><p class="prix-promo"><?= $tabprod["prix"]." €"?></p> </li>

                <button class="bouton" onclick="window.location.href='panier?id=<?=$tabprod['id_montre']?>&cat=<?=$tabprod['categorie_id']?>';">
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
            shuffle($allProduct);
            foreach ($allProduct as $tabprod) { 
            $cpt++;
        ?>
            <div class="produit">
                <li class="img-box"><a href="Produit_info?id=<?=$tabprod["id_montre"]?>"><img src="<?= TELECHARGEMENT. "produit/". $tabprod["photo"] ?>" alt="<?= $tabprod["titre"] ?>"></a></li>
                <li><a class="h2t" href="Produit_info?id=<?=$tabprod["id_montre"]?>"> <?= $tabprod["titre"]?> </a> </li>
                <li class="price"><p class="prix-promo"><?= $tabprod["prix"]." €"?></p> </li>

                <button class="bouton" onclick="window.location.href='panier?id=<?=$tabprod['id_montre']?>&cat=<?=$tabprod['categorie_id']?>';">
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
                    src="./img/tabler_truck-delivery.png"
                    alt="Produit 3"
                />
                <h2>Livraison gratuite</h2>
                <a href="#" class="prixo">En savoir plus </a>
            </div>
            <div class="produit">


            <img class="img-blocko" src="" alt="Produit 3">



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
