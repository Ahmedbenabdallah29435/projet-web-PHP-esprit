<?PHP




session_start();


	
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


    <!-- main-slider -->
    <section class="main-slider slider-style-two">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <div class="slide" style="background-image:url(images/main-slider/slider-3.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h1>Your Pets Friends are in Good Hands</h1>
                        <div class="text">We offer all the best quality services for your best friends, Call us now and book an appointment</div>
                        <div class="slider-btn"><a href="contact.html" class="theme-btn">Contact with us</a></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/main-slider/slider-4.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h1>Your Pets Friends are in Good Hands</h1>
                        <div class="text">We offer all the best quality services for your best friends, Call us now and book an appointment</div>
                        <div class="slider-btn"><a href="contact.html" class="theme-btn">Contact with us</a></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/main-slider/slider-3.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h1>Your Pets Friends are in Good Hands</h1>
                        <div class="text">We offer all the best quality services for your best friends, Call us now and book an appointment</div>
                        <div class="slider-btn"><a href="contact.html" class="theme-btn">Contact with us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-slider end -->


    <!-- about-style-two -->
    <section class="about-style-two centred">
        <div class="container">
            <div class="inner-content">
                <div class="content-box">
                    <div class="sec-title">
                        <div class="top-title">Few Words About Poopet Company</div>
                        <h1>Pet Grooming & Care Center</h1>
                    </div>
                    <div class="text">
                        <p>There are many variations of passages of available but the majority have suffered alteration in some form, by injected hu randomised words which don look even slightly believable. If you are going to use a passage of you need to be sure there lipsim is simply free text now isn't anything embarr assing hidden in the middle of text.</p>
                    </div>
                </div>
                <div class="image-box">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                            <figure class="image wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/about-1.jpg" alt=""></figure>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                            <figure class="image wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/about-2.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->


    <!-- team-style-two -->
    <section class="team-style-two gray-bg centred">
        <div class="container">
            <div class="sec-title alternate-color">
                <div class="top-title">Pet Care Staff</div>
                <h1>Meet Our Groomers</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="#"><img src="images/resource/team-4.png" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Reena Scot</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="#"><img src="images/resource/team-5.png" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Mike Albert</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="#"><img src="images/resource/team-6.png" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Sarah Eve</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="#"><img src="images/resource/team-7.png" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Reena Scot</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-style-two end -->


    <!-- chooseus-section -->
    <section class="chooseus-section black-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                    <div class="inner-box">
                        <div class="sec-title">
                            <div class="top-title">Why People Choose Us</div>
                            <h1>We’ve 25+ Years of Experiences to Handle your Pets Friends</h1>
                        </div>
                        <div class="link"><a href="#" class="theme-btn">Learn more</a></div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                <div class="chooseus-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="top-content">
                                        <div class="icon-box"><i class="flaticon-staff"></i></div>
                                        <h3><a href="#">Professional<br />Staff</a></h3>
                                    </div>
                                    <div class="text">Lorem ipsum dolor sit a consetetur simple is pscing elitr sed m nonmy eirmod simply free text.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                <div class="chooseus-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="top-content">
                                        <div class="icon-box"><i class="flaticon-shield"></i></div>
                                        <h3><a href="#">Deliver Quality<br />Services</a></h3>
                                    </div>
                                    <div class="text">Lorem ipsum dolor sit a consetetur simple is pscing elitr sed m nonmy eirmod simply free text.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                <div class="chooseus-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="top-content">
                                        <div class="icon-box"><i class="flaticon-veterinary"></i></div>
                                        <h3><a href="#">Best Medical<br />Treatment</a></h3>
                                    </div>
                                    <div class="text">Lorem ipsum dolor sit a consetetur simple is pscing elitr sed m nonmy eirmod simply free text.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                <div class="chooseus-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="top-content">
                                        <div class="icon-box"><i class="flaticon-support"></i></div>
                                        <h3><a href="#">24/7 Smart<br />Support</a></h3>
                                    </div>
                                    <div class="text">Lorem ipsum dolor sit a consetetur simple is pscing elitr sed m nonmy eirmod simply free text.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


    <!-- clients-section -->
    <section class="clients-section">
        <div class="container">
            <div class="clients-outer">
                <ul class="clients-carousel owl-carousel">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-5.png" alt=""></a></figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- clients-section end -->


    <!-- healthcare-section -->
    <section class="healthcare-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <figure class="image"><img src="images/resource/healthcare-1.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="top-content">
                            <div class="sec-title">
                                <div class="top-title">Care for your Pets</div>
                                <h1>Pets Healthcare Tips</h1>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum is simply free text available there are many variations of passages of orem ipsum avail but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="flaticon-cat-1"></i></div>
                                        <h3><a href="#">Feeding a cat to be healthy</a></h3>
                                        <div class="text">There are many variations of passages of orem ipsum avail but the majority have suffered alteration in some form.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="single-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="flaticon-pet"></i></div>
                                        <h3><a href="#">Dogs veterinary diest plans</a></h3>
                                        <div class="text">There are many variations of passages of orem ipsum avail but the majority have suffered alteration in some form.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- healthcare-section end -->


    <!-- pricing-section -->
    <section class="pricing-section centred sec-pad gray-bg"> 
        <div class="container">
            <div class="sec-title alternate-color">
                <div class="top-title">Our Rates</div>
                <h1>Pricing Plans</h1>
            </div>
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-column wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="pricing-table">
                            <div class="table-header">
                                <div class="title">Small Package</div>
                                <div class="price">$20.00<span>/visit</span></div>
                            </div>
                            <div class="table-content">
                                <ul>
                                    <li>Grooming</li>
                                    <li>Cleaning</li>
                                    <li>Plucking</li>
                                    <li>Triming</li>
                                    <li>Styling</li>
                                    <li>Bath</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="theme-btn">Enquire now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-column wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="pricing-table">
                            <div class="table-header">
                                <div class="title">Medium Package</div>
                                <div class="price">$30.00<span>/visit</span></div>
                            </div>
                            <div class="table-content">
                                <ul>
                                    <li>Grooming</li>
                                    <li>Cleaning</li>
                                    <li>Plucking</li>
                                    <li>Triming</li>
                                    <li>Styling</li>
                                    <li>Bath</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="theme-btn">Enquire now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-column wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="pricing-table">
                            <div class="table-header">
                                <div class="title">Large Package</div>
                                <div class="price">$40.00<span>/visit</span></div>
                            </div>
                            <div class="table-content">
                                <ul>
                                    <li>Grooming</li>
                                    <li>Cleaning</li>
                                    <li>Plucking</li>
                                    <li>Triming</li>
                                    <li>Styling</li>
                                    <li>Bath</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="theme-btn">Enquire now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->


    <!-- gallery-section -->
    <section class="gallery-section">
        <div class="container-fluid">
            <ul class="gallery-carousel owl-theme owl-carousel">
                <li class="single-gallery-block">
                    <figure class="image-box">
                        <img src="images/gallery/gallery-1.png" alt="">
                        <div class="icon-box"><a href="images/gallery/gallery-1.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </figure>
                </li>
                <li class="single-gallery-block">
                    <figure class="image-box">
                        <img src="images/gallery/gallery-2.png" alt="">
                        <div class="icon-box"><a href="images/gallery/gallery-2.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </figure>
                </li>
                <li class="single-gallery-block">
                    <figure class="image-box">
                        <img src="images/gallery/gallery-3.png" alt="">
                        <div class="icon-box"><a href="images/gallery/gallery-3.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </figure>
                </li>
                <li class="single-gallery-block">
                    <figure class="image-box">
                        <img src="images/gallery/gallery-4.png" alt="">
                        <div class="icon-box"><a href="images/gallery/gallery-4.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </figure>
                </li>
                <li class="single-gallery-block">
                    <figure class="image-box">
                        <img src="images/gallery/gallery-5.png" alt="">
                        <div class="icon-box"><a href="images/gallery/gallery-5.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!-- gallery-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section centred" style="background-image: url(images/background/testimonial-bg.jpg);">
        <div class="container">
            <div class="inner-content">
                <div class="testimonial-carousel owl-theme owl-carousel">
                    <div class="testimonial-content">
                        <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                        <span>- Mark Twain</span>
                    </div>
                    <div class="testimonial-content">
                        <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                        <span>- Mark Twain</span>
                    </div>
                    <div class="testimonial-content">
                        <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                        <span>- Mark Twain</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="container">
            <div class="sec-title centred">
                <div class="top-title">Our Blog & News</div>
                <h1>Latest News & Articles</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="news-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="date">04<br />Mar</div>
                        <figure class="image-box"><a href="blog-single.html"><img src="images/resource/news-1.png" alt=""></a></figure>
                        <div class="lower-content">
                            <ul class="info-box">
                                <li>Mike Hardson</li>
                                <li>3 Comments</li>
                            </ul>
                            <h3><a href="blog-single.html">How to take care of any kind of your pets</a></h3>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="link"><a href="blog-single.html">Read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="news-block-one wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="date">05<br />Mar</div>
                        <figure class="image-box"><a href="blog-single.html"><img src="images/resource/news-2.png" alt=""></a></figure>
                        <div class="lower-content">
                            <ul class="info-box">
                                <li>Mike Hardson</li>
                                <li>2 Comments</li>
                            </ul>
                            <h3><a href="blog-single.html">Shelter and feed animals that are in need</a></h3>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="link"><a href="blog-single.html">Read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="date">06<br />Mar</div>
                        <figure class="image-box"><a href="blog-single.html"><img src="images/resource/news-3.png" alt=""></a></figure>
                        <div class="lower-content">
                            <ul class="info-box">
                                <li>Mike Hardson</li>
                                <li>4 Comments</li>
                            </ul>
                            <h3><a href="blog-single.html">Dog walking helps keep your dog sane</a></h3>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="link"><a href="blog-single.html">Read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="container">
            <div class="google-map-area">
                <div 
                    class="google-map" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="images/icons/map-marker.png"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- cta-section -->
    <section class="cta-section centred">
        <div class="container">
            <div class="inner-box">
                <h1>Poopet is here to Support Every<br />Aspect of your Pet’s Life</h1>
                <div class="text">Looking for proessional groomer or trainer?</div>
                <a href="contact.html" class="theme-btn">Contact with us</a>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- main-footer -->
    <footer class="main-footer gray-bg">
        <div class="footer-top">
            <div class="container">
                <div class="top-content clearfix">
                    <figure class="footer-logo"><a href="index-2.html"><img src="images/footer-logo.png" alt=""></a></figure>
                    <ul class="social-style-one">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
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

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Poopet/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 11:13:42 GMT -->
</html>
