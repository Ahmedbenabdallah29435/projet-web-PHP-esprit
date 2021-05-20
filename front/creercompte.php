<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include "config.php"; 
	include "controller/UtilisateurC.php";
	
	
	  
	#$sql="select * from Utilisateur where (email='$email' );";
	//$res=mysqli_query($mysqli,$sql);
//	if (mysqli_num_rows($res) > 0) { 
	//  $row = mysqli_fetch_assoc($res);
	 // if($email==isset($row['email']))
	//  {
			//  echo "email already exists";
	 // }




	$userC = new UtilisateurC();
   $error = "";
   if (
    isset($_POST['nom'])
    && isset($_POST['prenom'])
    && isset($_POST['date_de_naissance'])
    && isset($_POST['email'])
    && isset($_POST['role'])
    && isset($_POST['telephone'])
    && isset($_POST['login'])
    && isset($_POST['password'])
    && isset($_POST['adresse'])
  ) {
      if(!empty($_POST['nom'])
      &&!empty($_POST['prenom'])
      &&!empty($_POST['date_de_naissance'])
      &&!empty($_POST['email'])
      &&!empty($_POST['role'])
      &&!empty($_POST['telephone'])
      &&!empty($_POST['login'])
      &&!empty($_POST['password'])
      &&!empty($_POST['adresse'])
      )
	  
      {
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $date=$_POST["date_de_naissance"];
        $email=$_POST["email"];
        $role=$_POST["role"];
        $telephone=$_POST["telephone"];
        $login=$_POST["login"];
        $password=$_POST["password"];
        $adresse=$_POST["adresse"];
        $userC->ajouterUtilisateur($nom,$prenom,$date,$email,$role,$telephone,$login,$password,$adresse);
        header('location:Index.php');
      }else{
        $error="Missing information";
      }
    }
#}
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
                   
                    <li><a href="profile.php"><i class="fa fa-user">      <span class="profile-name"><?PHP echo $user; ?></i></a>
								
								    <a href="deconnexion.php"> <?PHP echo $message; ?> </a>
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
    <section id="form"><!--form-->
	
    <div class="container"> 
	
	<body style="overflow:hidden">
<div class="col-5" style="margin-left:10%;height:100%;margin-top:3%">
    <div class="card" style=" height:87%">
      <div class="card-body">
        <h2 class="card-title">Créer un compte</h2>
        <h5 style="color:red"></h5>
		<?php echo $error?>
        <form class="forms-sample" action="" method="POST" style="height:100%">
          <div style="height:85%;overflow-y:scroll">
            <div class="form-group">
              <label for="exampleInputName1">Nom</label>
              <input type="text" class="form-control" placeholder="Nom" name="nom"  required  />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Prenom</label>
              <input type="text" class="form-control" placeholder="Prenom" name="prenom" required />
            </div>
            
            <div class="form-group">
              <label for="exampleSelectGender">Role</label>
              <select class="form-control" name="role">
            
			  <option>Admin</option>
                <option>Client</option>
                
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Date de naissance</label>
              <input type="date" class="form-control"  name="date_de_naissance" value="2018-07-22" min="1950-01-01" max="2021-12-31" required />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Email</label>
              <input type="email"  class="form-control" placeholder="azerty@gmail.com" name="email" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" required />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Numero de telephone</label>
              <input type="text" class="form-control" placeholder="12123123" name="telephone"  pattern="[0-9]{2}[0-9]{3}[0-9]{3}" required />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Login</label>
              <input type="text" class="form-control"  placeholder="Login" name="login"  minlength="4" maxlength="20" required/>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Mot de passe</label>
              <input type="password" class="form-control" placeholder="mot de passe" name="password"  minlength="6" maxlength="20" required />
            </div>


            <div class="form-group">
              <label for="exampleInputCity1">Adresse</label>
              <input type="text" class="form-control"  placeholder="adresse" name="adresse" required />
            </div>
            <div style="margin-top:2%;border-top:1px solid grey">
            </div>
          </div>
          <div style="margin-top:3%">
              <button type="submit" class="btn btn-primary mr-2"> Enregistrer </button>
              <button class="btn btn-light" type="reset">Annuler</button>
          </div>
        </form>
      </div>
    
    </div>
</section><!--/form-->

	
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

