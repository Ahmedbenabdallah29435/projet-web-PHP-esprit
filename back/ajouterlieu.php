<?php
include '../model/lieu.php';
include "../model/evenement.php";
include_once "../controller/evenementC.php";
    include_once '../controller/lieuC.php';
	require_once "../config.php";

	
	


    $error = "";

    // create user
   // $user = null;

    // create an instance of the controller
    $lC = new lieuC();
    if (
		
        isset($_POST["lieu"]) && 
		isset($_POST["adress"])&&
		isset($_POST["ddid"])

    ) {
        if ( 
			
            !empty($_POST["lieu"]) && 
    
			!empty($_POST["adress"])&&
			!empty($_POST["ddid"])

        ) {
            $l = new lieu( 
				
                $_POST['lieu'],
                
				$_POST['adress'],
				$_POST['ddid']


            );
            $lC->ajouterlieu($l);
			header('Location:tables.php');
        }
        else
            $error = "Missing information";
    }

	

	

    
?>

<!DOCTYPE html>
<html>
<head>
<title>ajouter lieu</title>
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
		<h2>AJOUTER LIEU</h2>
		<form action="" method="POST">
			<?php $event=new evenementC();
	$listeUsers=$event->afficherevenement();  ?>
	
	<span class="username">id:</span>
	<p><select size="1" name="ddid">
		
		<?php foreach($listeUsers as $event){
			?>
		<option value="<?php echo $event['id'] ;?>" ><?php echo $event['id']; ?> </option>
		<?php  } ?>
		</select></p>

		
			
				<span class="username">lieu:</span>
				<input type="string" name="lieu" class="name" placeholder="" required="">
				
			
			
				<span class="username">adress</span>
				<input type="string" name="adress" class="name" placeholder="" required="">


					
	
		

	
<?php
				

//$sql="SELECT name,id FROM student"; 

//$sql="SELECT id FROM evenement"; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

//echo "<select name=ddid value=''>--select id--</option>"; // list box select command

//foreach ($dbo->query($sql) as $row){//Array or records stored in $row

//echo "<option value=$row[id]>$row[id]</option>"; 

/* Option values are added by looping through the array */ 

//}

 //echo "</select>";// Closing of list box

		?>	
				
			
			<div class="">
					<input type="submit" class="login" value="ajouter">
			</div>
			
		</form>
		<div class="back">
						<a href="tables.php">Back to home</a>
				</div>
				
	</div>
	</div>
	</div>
	
</body>
</html>

