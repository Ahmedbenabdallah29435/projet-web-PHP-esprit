<?PHP
	include "../controller/lieuC.php";
	

	$lieuC=new lieuC();
	
	if (isset($_POST["lieu"])){
		$lieuC->supprimerlieu($_POST["lieu"]);
		header('Location:tables.php');
	}

	
?>

