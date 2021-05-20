<?php
include '../model/evenement.php';
   
    include_once '../controller/evenementC.php';

	
	


    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new evenementC();
	if (
        isset($_POST["nom"]) && 
        isset($_POST["nbrP"]) && 
        isset($_POST["date"]) &&
		isset($_POST["type"])

    ) {
        if ( 
            !empty($_POST["nom"]) && 
            !empty($_POST["nbrP"]) && 
            !empty($_POST["date"]) &&
			!empty($_POST["type"])

        ) {
            $user = new evenement( 
				
                $_POST['nom'],
                $_POST['nbrP'],
                $_POST['date'],
				$_POST['type']

            );
			
            $userC->modifierevenement($user,$_GET['id']);
			header('Location:tables.php');
			
          
        }
        else
            $error = "Missing information";
    }

	

	

    
?>

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
<link rel="stylesheet" href="css1/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css1/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css1/jquery-ui.css"> 
<!-- jQuery -->
<script src="js1/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css1/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>MODIFIER EVENEMENT</h2>

     <div id="error">
     <?php echo $error ?>
	 </div>

	 <?php if(isset($_GET['id'])){
		 $user=$userC->recupererevenement($_GET['id']);
	 } ?>



		<form action="" method="POST">
		
			<!--<div $id=id value ="/*<?php// echo $user['id']; ?>*/"></div>-->
		
			<div class="username">
				<span class="username">nom:</span>
				<input type="string" name="nom" id="nom" class="name" placeholder="" required="" value="<?php echo $user['nom']; ?>">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">nombre de participant</span>
				<input type="int" name="nbrP" id="nbrP" class="name" placeholder="" required=""  value="<?php echo $user['nbrP']; ?>">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">date realisation:</span>
				<input type="date" name="date" id="date" class="name" placeholder="" required=""  value="<?php echo $user['date']; ?>">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">type:</span>
				<input type="string" name="type" id="type" class="name" placeholder="" required="" value="<?php echo $user['type']; ?>">
				<div class="clearfix"></div>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" value="modifier" onclick="modif()">
			</div>
			<div class="clearfix"></div>
		</form>
		<div class="back">
						<a href="tables.php">Back to home</a>
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


