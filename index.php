<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/slideshow.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Shyamoly</title>
</head>
<body>
<div class="container">
	<div class="row first-section">

		<div class="col-md-1 col-xs-3 col-sm-3">
			<img src="img/b.png" class="img-responsive img-circle img-thumbnail">
		</div>
		<div class="col-md-1 col-xs-3 col-sm-3">
		<img src="img/b.png" class="img-responsive img-circle img-thumbnail">
			
		</div>
		<div class="col-md-1 col-xs-3 col-sm-3">
		<img src="img/c.png" class="img-responsive img-circle img-thumbnail">
			
		</div>
		<div class="col-md-1 col-xs-3 col-sm-3">
			<img src="img/d.png" class="img-responsive img-circle img-thumbnail">
		</div>
		<div class="col-md-1">
			<img src="img/e.png" class="img-responsive img-circle img-thumbnail">
		</div>
		<div class="col-md-1 col-xs-3 col-sm-3">
			<img src="img/f.png" class="img-responsive img-circle img-thumbnail">
		</div>
		<div class="col-md-1 col-xs-3 col-sm-3">
		<img src="img/r.png" class="img-responsive img-circle img-thumbnail">
		</div>
		<div class="col-md-1 col-xs-3 col-sm-3">
		<img src="img/a.png" class="img-responsive img-circle img-thumbnail">
		</div>
		<div class="col-md-4 col-xs-3 col-sm-3">
			<form action="" method="" enctype="">
				<div class="input-group">
					<input type="text" name="" class="form-control" placeholder="search">
		
					<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
				</div>
			</form>
		</div>
	</div> 
	<div class="row header-part">
	<div class="col-md-1 col-xs-1">
			<img src="img/q.jpg" class="himg" style="width:100px;height:100px;">
		</div>
		<div class="col-md-11 col-xs-11 right-part">
			<h1 class="text-center hidden-xs">SHYAMOLI IDEAL POLYTECHNIC INSTITUTE</h1>
			<h4 class="text-center visible-xs">SHYAMOLI IDEAL POLYTECHNIC INSTITUTE</h4>
		</div>
	</div> <!-- End of header-part -->
	<div class="row navigation">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs" href="#">Navigation</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#" class="mylink"><i class="fa fa-home"></i>&nbsp; Home</a></li>					
						<li><a href="#" class="mylink"><i class="fa fa-th-large"></i>&nbsp; Facilities</a></li>
						<li><a href="#" class="mylink"><i class="fa fa-graduation-cap"></i>&nbsp; Educaton</a></li>
						<li><a href="#" class="mylink"><i class="fa fa-film"></i>&nbsp; Gallary</a></li>
						<li><a href="#" class="mylink"><i class="fa fa-phone"></i>&nbsp;  Contact us </a></li>
						<li><a href="#" class="mylink"><i class="fa fa-sign-in"></i>&nbsp; Sin-up </a></li>
						<?php if(!empty($_SESSION['auth'])) { ?> 
							<li><a href="login.php" class="mylink"><i class="fa fa-sign-in"></i>&nbsp; Login </a></li>
						<?php } else { ?> 
							<li><a href="admin/index.php" class="mylink"><i class="fa fa-user"></i>&nbsp; Admin </a></li>
						<?php } ?>
					</ul>					
					
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</div><!-- End of navigation -->
	<div class="row main-container">
		<div class="col-md-2 left-sidebar" style="min-height: 700px;">
			<h4>Departments</h4>
			<ul class="imp-link">
				<li><a href="department.php">Computer</a></li>
				<li><a href="">Civil</a></li>
				<li><a href="">Electrical</a></li>
				<li><a href="">Mechanical</a></li>
				<li><a href="">Garments Design</a></li>
				<li><a href="">Electronics</a></li>
				<li><a href="">Textile</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			<div id="slider">
				<div class="cycle-slideshow" data-cycle-caption="#alt-caption" data-cycle-caption-template="{{alt}}" data-cycle-swipe="true" data-cycle-fx="TileSlide" data-cycle-timeout=2000>		
				    <img src="img/l.jpg" alt="this is picture">
				    <img src="img/p.png" alt="">
				    <img src="img/04.jpg" alt="">
				    
					<span class="cycle-prev" id="prev">Prev</span>
					<span class="cycle-next" id="next">Next</span>

					<!-- <p id="alt-caption">
						
					</p> -->
				</div>
			</div> <!-- End of slider -->
			<div class="post">
				<h2 class="h2">Shyamoli Polytechnic Institute</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-2 right-sidebar">
			<div class="panel-group" id="accordion1" style="margin:0; padding:0;background: white;">
			    

			    <div class="panel panel-default" style="padding: 0;margin:0;background: white;">
			        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4" data-target="#asa3" style="background: #CD5C5C;">
			             <h4 class="panel-title" style="color:white;text-shadow: none;">                 
			               <a data-toggle="collapse" data-parent="#accordion" href="#collapse"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp; Notice
			              	</a>
			            </h4>
			        </div>
			        <div id="asa3" class="panel-collapse collapse">
			            <div class="panel-body" style="padding-bottom: 0px;margin-bottom: 0px;">
			            	<ul class="list-group">
			            		<a href="#" class="list-group-item">title one</a>								
			            	</ul>	
			            </div> <!-- End of panel-body -->
			        </div> <!-- End of panel-collapse -->
			    </div>	<!-- End of panel-default -->
			     <div class="panel panel-default" style="padding: 0;margin:0;background: white;">
			        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4" data-target="#collapseOne3" style="background: #CD5C5C;">
			             <h4 class="panel-title" style="color:white;text-shadow: none;">                 
			               <a data-toggle="collapse" data-parent="#accordion" href="#collapse"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp; Syllabus
			              	</a>
			            </h4>
			        </div>
			        <div id="collapseOne3" class="panel-collapse collapse">
			            <div class="panel-body" style="padding-bottom: 0px;margin-bottom: 0px;">
			            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            	tempor in</p>
			            </div> <!-- End of panel-body -->
			        </div> <!-- End of panel-collapse -->
			    </div>	<!-- End of panel-default -->
			    <div class="panel panel-default" style="padding: 0;margin:0;background: white;">
			        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4" data-target="#collapseOne4" style="background: #CD5C5C;">
			             <h4 class="panel-title" style="color:white;text-shadow: none;">                 
			               <a data-toggle="collapse" data-parent="#accordion" href="#collapse"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp; Routine
			              	</a>
			            </h4>
			        </div>
			        <div id="collapseOne4" class="panel-collapse collapse">
			            <div class="panel-body" style="padding-bottom: 0px;margin-bottom: 0px;">
			            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            	tempor in</p>
			            </div> <!-- End of panel-body -->
			        </div> <!-- End of panel-collapse -->
			    </div>	<!-- End of panel-default -->	
			 
			</div> <!-- End of accordion1 -->
		</div>
	</div>
	</div> 
	
	<div class="container-fluid footer" style="margin-top: 20px;">
	    <div class="row">
	        <div class="main-footer group">
	            <div class="col-md-10 col-md-offset-1 footer-content">
	                <div class="col-md-5 col-xs-4">
	                    <h2 class="footer-title">About Us</h2>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci animi autem fugiat harum laboriosam laudantium quis quos recusandae! Accusantium ducimus labore laboriosam odio quibusdam sed similique temporibus veniam voluptas!</p>
	                </div>
	                <div class="col-md-2 col-xs-2 col-md-offset-1">
	                    <h2 class="footer-title">company</h2>
	                    <ul>
	                        <li><a href="#">Our stores</a></li>
	                        <li><a href="#">Contact us</a></li>
	                        <li><a href="#">Sitemap</a></li>
	                        <li><a href="#">Suppliers</a></li>

	                    </ul>
	                </div>
	                <div class="col-md-2 col-xs-2">
	                    <h2 class="footer-title">information</h2>
	                    <ul>
	                        <li><a href="#">Information</a></li>
	                        <li><a href="#">About us</a></li>
	                        <li><a href="#">Secure payment</a></li>
	                        <li><a href="#">Terms and conditions</a></li>

	                    </ul>
	                </div><div class="col-md-2 col-xs-2">
	                    <h2 class="footer-title">Services</h2>
	                    <ul>
	                        <li><a href="#">Web Design</a></li>
	                        <li><a href="#">Development</a></li>
	                        <li><a href="#">Graphic design</a></li>
	                        <li><a href="#">Illustration</a></li>

	                    </ul>
	                </div>
	                <div class="clearfix"></div>

	            </div>
	        </div> <!-- End of main-footer -->
	        <div class="col-md-7 footer-list col-md-offset-1">
	            <ul>
	                <li><a href="">home</a></li>
	                <li><a href="">blog</a></li>
	                <li><a href="">manufactures</a></li>
	                <li><a href="">new projects</a></li>
	                <li><a href="">top sellers</a></li>
	                <li><a href="">specials</a></li>
	            </ul>
	        </div>
	        <div class="col-md-3">
	            <p class="copy text-right">Copyright &copy; <?php echo gmdate("Y"); ?> - <span class="coloring">shyamoli</span> All Rights Reserved</p>
	            <a href="http://www.zstechbd.com"><p class="copy text-right">Developed by <span class="coloring">ASAD</span>	</p></a>
	        </div>
	    </div>
	</div> <!-- End of footer -->
</div> 








<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.cycle2.min.js"></script>
<script src="js/jquery.cycle2.swipe.min.js"></script>
<script>
	$('.mylink').css({
		'color': 'white',
		'fontSize' : '16px'
	});
</script>
</body>
</html>