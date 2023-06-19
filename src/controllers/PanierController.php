<?php


class PanierController 
{
    
    public static function addcart_1($quantite = 1)
    {
        // Récupérer l'ID du produit depuis $_GET['id']
        $idProduit = $_GET['id'];
        
        
        // Vérifier si le produit est déjà dans le panier
        if (isset($_SESSION['panier'][$idProduit])) {
            // Le produit existe déjà dans le panier, mettre à jour la quantité
            $_SESSION['panier'][$idProduit] += $quantite;
        } else {
            // Le produit n'existe pas dans le panier, l'ajouter avec la quantité spécifiée
            $_SESSION['panier'][$idProduit] = $quantite;
        }
        
        // Rediriger l'utilisateur vers une autre page après l'ajout au $_SESSION['panier'];
        header("Location: " . BASE_PATH . "Produit?id={$_GET['cat']}");
        exit();
    }


    public static function show_panier()
    {

        $cart = new Panier();
        
        $cart->show_panier();

        include VIEWS . "panier/panier.php";
        exit();
    }

    public static function delete_panier() {
        // Vérifier si le panier est vide
        if (empty($_SESSION['panier'])) {
            // Le panier est vide, vous pouvez afficher un message d'erreur ou rediriger l'utilisateur vers la page du panier
            $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                Le panier est vide.
            </div>";
            header("Location: " . BASE_PATH . "list_panier");
            exit; // Terminer le script
        }
    
        // Vérifier si l'ID du produit à supprimer est spécifié
        if (isset($_GET['id'])) {
            $idProduit = $_GET['id'];
    
            // Vérifier si le produit existe dans le panier
            if (isset($_SESSION['panier'][$idProduit])) {
                // Supprimer le produit du panier
                unset($_SESSION['panier'][$idProduit]);
    
                // Rediriger l'utilisateur vers la page du panier mise à jour
                $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                Le produit selectionné a bien etait supprimé du panier !
            </div>";
                header("Location: " . BASE_PATH . "list_panier");
                exit; // Terminer le script
            } else {
                // Le produit n'existe pas dans le panier, vous pouvez afficher un message d'erreur ou rediriger l'utilisateur vers la page du panier
                $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                    Le produit n'existe pas dans le panier.
                </div>";
                header("Location: " . BASE_PATH . "list_panier");
                exit; // Terminer le script
            }
        } else {
            // L'ID du produit à supprimer n'est pas spécifié, vous pouvez afficher un message d'erreur ou rediriger l'utilisateur vers la page du panier
            $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                L'ID du produit à supprimer n'est pas spécifié.
            </div>";
            header("Location: " . BASE_PATH . "list_panier");
            exit; // Terminer le script
        }
    }
    
}