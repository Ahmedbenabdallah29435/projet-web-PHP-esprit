<?php 
 include_once '../../Model/Plante.php';
include_once '../../Controller/PlanteC.php';


      $id=$_GET['id'];  
      $PlanteC=new PlantesC() ;
      $plante=$PlanteC->recoverPlantesbyid($id);
      $error= array();
     
      if (
          isset($_POST['nom'])&&
          isset($_POST['longeur'])&&
          isset($_POST['prix'])&&
          isset($_POST['type'])&&
          isset($_POST['image'])
 
         )
       {

          if (empty($error))
           {
              $plantes = new Plante(

                  $_POST['nom'],
                  $_POST['longeur'],
                  $_POST['prix'],
                  $_POST['type'],
                  $_POST['image']
              );
              $PlanteC->updatePlantes($plantes, $id);  
          }
    
      }
	  ?>
	 

</html>
<!DOCTYPE html>
<html>
<head>
<title>modifier evenement</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css1/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css1/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css1/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css1/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css1?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css1?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css1/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>MODIFIER PLANTE</h2>

       

<form class="contact__form" method="post" action="">

            <div class="username">
				<span class="username">nom:</span>
				<input type="string" name="nom" id="nom" class="name" placeholder="" required="" value="<?=$plante->nom?>"required>
				<div class="clearfix"></div>
			

            <div class="username">
				<span class="username">longeur</span>
				<input name="longeur" type="text" class="form-control" placeholder="Tapez la longeur" value="<?=$plante->longeur?>" required>
				<div class="clearfix"></div>
			

            <div class="username">
				<span class="username">prix:</span>
				<input name="prix" type="text" class="form-control" placeholder="Tapez le prix" value="<?=$plante->prix?>" required>
				<div class="clearfix"></div>
            
            
            <div class="username">
				<span class="username">type:</span>
				<input name="type" type="text" class="form-control" placeholder="Tapez le type" value="<?=$plante->type?>" required>
				<div class="clearfix"></div>
            
                <div class="username">
				<span class="username">image:</span>
				<input type="file" class="form-control" id="img"  name="image">
				<div class="clearfix"></div>
            </div>
                
                <div class="login-w3">
					<input type="submit" class="login" value="modifier" onclick="modif()">
			</div>
			<div class="clearfix"></div>
</form>
		<div class="back">
						<a href="index.php">Back to home</a>
				</div>
				<div class="footer">
					<p>&copy; 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
                </div>
	</div>
	</div>
	<script>

function modif()
{
	return("modifier avec succées !");
}
</script>
</body>
</html>
