<?php  
 include_once '../Model/Plante.php';
include_once '../Controller/PlanteC.php';
include '../header.php';
?>
<?php
      $plantes=NULL;
      $PlanteC=new PlantesC() ;
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
              $PlanteC->addplantes($plantes);   
              
               }
    
      }
	  ?>
      <?php 
 include_once '../../Model/accessoires.php';
 include_once '../../Controller/accessoiresC.php';

?>
<?php
      $plantes=NULL;
      $accessoiresC=new accessoiresC() ;
      $error= array();
      if (
          isset($_POST['categories'])&&
          isset($_POST['matiere'])&&
          isset($_POST['prix'])&&
          isset($_POST['image'])
 
         )
       {

          if (empty($error))
           {
              $plantes = new accessoires(

                  $_POST['categories'],
                  $_POST['matiere'],
                  $_POST['prix'],
                  $_POST['image']
              );
              $accessoiresC->addplantes($plantes);   
              
               }
    
      }
	  ?>



<!DOCTYPE HTML>
<html>
<head>

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
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css1/table-style.css" />
<link rel="stylesheet" type="text/css" href="css1/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css1?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css1?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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
											   <div class="user_img"><img src="images/in11.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/in10.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/in9.jpg" alt=""></div>
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
												<div class="user_img"><img src="images/in8.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/in6.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/in7.jpg" alt=""></div>
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
												<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Malorum</p>
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Tabels</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Gestion accessoires</h2>
					  <table id="table-force-off">
					<thead>
					  <tr>
						<th>categories</th>
						<th>matiere</th>
						<th>Prix</th>
						<th>Image</th>
						<th>      </th>
						
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><select name="type" id="type" class="form-control"  >
					     <option value="select">Selectionnez nom du plante &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option>plante ail des ours </option>
						 <option>plante paquerette </option> 
						 <option>plante plantain-laneole</option>
                         <option>plante sureau-noir</option>
                         <option>plante verte</option>
                         <option>plante viollettes</option>
                         <option>plante vivace fleur</option>
                         <option>plante 1</option>
                         <option>plante 2</option>
                         <option>plante 3</option>
                         <option>plante 4</option>
						</select></td>
						<td><select name="longeur" id="longeur" class="form-control"  >
					     <option value="select">Selectionnez la longueur de plante &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option>0.5 M </option>
						 <option>1 M </option> 
						 <option>1.5 M</option>
                         <option>2 M</option>
                         <option>2.5 M</option>
                         <option>3 M</option>
                         <option>3.5 M</option>
                         <option>4 M</option>
                         <option>4.5 M</option>
                         <option>5 M</option>
						</select></td>
						<td><input name="prix" type="text" Min="1"  class="form-control" placeholder="Tapez le prix" required></td>
						<td><select name="type" id="type" class="form-control"  >
					     <option value="select">Selectionnez type de plante &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option>Coreopsis </option>
						 <option>Herbes </option> 
						 <option>Forgéres</option>
                         <option>garras</option>
                         <option>graminés</option>
						</select></td>
						<th>      </th>
					  </tr>
					  <tr>
						<td>       </td>
						<td><select name="matiere" id="matiere" class="form-control"  >
					     <option value="select">Selectionnez la matiere plantes </option>
						 <option>  greffage plante </option>
                         <option>  etagere plante </option>
                         <option>  cache bois plante  </option>
						</select></td>
						<td>     </td>
						<td>     </td>
						<th>
                           <a href = "widgetsacc.php"> afficher </a>
                           </th>
						
					  </tr>
					
					</tbody>
				  </table>
					</div>
					</div>

					<div class="w3l-table-info">
					<h2>Gestion plante</h2>

				 
				  <table id="table-force-off">
					<thead>
					  <tr>
						<th>nom</th>
						<th>longeur</th>
						<th>Prix</th>
						<th>type</th>
						<th>    image  </th>
                        <th>      </th>
						
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><select name="type" id="type" class="form-control"  >
					     <option value="select">Selectionnez nom du plante &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option>plante ail des ours </option>
						 <option>plante paquerette </option> 
						 <option>plante plantain-laneole</option>
                         <option>plante sureau-noir</option>
                         <option>plante verte</option>
                         <option>plante viollettes</option>
                         <option>plante vivace fleur</option>
                         <option>plante 1</option>
                         <option>plante 2</option>
                         <option>plante 3</option>
                         <option>plante 4</option>
						</select></td>
						<td><select name="longeur" id="longeur" class="form-control"  >
					     <option value="select">Selectionnez la longueur de plante &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option>0.5 M </option>
						 <option>1 M </option> 
						 <option>1.5 M</option>
                         <option>2 M</option>
                         <option>2.5 M</option>
                         <option>3 M</option>
                         <option>3.5 M</option>
                         <option>4 M</option>
                         <option>4.5 M</option>
                         <option>5 M</option>
						</select></td>
						<td><input name="prix" type="text" Min="1"  class="form-control" placeholder="Tapez le prix" required></td>
						<td><select name="type" id="type" class="form-control"  >
					     <option value="select">Selectionnez type de plante &emsp;&emsp;&emsp;&emsp;&emsp;</option>
						 <option>Coreopsis </option>
						 <option>Herbes </option> 
						 <option>Forgéres</option>
                         <option>garras</option>
                         <option>graminés</option>
						</select></td>
                        <td><input type="file" class="form-control" id="img" name="image"></td>
						
					  </tr>
					 
					
						<th>
                           <a href = "widgets.php"> afficher </a>
                           </th>
						
					  </tr>
					
					</tbody>
				  </table>
				  </div>

				  

				  
				</div>
				<!-- //tables -->
			</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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
									  <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span> UI Components</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="button.html">Buttons</a></li>
											<li id="menu-academico-avaliacoes" ><a href="grid.html">Grids</a></li>
										  </ul>
										</li>
									 <li><a href="tabels.html"><i class="fa fa-table"></i>  <span>Tables</span><div class="clearfix"></div></a></li>
									<li><a href="maps.html"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Maps</span><div class="clearfix"></div></a></li>
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
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>