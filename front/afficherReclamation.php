<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include "config.php"; 
	include "controller/ReclamationC.php";
	include "controller/UtilisateurC.php";
   $ReclamationC = new ReclamationC();
   $UtilisateurC=new UtilisateurC();

   $nom=$_SESSION['prenom'] .' '. $_SESSION['nom'];
	$id=$_SESSION['id'];

   $listeReclamation=$ReclamationC->afficherReclamation1($id);
   $error = "";
   
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


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Poopet - HTML 5 Template Preview</title>

<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" href="images/favicon copym.ico" type="image/x-icon">

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
    
	<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fontss/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="csss/util.css">
	<link rel="stylesheet" type="text/css" href="csss/main.css">
<style>
table, th, td {
  
background-color: #E8CEBF;
  color: #412B15;
}
th, td {
  padding: 15px;
}

</style>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- Main Header -->
    <header class="main-header">

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
        
        <div class="header-top">
            <div class="container">
                <div class="header-info clearfix">
                    <ul class="info-list pull-right">
                        <li>
                            <i class="flaticon-mail"></i>
                            <strong><a href="mailto:example@gmail.com">example@gmail.com</a></strong>
                            Email address
                        </li>
                        <li>
                            <i class="flaticon-phone-call"></i>
                            <strong><a href="tel:+886668880000">666 888 0000</a></strong>
                            Phone line
                        </li>
                        <li>
                            <i class="flaticon-clock"></i>
                            <strong>Mon - Fri 9:00 am - 6:00 pm</strong>
                            Working hours
                        </li>
                    </ul>
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
									<li><a href="index.php">Home</a></li>
                                            
											<li ><a href="error.html">Plantes</a>
                                        </li> 
                                        <li class="current dropdown"><a href="#">Reclamtion</a>
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




	<div class="main-panel">
          <div style="height: 100%;overflow-y: scroll;overflow-x: hidden; ">
                          <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><h1>Mes reclamations</h1></h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
						    <th>ID Client</th>
                            <th>Id_reclamation</th>
                            <th>date_reclamation</th>
                            <th>objet_reclamation</th>
                            <th>description</th>
                          </tr>
                        </thead>
                       <tbody>
                       				<?PHP
				foreach($listeReclamation as $ReclamationC){
			?>
				<tr>
				   <td><?PHP echo $id ?></td>
					<td><?PHP echo $ReclamationC['id_reclamation']; ?></td>
					<td><?PHP echo $ReclamationC['date_reclamation']; ?></td>
					<td><?PHP echo $ReclamationC['objet_reclamation']; ?></td>
					<td><?PHP echo $ReclamationC['description']; ?></td>
          <td>
          <a href=""></a>
          
						<a href="modifierReclamation.php" button  type="submit" style="border:none"> <i class="fa fa-bug"></i></button></a>
						
						
        </td>
				</tr>
			<?PHP
				}
			?>
                       </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
	



	
	
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

<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Poopet/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 11:16:01 GMT -->
</html>


  