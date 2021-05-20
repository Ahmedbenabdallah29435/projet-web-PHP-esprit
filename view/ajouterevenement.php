<?php
include '../model/evenement.php';
   
    include_once '../controller/evenementC.php';

	
	


    $error = "";

    // create user
   // $user = null;

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
            $userC->ajouterevenement($user);
			header('Location:tables.php');
        }
        else
            $error = "Missing information";
    }

	

	

    
?>

<!DOCTYPE html>
<html>
<head>
<title>ajouter evenement</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricss1on, Motorola web design" />
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
		<h2>AJOUTER EVENEMENT</h2>
		<form action="" method="POST">
			
				
				
		
			
				<span class="username">nom:</span>
				<input type="text" name="nom" class="name" placeholder="" required="">
				
			
			
				<span class="username">nombre de participant</span>
				<input type="text" name="nbrP" class="name" placeholder="" required="">
				
			
			
				<span class="username">date realisation:</span>
				<input type="date" name="date" class="name" placeholder="" required="">
				
			
			
				<span class="username">type:</span>
				<input type="text" name="type" class="name" placeholder="" required="">
				
			
			<div class="">
					<input type="submit" class="login" value="ajouter">
			</div>
			
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
	
</body>
</html>

