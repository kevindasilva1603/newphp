<?php  
$title = "Optical Safety";
include VIEWS.'inc/header.php'; 
?>

<style>

p{
    font-size:25px;
}
</style>
<body>
    
<h1> <?=$connected=='false' ? "Bienvenu".$_SESSION['user']['pseudo']." !" : "";?>  </h1>
    <main>

   
    

    </main>
</body>

<div class="container">
            <img
                class="back"
                src="./img/4cd3fc83ab7fd03cc6ce21a9a9032482.jpeg"
                alt=""
            />
            <h1 class="title">Dalston</h1>
            <p class="sub">
                Lunettes d'ordinateur de haute qualité et élégantes pour
                protéger vos yeux.
            </p>
            <button class="mon-bouton">Voir Plus</button>
        </div>
        <section>
            <div class="ligne-container">
                <div class="ligne-gauche"></div>
                <h1>Mon titre</h1>
                <div class="ligne-droite"></div>
            </div>
            <div class="all-contain">
                <div class="all-products">
                    <div class="produit">
                        <img
                            class="img-block"
                            src="./img/image 6.png"
                            alt="Produit 1"
                        />
                        <h2>Titre du Produit 1</h2>
                        <div class="rond"></div>
                        <p class="prix">Prix du Produit 1</p>
                        <button class="bouton">Cliquez ici</button>
                    </div>

                    <div class="produit">
                        <img
                            class="img-block"
                            src="./img/image 6.png"
                            alt="Produit 2"
                        />
                        <h2>Titre du Produit 2</h2>
                        <div class="rond"></div>
                        <p class="prix">Prix du Produit 2</p>
                        <button class="bouton">Cliquez ici</button>
                    </div>

                    <div class="produit">
                        <img
                            class="img-block"
                            src="./img/image 6.png"
                            alt="Produit 3"
                        />
                        <h2>Titre du Produit 3</h2>
                        <div class="rond"></div>
                        <p class="prix">Prix du Produit 3</p>
                        <button class="bouton">Cliquez ici</button>
                    </div>
                </div>

                <div class="all-products">
                    <div class="produit">
                        <img
                            class="img-block"
                            src="./img/image 6.png"
                            alt="Produit 1"
                        />
                        <h2>Titre du Produit 1</h2>
                        <div class="rond"></div>
                        <p class="prix">Prix du Produit 1</p>
                        <button class="bouton">Cliquez ici</button>
                    </div>

                    <div class="produit">
                        <img
                            class="img-block"
                            src="./img/image 6.png"
                            alt="Produit 2"
                        />
                        <h2>Titre du Produit 2</h2>
                        <div class="rond"></div>
                        <p class="prix">Prix du Produit 2</p>
                        <button class="bouton">Cliquez ici</button>
                    </div>

                    <div class="produit">
                        <img
                            class="img-block"
                            src="./img/image 6.png"
                            alt="Produit 3"
                        />
                        <h2>Titre du Produit 3</h2>
                        <div class="rond"></div>
                        <p class="prix">Prix du Produit 3</p>
                        <button class="bouton">Cliquez ici</button>
                    </div>
                </div>
            </div>
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
                        src="./img/image 12.png"
                        alt="Produit 3"
                    />

                    <button class="bouton">Cliquez ici</button>
                </div>
                <div class="produit">
                    <img
                        class="img-block"
                        src="./img/image 13.png"
                        alt="Produit 3"
                    />

                    <button class="bouton">Cliquez ici</button>
                </div>
                <div class="produit">
                    <img
                        class="img-block"
                        src="./img/image 14.png"
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
                    src=""
                    alt="Produit 3"
                />
                <h2>Livraison gratuite</h2>
                <a href="#" class="prixo">En savoir plus </a>
            </div>
            <div class="produit">
                <img
                    class="img-blocko"
                    alt="Produit 3"
                />
                <h2>Adaptez a tout style</h2>
                <a href="#" class="prixo">En savoir plus </a>
            </div>
        </div>

<?php  include VIEWS.'inc/footer.php'; ?>