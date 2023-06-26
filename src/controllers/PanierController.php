<?php


class PanierController 
{
    
    public static function addcart_1()
    {
        // Récupérer l'ID du produit depuis $_GET['id']
        $idProduit = $_GET['id'] ?? '';
        $page = $_GET['p'] ?? '';
    
        // Vérifier si les paramètres sont spécifiés
        if (empty($idProduit) || empty($page)) {
            // Les paramètres sont manquants, afficher un message d'erreur ou rediriger l'utilisateur
            $_SESSION["message"] .= "<div class=\"alert alert-danger text-center w-100 mx-auto\" role=\"alert\">
            Les paramètres ID et page sont manquants.
            </div>";
            // Rediriger l'utilisateur vers une page appropriée
            header("Location: " . BASE_PATH . "list_panier");
            exit();
        }
    
        // Définir la quantité du produit (vous pouvez ajuster la logique selon vos besoins)
        $quantite = 1;
    
        // Vérifier si le produit est déjà dans le panier
        if (isset($_SESSION['panier'][$idProduit])) {
            // Le produit existe déjà dans le panier, mettre à jour la quantité
            $_SESSION['panier'][$idProduit] += $quantite;
        } else {
            // Le produit n'existe pas dans le panier, l'ajouter avec la quantité spécifiée
            $_SESSION['panier'][$idProduit] = $quantite;
        }
    
        // Reste du code pour rediriger l'utilisateur ou effectuer d'autres opérations nécessaires
        // ...
    
        // Redirection vers une page appropriée après l'ajout au panier
        if ($page == 'prd') {
            // Redirection vers la page Produit avec l'ID de la catégorie
            header("Location: " . BASE_PATH . "Produit?id={$_GET['cat']}");
            exit();
        } elseif ($page == 'prd_info') {
            // Redirection vers la page Produit_info avec l'ID du produit et de la catégorie
            header("Location: " . BASE_PATH . "Produit_info?id={$idProduit}&cat={$_GET['cat']}");
            exit();
        } else {
            // Redirection vers une page par défaut (vous devez ajuster la destination appropriée)
            header("Location: " . CONFIG['app']['projectBaseUrl'] . "public");
            exit();
        }
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
    

                $_SESSION["message"] .= "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
                Le produit selectionné a bien été supprimé du panier !
            </div>";
                header("Location: " . BASE_PATH . "list_panier");
                exit;
            } else {
                
                $_SESSION["message"] .= "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
                    Le produit n'existe pas dans le panier.
                </div>";
                header("Location: " . BASE_PATH . "list_panier");
                exit; 
            }
        } else {
            
            $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                L'ID du produit à supprimer n'est pas spécifié.
            </div>";
            header("Location: " . BASE_PATH . "list_panier");
            exit; 
        }
    }
    
    public static function vider_panier(){
if (!empty($_SESSION['panier'])) {

    unset($_SESSION['panier']);
    $_SESSION["message"] .= "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
            Votre panier est désormais vide !
        </div>";
        header("Location: " . BASE_PATH . "list_panier");
        exit; 
}else {
    $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
            Votre panier est déjà vide !
        </div>";
        header("Location: " . BASE_PATH . "list_panier");
        exit; 
}
       
    }
    
}