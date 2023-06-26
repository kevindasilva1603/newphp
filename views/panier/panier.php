<?php
$title = "Synkro";
include VIEWS.'inc/header.php'; 

$allmontre = Panier::show_panier();

?>

<body>
    <main>
        <h2>Résumé de votre panier</h2>
        
        <?php  
        if (!empty($_SESSION["message"])) {
            echo($_SESSION["message"]);
            unset($_SESSION["message"]);
        }
          
        $panier = $_SESSION['panier'];

        // Variables pour le total
        $quantiteTotal = 0;
        $prixTotal = 0;

        ?>
        <div class="my-shopping-cart">
            <table class="my-table my-table-striped my-container-sm">
                <thead class="my-thead-dark">
                    <tr>
                        <th scope="col">Produit</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Description</th>
                        <th scope="col">Couleur</th>
                        <th scope="col">Image</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="my-table-striped">
                    <?php
                    foreach ($panier as $produitId => $quantite) {
                       
                        // Chercher les détails du produit correspondant à l'ID dans $allmontre
                        $titre = '';
                        $description = '';
                        $couleur = '';
                        $image = '';
                        $prix = '';

                        foreach ($allmontre as $montre) {
                            if ($montre['id_montre'] == $produitId) {
                                $titre = $montre['titre'];
                                $description = $montre['description'];
                                $couleur = $montre['couleur'];
                                $image = $montre['photo'];
                                $prix = $montre['prix'];
                                break;
                            }
                        }
                        ?>
                        <tr>
                            <td><?= $titre ?></td>
                            <td><?= $quantite ?></td>
                            <td><?= $description ?></td>
                            <td><?= $couleur ?></td>
                            <td><img src="<?= TELECHARGEMENT. "produit/". $image ?>" class="my-product-image"></td>
                            <td><?= $prix." €"?></td>
                            <td>
                                <a href="supprimer_panier?id=<?= $produitId ?>" class="my-button my-button-danger">Supprimer</a>
                            </td>
                        </tr>
                        <?php
                        // Mise à jour du total
                        $quantiteTotal += $quantite;
                        $prixTotal += $prix * $quantite;

                    }
                    ?>
                </tbody>
            </table>
            <table class="my-table my-table-striped my-container-sm">
                <thead class="my-thead-dark">
                    <tr>
                        <th scope="col">Quantité Total</th>
                        <th scope="col">Prix total</th>
                        <th scope="col">Payer</th>
                        <th scope="col">Vider Panier</th>
                    </tr>
                </thead>
                <tbody class="my-table-striped">
                    <tr>
                        <td><?= $quantiteTotal ?></td>
                        <td><?= $prixTotal ?> €</td>
                        <td>
                            <form method="POST" action="paiement">
                                <input type="hidden" name="prx" value="<?= $prixTotal ?>">
                                <button type="submit" class="my-button my-button-danger">Payer</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="viderpanier">
                                <input type="hidden">
                                <button type="submit" class="my-button my-button-danger">Vider Panier</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

<?php include VIEWS.'inc/footer.php'; ?>
