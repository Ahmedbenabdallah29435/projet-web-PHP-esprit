
	<?PHP
	include_once "controller/articleC.php";
	
    session_start();
    
    require_once ("composant/composant.php");
	
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

	$utilisateurC=new articleC();
	$listeUsers=$utilisateurC->afficherarticle1();
	$liste=$utilisateurC->afficherarticle2();
    $listeee=$utilisateurC->afficherarticle3();
    $lister=$utilisateurC->afficherarticle4();
    $listerr=$utilisateurC->afficherarticle5();
    $listerrr=$utilisateurC->afficherarticle6();


	
	


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
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
                        <li><a href="profile.php"><i class="fa fa-user">      <?PHP echo $user; ?></i></a>
								<br>
								<br>
								<br>
								<br>
								
							
								<a href="deconnexion.php"> <?PHP echo $message; ?> </a>
								
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
                                        <li class="dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home Page 01</a></li>
                                                <li><a href="index-3.html">Home Page 02</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style 01</a></li>
                                                    <li><a href="index-3.html">Header Style 02</a></li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="#">Reclamtion</a>
                                            <ul>
											<li><a href="ajouterReclamation.php">Ajouter Reclamtion</a></li>
											   <li><a href="afficherReclamation.php">Afficher Reclamation</a></li>
                                               
                                                
                                            </ul>
                                        </li>
                                        <li><a href="evenement.php">Evenements</a>
                                           
                                        </li>  
                                        <li class="current dropdown"><a href="#">BLOG</a>
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

        <!--Sticky Header-->
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
                                <li class="dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Home Page 01</a></li>
                                        <li><a href="index-3.html">Home Page 02</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="index-2.html">Header Style 01</a></li>
                                            <li><a href="index-3.html">Header Style 02</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="service.html">Our Services</a></li>
                                        <li><a href="single-service-1.html">Pets Full Grooming</a></li>
                                        <li><a href="single-service-2.html">Health Checkups</a></li>
                                        <li><a href="single-service-3.html">Styling Your Pets</a></li>
                                        <li><a href="single-service-4.html">Bath, Dry & Brush</a></li>
                                        <li><a href="single-service-5.html">Cleaning & Plucking</a></li>
                                        <li><a href="single-service-6.html">Coat Handler Pets</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li class="current dropdown"><a href="#">News</a>
                                    <ul>
                                        <li><a href="blog.html">Our News</a></li>
                                        <li><a href="blog-single.html">Single News</a></li>
                                    </ul>
                                </li>                              
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->

	
	

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>article</h2>
                <hr class="star-primary">
            </div>
        </div>
        <?PHP
				foreach($listeUsers as $user){
					
			?>
        <div class="row">
            <div class="col-lg-4 col-sm-12 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="images/<?= $user['image'] ?>" class="img-responsive" alt="">
                </a>
            </div>
            <?php 
                }
            ?>
             <?PHP
				foreach($liste as $userr){
					
			?>
            <div class="col-lg-4 col-sm-12 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="images/<?= $userr['image'] ?>" class="img-responsive" alt="">
                </a>
                <?php 
                }
            ?>
            </div>
            <?PHP
				foreach($listeee as $userrr){
					
			?>
            <div class="col-lg-4 col-sm-12 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="images/<?= $userrr['image'] ?>" class="img-responsive" alt="">
                </a>
                <?php 
                }
            ?>
            </div>
           
        </div>
    </div>
</section> 

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                    <?PHP
				foreach($lister as $us){
					
			?>
                    

                      <h2>Nom: <td><?PHP echo $us['nom']; ?></td></h2>
                  <TABLE style="width:100%" >
<TR>    
<TD> 
                        <hr class="star-primary">
                        <img src="images/<?= $us['image'] ?>" class="img-responsive img-centered" alt="">

                        <br>
                       
                        <ul class="list-inline item-details">
                            <li>Date debut:
                                <strong><?PHP echo $us['date']; ?>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><?PHP echo $us['datef']; ?>
                                </strong>
                            </li>
                            <li>article:
                                <strong><?PHP echo $us['categorie']; ?>
                                </strong>
                            </li>
                        </ul>
                        <br> <p>Type de l'article : <?PHP echo $us['type']; ?> </p>
                        </TD>
                        <TD>
                        <p><?PHP echo $us['description']; ?>
                        
                        
                        </p>
                        </TD>
                        </TR>
</TABLE>

                         
                        <a href="article.php"><button  class="btn btn1" >
                            Close
                        </button></a>
						
					</td>
							
                        </button>
                    </div>
                </div>
                
            </div>
            <?PHP
}					
			?>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                    <?PHP
				foreach($listerr as $uss){
					
			?>
                    
                        <h2>Nom <td><?PHP echo $uss['nom']; ?></td></h2>
                        <TABLE style="width:100%" >
                        <TR>    
<TD> 
                        <hr class="star-primary">
                        <img src="images/<?= $uss['image'] ?>" class="img-responsive img-centered" alt="">

                        
                        
                       
                        <ul class="list-inline item-details">
                            <li>Date debut:
                                <strong><?PHP echo $uss['date']; ?>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><?PHP echo $uss['datef']; ?>
                                </strong>
                            </li>
                            <li>Article:
                                <strong><?PHP echo $uss['categorie']; ?>
                                </strong>
                            </li>
                        </ul>
                        <br> <p>Type de l'article : <?PHP echo $us['type']; ?> </p>
                        </TD>
                        <TD>
                        <p><?PHP echo $us['description']; ?>
                        
                        
                        </p>
                        </TD>
                        </TR>
</TABLE>

                         
                        <a href="article.php"><button  class="btn btn1" >
                            Close
                        </button></a>
						
					</td>
							
                        </button>
                    </div>
                </div>
                
            </div>
            <?PHP
}					
			?>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                    <?PHP
				foreach($listerrr as $u){
					
			?>
                    
                        <h2>Nom <td><?PHP echo $u['nom']; ?></td></h2>
                        <TABLE style="width:100%" >
<TR>    
<TD> 
                        <hr class="star-primary">
                        <img src="images/<?= $u['image'] ?>" class="img-responsive img-centered" alt="">

                        
                        
                     
                       
                        <ul class="list-inline item-details">
                            <li>Date debut:
                                <strong><?PHP echo $u['date']; ?>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><?PHP echo $u['datef']; ?>
                                </strong>
                            </li>
                            <li>Article:
                                <strong><?PHP echo $u['categorie']; ?>
                                </strong>
                            </li>
                        </ul>
                        <br> <p>Type de l'article : <?PHP echo $u['type']; ?> </p>
                        </TD>
                        <TD>
                        <p><?PHP echo $u['description']; ?>
                        </p>
                        </TD>
                        </TR>
</TABLE>
<a href="article.php"><button  class="btn btn1" >
                            Close
                        </button></a>
                    </div>
                </div>
                
            </div>
            <?PHP
}					
			?>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

			
			<div class="col">
				
				
				 
				<style>
			     .contenir {
				    text-align: center;
                    margin-top: 100px;
			                }
		        </style>
				<div class="contenir">
				<a href="email.php"><button class="btn btn1">Inviter un lecteur via Email</button></a>
			
                <div class="fb-share-button" data-href="http://localhost/momo/front/article.php" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fmomo%2Ffront%2Farticle.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
				</div>
				
			</div>
			
			
	


<div>
<br>
<br>
<br>
<br>
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0" nonce="UHn7HYNY"></script>
<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Poopet/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 11:16:01 GMT -->
</html>


  