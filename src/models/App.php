<?php

class App extends db
{
	//fonction utile
	public static function showArray(array $list) : void
	{
		echo "<pre>";
		print_r($list);
		echo "</pre>";
	}

	// public static function message($message)
	// {
	// 	$message = $_SESSION['message'];

	// 	if (!empty($message)) {
	// 		echo($message);
	// 	}

	// }
//si on est connecte 
	public static function isconnect()
	{
	if (!empty($_SESSION['user'])) { // si cest pas vide ( donc connecté)
		return true;
	}else {
		return false; // si cest vide (non connecte)
	}
	}

	public static function isadmin()
	{
	if ($_SESSION['user']['statut']==1) {
		return true;
	}else {
		return false;
	}
	}

	public static function deconnexion()
	{
		session_destroy();
		// unset($_SESSION['user']); // supprimer la session
		header("Location:" . BASE_PATH . ""); // redirection page d'accueil

	}

			// Fonction pour calculer le total du panier
	public static function calculerTotalPanier($panier)
	{
		$total = 0;

		foreach ($panier as $quantite) {
			$total += $quantite;
		}

		return $total;
	}
public static function paiement(){


	if (!empty($_SESSION['panier'])) {


		foreach ($_SESSION['panier'] as $produitId => $quantite) {

		$query = "INSERT INTO `achat`(`user_id`, `montre_id`, `quantite`) VALUES (?,?,?)";

		$requetePreparee = self::getDb()->prepare($query);
		
		$reponse = $requetePreparee->execute([
			$_SESSION['user']['id_user'],
			$produitId,
			$quantite		
		]);

		if (!$reponse)
		{
			unset($_SESSION["message"]);
			$_SESSION["message"] = "Il y a eu une erreur lors de l'ajout en bdd<br>";
		}
		unset($_SESSION["message"]);
		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                Votre Paiement de " .$_POST['prx']. " € à bien été effectué ! consultez vos commande pour avoir le détail de votre commande.
            </div>";
		
		header("Location:" . BASE_PATH . "list_panier"); 
		}
						
	}else{
		unset($_SESSION["message"]);
		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                Le panier est vide.
            </div>";
		header("Location:" . BASE_PATH . "list_panier");
		exit();
	}

}

public static function commande() {





}

	
}