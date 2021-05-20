<?PHP
	include "../controller/UtilisateurC.php";
	require_once ("composant/composant.php");

	$utilisateurC=new UtilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();

	$list=$utilisateurC->afficherpromoanimaux();

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Buttons :: w3layouts</title>
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
<!-- jQuery -->
<script src="js11/jquery-2.1.4.min.js11"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css1/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 

<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.html">Pooled</a></h1>
							</div>
					<div class="w3layouts-left">
							
							<!--search-box-->
								<div class="w3-search-box">
									<form action="#" method="post">
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="w3layouts-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images1/in11.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images1/in10.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images1/in9.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images1/in8.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images1/in6.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images1/in7.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
									<div class="clearfix"> </div>
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							
							<div class="clearfix"> </div>				
						</div>
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images1/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Ahmed</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>UI Components <i class="fa fa-angle-right"></i>Button</li>
            </ol>
<div class="agile3-grids">	
				<!-- buttons -->
				
				<!-- Color-variations -->
				<div class="panel1 variations-panel">
					<div class="panel-body mtn">
						<div class="col-adjust-10">


		<ul class="nav menu">
		<li ><a href="ajouterarticle.php"><em class="fa fa-plus-square">&nbsp;</em>Ajouter Article</a></li>
			<li><a href="article.php"><em class="fa fa-files-o">&nbsp;</em> Afficher Article</a></li>
			<li><a href="promoanimaux.php"><em class="fa fa-paw">&nbsp;</em> Promotions animaux</a></li>	
			<li><a href="promoplantes.php"><em  class="fa fa-envira" aria-hidden="true">&nbsp;</em> Promotions Plantes</a></li>

		
			
		</div><!--/.row-->
		<div class="container">
        <div class="row">
            <div class="col-md-12"></div>
        </div>
    </div>
    <div class="container"> 
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div class="container text-center">
             <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="d-flex justify-content-center">
        	<br> <div class="col-md-5"></div>
            

                
            </form>

        </div>
  <br>
         <!-- Bootstrap table  -->
         <div >
            <table class="table table-striped table-dark">
               
               <tr>
               <h2>Liste Des Animaux </h2>
               </tr>
                    <tr >
                        <td><b>ID animaux </b> </td>
						<td><b>Sex</b> </td>
                        <td><b>type</b></td>
                        <td><b>age</b></td>
						<td><b>Prix</b></td>
						<td><b>Categorie</b></td>
                        <td><b>Couleur</b></td>
						<td><b>image</b></td>
                        <td><b>Ajouter Promotions</b></td>
						

						
                    </tr>
                
                
				<?PHP
				foreach($listeUsers as $user){
			?>
           
				<tr>
					<td><?PHP echo $user['id_animaux']; ?></td>
					<td><?PHP echo $user['sex']; ?></td>
					<td><?PHP echo $user['typee']; ?></td>
					<td><?PHP echo $user['age']; ?></td>
					<td><?PHP echo $user['prix']; ?></td>
					<td><?PHP echo $user['categorie']; ?></td>
                 	<td><?PHP echo $user['couleur']; ?></td>
					<td><img src="images/<?= $user['image'] ?>" width = "50" height = "50"></td>


					
					<td>
						<a href="ajouterpromotions.php?id_animaux=<?PHP echo $user['id_animaux']; ?>"> <img src="https://img.icons8.com/fluent/48/000000/add-property.png"/> </a>
						
					</td>
					
				</tr>
			<?PHP
				}
			?>


              
            </table>
            
        </div>
        <div >
            <table class="table table-striped table-dark">
               
               <tr>
               <h2>Liste Des Animaux avec Promotions</h2>
               </tr>
                    <tr >
					   
					   <td><b>ID Promotions </b> </td>
                        <td><b>ID animaux </b> </td>
						<td><b>Sex</b> </td>
            			<td><b>type</b></td>
                    	<td><b>age</b></td>
						<td><b>Prix</b></td>
						<td><b>Categorie</b></td>
                    	<td><b>Couleur</b></td>
						<td><b>image</b></td>
						<td><b>date debut promotions</b></td>
						<td><b>date fin promotions</b></td>
						<td><b>Solde</b></td>
                       <td><b>Prix apres Reduction</b></td>
						<td><b>Modifier</b></td>
						<td><b>Supprimer</b></td>
                    </tr>
                
                
				<?PHP
				foreach($list as $usr){
					$prix = $usr['prix'];
					$prixr= $usr['prix_promotions'];
					$p= $prix *$prixr* 0.01;
					$pe = $prix - $p;
			?>
           
				<tr>
                    <td><?PHP echo $usr['id_promoanimaux']; ?></td>
					<td><?PHP echo $usr['id_animaux']; ?></td>
					<td><?PHP echo $usr['sex']; ?></td>
					<td><?PHP echo $usr['typee']; ?></td>
					<td><?PHP echo $usr['age']; ?></td>
					<td><?PHP echo $usr['prix']; ?></td>
					<td><?PHP echo $usr['categorie']; ?></td>
                    <td><?PHP echo $usr['couleur']; ?></td>
					<td><img src="images/<?= $usr['image'] ?>" width = "50" height = "50"></td>
					<td><?PHP echo $usr['dated']; ?></td>
                    <td><?PHP echo $usr['datef']; ?></td>
					<td><?PHP echo $usr['prix_promotions']; ?>%</td>
					<td><?PHP echo $pe ?></td>

					<td>
						<a href="modifierpromoanimaux.php?id_promoanimaux=<?PHP echo $usr['id_promoanimaux']; ?>"> <img src="https://img.icons8.com/fluent/48/000000/edit-file.png"/> </a>
						
					</td>
					<td>
						<form method="POST" action="supprimerpromotions.php">
						<button type="submit" style="background-color:transparent; border-color:transparent;"> 
						<img src="https://img.icons8.com/color/48/000000/delete-forever.png"/>
                         </button>	
						<input type="hidden" value=<?PHP echo $usr['id_promoanimaux']; ?> name="id_promoanimaux">
						</form>
					</td>	
				</tr>
			<?PHP
				}
			?>

              
            </table>
            
        </div>

        <form method="POST" action="recherche2.php">
	<select  placeholder="sujet" name="choix" id="choix" >
              <option>Select</option>
			  <option>categorie</option>
              <option>sex</option>
              </select>
    <input type="text"  name="Search" name="Search"  placeholder="Search" >
	
     <input type="submit" class="btn btn-outline-primary" onclick="return verif3();"></i>
      </form>	

    </div>
            </div>
        </div>
    </div>
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
	</div>
<!--inner block end here-->
<!--copy rights start here-->

</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
										
										 <li id="menu-academico" ><a href="inbox.html"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span><div class="clearfix"></div></a></li>
									<li><a href="gallery.html"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span><div class="clearfix"></div></a></li>
									<li id="menu-academico" ><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span><div class="clearfix"></div></a></li>
									 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Short Codes</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="icons.html">Icons</a></li>
											<li id="menu-academico-avaliacoes" ><a href="typography.html">Typography</a></li>
											<li id="menu-academico-avaliacoes" ><a href="faq.html">Faq</a></li>
										  </ul>
										</li>
										<li id="menu-academico" ><a href="errorpage.html"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Error Page</span><div class="clearfix"></div></a></li>
									  <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span> Gestion Articles et Promos</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="ajouterarticle.php">Ajouter Article</a></li>
											<li id="menu-academico-avaliacoes" ><a href="article.php">Afficher Article</a></li>
											<li id="menu-academico-avaliacoes" ><a href="promoanimaux.php">Promotions animaux</a></li>
											<li id="menu-academico-avaliacoes" ><a href="promoplantes.php">Promotions Plantes</a></li>
										  </ul>
										</li>
									 <li><a href="tables.php"><i class="fa fa-table"></i>  <span>Gestion Evenment et Lieu</span><div class="clearfix"></div></a></li>
									 <li><a href="tabels.php"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Gestion Animaux-Accessoire</span><div class="clearfix"></div></a></li>
							        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-boletim" ><a href="calendar.html">Calendar</a></li>
											<li id="menu-academico-avaliacoes" ><a href="signin.html">Sign In</a></li>
											<li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>
											

										  </ul>
									 </li>
									<li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									  <ul>
										<li><a href="input.html"> Input</a></li>
										<li><a href="validation.html">Validation</a></li>
									</ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
							$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js1/jquery.nicescroll.js"></script>
<script src="js1/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js1/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>

