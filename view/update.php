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
//require_once "connection.php";
include "../model/animal.php";
include "../controller/AnimalC.php";
if (isset($_GET['id'])){
	$AnimalC=new AnimalC();
    $result=$AnimalC->recupererAnimal($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$name=$row['name'];
		$age=$row['age'];
		$couleur=$row['couleur'];
    $image=$row['image'];
?>
<form method="POST">
                                       <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				<h2 class="mt-5">Update Animal</h2>
                                            <label for="card-number" class="form-label">Identifiant *</label>
                                            <input class="form-control" type="number" name="id" placeholder="id Produit" value="<?PHP echo $id ?>" id ='id' required class="form-control" onkeyup="verifier()">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Nom *</label>
                                            <input class="form-control" type="text" name="name" placeholder="nom Produit"value="<?PHP echo $name ?>"  onkeyup="lettersOnly(this)" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Age *</label>
                                            <input class="form-control" type="number" name="age" placeholder="Quantité du produit"value="<?PHP echo $age ?>" id='age'   required class="form-control" onkeyup="verifier()">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Couleur *</label>
                                            <input class="form-control" type="text" name="couleur" placeholder="couleur"value="<?PHP echo $couleur ?>" onkeyup="lettersOnly(this)" required class="form-control">
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
    
                                       

                                        


<CENTER><td><input type="submit" class="btn btn-primary" name="modifier" value="Modifier" id="modifier"></td></CENTER>
                                        




</form>
<?PHP
	}

if (isset($_POST['modifier'])){
	$Animal=new Animal($_POST['id'],$_POST['name'],$_POST['age'],$_POST['couleur'],$_POST['image']);
	$AnimalC->modifierAnimal($Animal,$_POST['id']);
	echo("<script>location.href = 'tabels.php';</script>");
}
}

?>
</body>
</html>