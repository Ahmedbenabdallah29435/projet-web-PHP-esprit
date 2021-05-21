
<?PHP
include "..model/categorie.php";
include "../controller/categorieC.php";

if (isset($_POST['idc']) and isset($_POST['nomc']) and isset($_POST['occ']))
{
$cat1=new Categorie($_POST['idc'],$_POST['nomc'],$_POST['occ']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$cate=new CategorieC();
$cate->ajouterCategorie($cat1);
header("location: tabels.php");
	
}else{
	
}
?>
 

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter Animal</title>
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

<form method="POST" action="createc.php">

<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				<h2 class="mt-5"><CENTER>Update Animal</CENTER></h2>
			<CENTER> 	<div class="form-group">
                                           <label for="card-number" class="form-label">Identifiant *</label> 
                                            <input class="form-control" type="number" name="idc" style='width:15em' placeholder="id Produit" size="3"  required class="form-control"  > 
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Nom *</label>
                                            <input class="form-control" type="text" name="nomc" placeholder="nom Produit" style='width:15em' onkeyup="lettersOnly(this)" required class="form-control">
                                        </div>
										
							
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Occurence *</label>
                                            <input class="form-control" type="number" name="occ" placeholder="Occurences" style='width:15em'  required class="form-control" onkeyup="verifier()">
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