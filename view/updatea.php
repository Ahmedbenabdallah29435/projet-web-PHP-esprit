<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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

include "../model/produit.php";
include "../controller/ProduitC.php";
if (isset($_GET['id'])){
	$produitC=new AccessC();
    $result=$produitC->recupererAnimal($_GET['id']);
	foreach($result as $row){
		$ida=$row['ida'];
		$noma=$row['noma'];
		$prixa=$row['prixa'];
		$idc=$row['idc'];
    $image=$row['image'];
?>
<form method="POST">
                                       <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				<h2 class="mt-5">Update Accessoire</h2>
                                            <label for="card-number" class="form-label">Identifiant *</label>
                                            <input class="form-control" type="number" name="ida" placeholder="id Produit" value="<?PHP echo $ida ?>" id ='id' required class="form-control" onkeyup="verifier()">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Nom *</label>
                                            <input class="form-control" type="text" name="noma" placeholder="nom Produit"value="<?PHP echo $noma ?>"  onkeyup="lettersOnly(this)" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Age *</label>
                                            <input class="form-control" type="number" name="prixa" placeholder="Quantité du produit"value="<?PHP echo $prixa ?>" id='age'   required class="form-control" onkeyup="verifier()">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Couleur *</label>
                                            <input class="form-control" type="text" name="idc" placeholder="couleur"value="<?PHP echo $idc ?>" required class="form-control">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Image </label>
                                            <input class="form-control" type="file" name="image" placeholder="Image" value="<?PHP echo $image ?>" required class="form-control">
                                        </div>

                                        <div id="verif" class="alert alert-danger" role="alert" hidden>les valeurs negatives ne sont pas acceptables!
                                            </div>
                                              
                                        </div>
            </div>        
        </div>
    </div>
                                       

                                        


<CENTER><td><input type="submit" class="btn btn-primary" name="modifier" value="Modifier" id="modifier"></td></CENTER>
                                        




</form>
<?PHP
	}

if (isset($_POST['modifier'])){
	$Access=new Access($_POST['ida'],$_POST['noma'],$_POST['prixa'],$_POST['idc'],$_POST['image']);
	$produitC->modifierAc($Access,$_POST['ida']);
	echo("<script>location.href = 'tabels.php';</script>");
}
}

?>
</body>
</html>