<?php
include_once "manage_cart.php";

						include_once "../model/Commandes.php";
						include "../controller/CommandesC.php";
						include_once "../model/Ligne.php";
						include "../controller/LigneC.php";
						
						if (isset($_SESSION['id']) && ! empty($_SESSION['id']) && isset($_SESSION['prenom']) && ! empty($_SESSION['prenom']) &&  isset($_SESSION['nom']) && ! empty($_SESSION['nom']))
						{
							$id=$_SESSION['id'];
							$user=$_SESSION['prenom'] .' '. $_SESSION['nom'];
							$message="Se Deconnecter";
					
					
						}
						else{
						$user="";
						$message="Se Connecter";
						 }

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Poopet/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 11:12:14 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Poopet - HTML 5 Template Preview</title>

<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- Main Header -->
    <header class="main-header header-style-two">

        <div class="page-header-mobile-info">
            <div class="page-header-mobile-info-content">
                <div class="header-info clearfix">
                    <ul class="info-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>660 Broklyn Street, 88 New York </span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>666 888 0000, Fax: +21 000 333</span>
                        </li>
                        <li>
                            <i class="fa fa-clock"></i>
                            <span>Mon - Fri 9:00 am - 6:00 pm</span>
                        </li>
                    </ul>
                    <ul class="social-style-one">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="toggle-box clearfix">
                <div class="page-header-mobile-info-toggle"></div>
                <div class="link"><a href="contact.html" class="theme-btn">Appointment</a></div>
				
            </div>
        </div>
        
        <div class="container">
            <div class="header-top">
                <div class="header-info clearfix">
                    <ul class="info-list pull-left">
                        <li>
                            <i class="flaticon-mail"></i>
                            <span><a href="mailto:example@gmail.com">example@gmail.com</a></span>
                        </li>
                        <li>
                            <i class="flaticon-phone-call"></i>
                            <span><a href="tel:+886668880000">666 888 0000</a></span>
                        </li>
                        <li><a href="profile.php"><i class="fa fa-user">      <?PHP echo $user; ?></i></a>
                            <br>
                            <br>
                            
                            
                        
                            <a href="deconnexion.php"> <?PHP echo $message; ?> </a>
                            
                    </li>
                    </ul>
                    <div class="link pull-right">
                        <a href="email.php">Book an Appointment</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="clearfix">
                    <div class="logo-box">
                        <figure class="logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a></figure>
                    </div>
                    <div class="nav-outer clearfix">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current "><a href="index.php">Home</a></li>
                                            
                                        <li ><a href="error.html">Plantes</a>
                                           
                                          
                                        </li> 
										<li class="dropdown " ><a href="#">Reclamtion</a>
                                            <ul>
											<li><a href="ajouterReclamation.php">Ajouter Reclamtion</a></li>
											   <li><a href="afficherReclamation.php">Afficher Reclamation</a></li>
                                               
                                                
                                            </ul>
                                        </li>
                                        <li><a href="evenement.php">Evenements</a>
                                           
                                        </li>  
                                        <li class=" dropdown"><a href="#">BLOG</a>
                                            <ul>
                                                <li><a href="article.php">Articles</a></li>
                                                <li><a href="promo.php">Promos</a></li>
                                            </ul>
                                        </li>                              
                                        <li><a href="animaux.php">Animaux</a></li>
                                        <li class=" dropdown"><a href="#">SHOP</a>
                                            <ul>
                                                <li><a href="AjouterCommande.php">Ajouter commande</a></li>
                                                <li><a href="ModifierCommande.php">modifier commande</a></li>
                                                
                                               
                                    
                                                
                                                
                                            </ul>
                                        </li>                            
                                    </ul>
                                </div>
                            </nav>
                        </div>       
                        </div>
                        <ul class="social-style-one">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index-2.html"><img src="images/small-logo.png" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                               
                                <li ><a href="index.php">Home</a></li>
                                            
                                <li ><a href="error.html">Plantes</a>
                            </li> 
                            <li class="dropdown"><a href="#">Reclamtion</a>
                                <ul>
                                <li><a href="ajouterReclamation.php">Ajouter Reclamtion</a></li>
                                   <li><a href="afficherReclamation.php">Afficher Reclamation</a></li>
                                   
                                    
                                </ul>
                            </li>
                            <li><a href="evenement.php">Evenements</a>
                               
                            </li>  
                            <li class=" dropdown"><a href="#">BLOG</a>
                                <ul>
                                    <li><a href="article.php">Articles</a></li>
                                    <li><a href="promo.php">Promos</a></li>
                                </ul>
                            </li>                              
                            <li><a href="animaux.php">Animaux</a></li>
                           
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->



				

    <section id="cart_items">
		<div class="container">
        
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  
			
                    <div class="col-lg-12 text-center border rounded bg-light my-5" >
                     <h1>MY CART</h1>
                    </div>
                

                   <div class="col-lg-8">
                    <table class="table table-striped">
                        <thead>
                     <tr>
                     <th scope="col">Serial No</th>
                     <th scope="col">Item Name</th>
					 <th scope="col">Item ID</th>
                     <th scope="col">Item Price</th>
                     <th scope="col">Quantity</th>
					 <th scope="col">Montant</th>
                     <th scope="col"></th>
                    </tr>
                    
                     </thead>
                         <tbody>
                             
                         <?php
                        $total=0;
						$produit="";
						$idP="";

                        if(isset($_SESSION['cart']))
                        {
                        foreach($_SESSION['cart']as $key => $value)
                        {
                            $sr=$key+1;
                            $prod = $value['Item_Name']. " * $value[Quantity] ";
							$produit=$produit."+ ".$prod;
							$idP=$idP.$value['Item_id'];
							

							$total=$total+($value['Price']*$value['Quantity']);
                            echo"
                            <tr>
                            <td>$sr</td>
                            <td>$value[Item_Name]</td>
							<td>$value[Item_id]</td>
                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]' </td>
                            <td>
							 <form action='manage_cart.php' method='POST'>
							  <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
							  <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
							  </form>
							  </td>
                            <td class='itotal'></td>
							<td>
                            <form action='manage_cart.php' method='POST'>
                            <button name='Remove_Item' class='btn btn-default add-to-cart'>REMOVE</button>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                            </form>
                            </td>
                            </tr>
                            ";   

                        }
                    }
                        ?>
                         </tbody>
                        </table>
                </div>
					
						<div class="col-lg-3">
                            <div class="chose_area">
                            <h4>Total:</h4>
                                 <h5 id='gtotal'></h5>
                                 <br>
								 <?php
								if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
									{
								?>

                                 <form>

                                 <a class='btn btn-default add-to-cart' href="AjouterLivraison.php">Delivery</a></td>
                                 </form>
								
                            </div>
                        </div>

		</div>
			</div>
<div class="ajouterCommande">
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Confirm your purchases</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<?php
						
						
 						if(isset($_POST['paiment'])
 
 						)

						{
						 if((!empty($_POST['paiment']))
	 
						 ) 
						 {


						$idClient=$_SESSION['id'];
						
						
						$paiment = $_POST['paiment'];
						$C1 = new Commandes($idClient,$_POST['paiment'],$total);
						$CO = new CommandesC();
						$CO->ajouter_commande($C1);
						
						$db=config::getConnexion();
						$id=$db->lastInsertId ();

						foreach($_SESSION['cart']as $key => $value)
                        {
                            $sr=$key+1;
                            $prod = $value['Item_Name']. " * $value[Quantity] ";
							$produit=$produit."+ ".$prod;
							$idP=$value['Item_id'];
							

							$total=$total+($value['Price']*$value['Quantity']);
							
							$L0 = new LigneC();			
							$L1= new Ligne($prod,$idP,$id);
							
							
							$L0->ajouter_Ligne($L1);
						}
						

	
			
			//echo"Last inserted id is $id";
	


	

		//	for($i=0;$i<strlen($idP);$i++){
			//	$idProd=substr($idP,$i,1);
				

			
			//}
		
		
			
		

$suc=1;  

	}else echo" Veuillez remplir toutes les cases";
		}else echo"Missing Information";

	

						?>

					 <form action="" method="POST">
						<ul class="user_info">
							<li class="single_field">
								<label>Client:</label>
								<input type="number" name="cli" id="cli" placeholder="<?php echo $_SESSION['id'];?>"disabled>
								
							</li>
							
							<li class="single_field">
								<label>Methode de paiment:</label>
								    <select id="paiment" name="paiment">
									<option>-- Paiment --</option>
									<option>Cash</option>
									<option>Cheque</option>
									<option>Carte Bancaire</option>
								</select>
									
						    </li>
							
                           		<li class="single_field"> 
								   <label>TOTAL:</label>
                                  <label id='gtot'></label>
								  <br>
                                
								</li>
						
								<li class="single_field">
									<label>Produit</label>	
									<textarea  id="produit" name="produit" class="text right" rows="4" cols="50" placeholder="<?php echo $produit;?>"disabled ></textarea>
								</li>
							
								</ul>
								
							<input type="reset" class='btn btn-default update' value="Back">
							<input type="submit" class="btn btn-primary" value="Valider" onclick ="return verifC();">
						
							 
					 </form>
					 
				 </div>
			   </div>
			</div>
		</div>
	</section><!--/#do_action-->
</div>
 
								<?php
									
									}
								?>
							
			<script>
			var gt=0;
			var iprice=document.getElementsByClassName('iprice');
			var iquantity=document.getElementsByClassName('iquantity');
			var itotal=document.getElementsByClassName('itotal');
			var gtotal=document.getElementById('gtotal');
			var gtot=document.getElementById('gtot');

			function subTotal(){
				gt=0;
				for(i=0;i<iprice.length;i++){
					itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
					gt=gt+(iprice[i].value)*(iquantity[i].value);
				}
					gtotal.innerText=gt;
					gtot.innerText=gt;				
					
			}
			subTotal();
			
			
			</script>
			
            
	</section> <!--/#cart_items-->

   
	<footer class="main-footer gray-bg">
        
        
        <div class="container">
            <div class="widget-section">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <h3 class="widget-title">Explore</h3>
                            <div class="widget-content">
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <h3 class="widget-title">Links</h3>
                            <div class="widget-content">
                                <ul class="link">
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Location</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <h3 class="widget-title">Contact</h3>
                            <div class="widget-content">
                                <div class="text">660 Broklyn Street,<br />88 New York U.S.A 
                                    <a href="mailto:example@gmail.com">example@gmail.com</a>
                                    <a href="mailto:info@gmail.com">info@gmail.com</a>
                                </div>
                                <div class="phone"><a href="tel:+886668880000">666 888 0000</a></div>
                                <div class="phone"><a href="tel:+88333555999">333 555 999</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 footer-column">
                        <div class="footer-widget about-widget">
                            <h3 class="widget-title">About</h3>
                            <div class="widget-content">
                                <div class="text">Etiam rhoncu sit amet adip scing simply thin sed ipsum dolor sit amet adip dine scing not avilable in the martket lorem ipsum sem neque.</div>
                                <div class="subscribe-form">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address" required>
                                            <button type="submit"><i class="fa fa-angle-right"></i></button> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred black-bg">
            <div class="container">
                <div class="copyright">&copy; Copyrights 2019. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>



<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/appear.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0" nonce="UHn7HYNY"></script>
<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Poopet/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 11:16:01 GMT -->
</html>


  	

	

	