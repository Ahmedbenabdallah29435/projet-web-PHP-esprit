
<?PHP
include "../model/animal.php";
include "../controller/AnimalC.php";

if (isset($_POST['id']) and isset($_POST['nomA']) and isset($_POST['ageA']) and isset($_POST['couleurA']) and isset($_POST['image']))
{
$animal1=new Animal($_POST['id'],$_POST['nomA'],$_POST['ageA'],$_POST['couleurA'],$_POST['image']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$animal1c=new AnimalC();
$animal1c->ajouterAnimal($animal1,$id);
header("location: tabels.php");
	
}else{
	
}
//*/
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

<form method="POST" action="create.php">

<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				<h2 class="mt-5"><CENTER>Ajouter Animal</CENTER></h2>
			<CENTER> 	<div class="form-group">
                                           <label for="card-number" class="form-label">Identifiant : </label> 
                                            <input class="form-control" type="text" name="id" style='width:15em'  required maxlength="3"  required class="form-control"  > 
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Nom : </label>
                                            <input class="form-control" type="text" name="nomA"  style='width:15em' onkeyup="lettersOnly(this)" required class="form-control">
                                        </div>
										
							
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Age : </label>
                                            <input class="form-control" type="number" name="ageA"  style='width:15em'  required class="form-control" required maxlength="3" onkeyup="verifier()">
                                        </div>
										
                                        <div class="form-group">
                                            <label for="card-number" class="form-label"> Couleur : </label>
                                            <input class="form-control" type="text" name="couleurA"  style='width:15em'  required class="form-control" required maxlength="10" onkeyup="verifier()">
                                        </div>
										<div class="form-group">
                                            <label for="card-number" class="form-label">Image </label>
                                            <input class="form-control" type="file" name="image"  value="<?PHP echo $image ?>" style='width:25em' required class="form-control">
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