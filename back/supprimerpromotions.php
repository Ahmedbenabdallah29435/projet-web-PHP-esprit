<?PHP
	include "../controller/AnimauxC.php";
	require_once ("composant/composant.php");

	$AnimauxC=new AnimauxC();
	
	if (isset($_POST["id_promoanimaux"])){
		$AnimauxC->supprimeranimau($_POST["id_promoanimaux"]);
		header('Location:promoanimaux.php');
	}

?>

