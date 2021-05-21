<?PHP
	include "../controller/articleC.php";
	require_once ("composant/composant.php");

	$articleC=new articleC();
	
	if (isset($_POST["id"])){
		$articleC->supprimerarticle($_POST["id"]);
		header('Location:article.php');
	}

?>

