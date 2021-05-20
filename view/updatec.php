<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
	<?PHP

include "../model/categorie.php";
include "../controller/categorieC.php";
if (isset($_GET['id'])){
	$Categ1c=new CategorieC();
    $result=$Categ1c->recuperercategorie($_GET['id']);
	foreach($result as $row){
		$idc=$row['idc'];
		$nomc=$row['nomc'];
		$occ=$row['occ'];
		
?>
<form method="POST">
                                       <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				<h2 class="mt-5">Update Category</h2>
                                            <label for="card-number" class="form-label">Identifiant *</label>
                                            <input class="form-control" type="number" name="id" placeholder="id Produit" value="<?PHP echo $idc ?>" id ='id' required class="form-control"  onkeyup="verifier()">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Nom *</label>
                                            <input class="form-control" type="text" name="nomc" placeholder="nom Produit"value="<?PHP echo $nomc ?>"  onkeyup="lettersOnly(this)" required class="form-control">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Couleur *</label>
                                            <input class="form-control" type="text" name="occ" placeholder="couleur"value="<?PHP echo $occ ?>" onkeyup="lettersOnly(this)" required class="form-control">
                                        </div>
                                        
                                        

                                        <div id="verif" class="alert alert-danger" role="alert" hidden>les valeurs negatives ne sont pas acceptables!
                                            </div>
                                              
                                        </div>
            </div>        
        </div>
    
                                       

                                        


<CENTER><td><input type="submit" class="btn btn-primary" name="modifier" value="Modifier" id="modifier"></td></CENTER>
                                        




</form>
<?PHP
	}

if (isset($_POST['modifier'])){
	$Categorie=new Categorie ($_POST['id'],$_POST['nomc'],$_POST['occ']);
	$Categ1c->modifiercategorie($Categorie,$_POST['id']);
	echo("<script>location.href = 'tabels.php';</script>");
}
}

?>
</body>
</html>