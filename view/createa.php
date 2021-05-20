
<?PHP
include "../model/produit.php";
include "../controller/ProduitC.php";

if (isset($_POST['ida']) and isset($_POST['nomA']) and isset($_POST['prixa'])  and isset($_POST['idc']) and isset($_POST['image']))
{
$produit1c=new Access($_POST['ida'],$_POST['nomA'],$_POST['prixa'],$_POST['idc'],$_POST['image']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$prod1=new AccessC();
$prod1->ajouteracc($produit1c);
header("location: tabels.php");
	
}else{
	
}
//*/
?>
 


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter Accessoire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
	body {
    background-color: darkslategrey;
    color: azure;
    font-size: 1.1em;
}
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<form method="POST" action="createa.php">

<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				<h2 class="mt-5"><CENTER>Ajouter Accessoire</CENTER></h2>
			<CENTER> 	<div class="form-group">
                                           <label for="card-number" class="form-label">Identifiant Accessoire *</label> 
                                            <input class="form-control" type="number" name="ida" style='width:15em' placeholder="id Produit" required maxlength="3"  required class="form-control"  > 
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Nom Accessoire *</label>
                                            <input class="form-control" type="text" name="nomA" placeholder="nom accessoire" style='width:15em' onkeyup="lettersOnly(this)" required class="form-control">
                                        </div>
										
							
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Prix Accessoire *</label>
                                            <input class="form-control" type="number" name="prixa" placeholder="Prix accessoire" style='width:15em'  required class="form-control" required maxlength="3" onkeyup="verifier()">
                                        </div>
										
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">ID Categorie *</label>
                                            <input class="form-control" type="number" name="idc" placeholder="idc accessoire" style='width:15em'  required class="form-control" required maxlength="3" onkeyup="verifier()">
                                        </div>
										<div class="form-group">
                                            <label for="card-number" class="form-label">Image </label>
                                            <input class="form-control" type="file" name="image" placeholder="Image" value="<?PHP echo $image ?>" style='width:25em' required class="form-control">
                                        </div>
                                        </CENTER>
                                        
                                       

                                        <div id="verif" class="alert alert-danger" role="alert" hidden>les valeurs negatives ne sont pas acceptables!
                                            </div>
                                              
                                        </div>
            </div>        
        </div>  
		<CENTER><td><input type="submit" class="btn btn-primary" name="ajouter" value="Ajouter" , enctype="multipart/form-data"></td></CENTER>
</form>
</body>
</HTMl>
</form>
</body>
</HTMl>