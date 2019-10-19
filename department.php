<?php require_once 'admin/includes/conn.php'; ?>
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
			<img src="img/k.png" class="himg">
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
						<li><a href="index.php" class="mylink"><i class="fa fa-home"></i>&nbsp; Home</a></li>					
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
				<li><a href="">Computer</a></li>
				<li><a href="">Civil</a></li>
				<li><a href="">Electrical</a></li>
				<li><a href="">Mechanical</a></li>
				<li><a href="">Garments Design</a></li>
				<li><a href="">Electronics</a></li>
				<li><a href="">Textile</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			<ul class="nav nav-tabs">
				    <li><a data-toggle="tab" href="#home">1st</a></li>
				    <li><a data-toggle="tab" href="#menu1">2nd</a></li>
				    <li><a data-toggle="tab" href="#menu2">3rd</a></li>
				    <li><a data-toggle="tab" href="#menu3">4th</a></li>
				    <li><a data-toggle="tab" href="#menu4">5th</a></li>
				    <li><a data-toggle="tab" href="#menu5">6th</a></li>
				    <li class="active"><a data-toggle="tab" href="#menu6">7th</a></li>
			 	</ul>

			  <div class="tab-content">

			    	<div id="home" class="tab-pane fade">
			    		
			    	</div><!-- End of home -->
			    	<div id="menu1" class="tab-pane fade">
				      	<h3>কুড়িগ্রাম</h3>
				      	<p>কুড়িগ্রাম সদর (৮), উলিপুর (১৩), রাজারহাট (৭), নাগেশরী (১৪), ফুলবাড়ী (৬), ভুরুঙ্গামারী (১০) এবং রৌমারী (৫)</p>
				    </div><!-- End of menu1 -->
				    <div id="menu2" class="tab-pane fade">
				      	<h3>লালমনিরহাট</h3>
				      	<p>লালমনিরহাট সদর (৯), আদিতমারী (৮), পাটগ্রাম (৮) এবং হাতিবান্ধা (১৩)</p>
				    </div><!-- End of menu2 -->
				    <div id="menu3" class="tab-pane fade">
				      	<h3>গাইবান্ধা</h3>
				      	<p>গাইবান্ধা সদর (১৩), পলাশবাড়ী (৯), গোবিন্দগঞ্জ (১৭), সাঘাটা (৭) এবং ফুলছড়ি (৭)</p>
				    </div><!-- End of menu3 --> 
				   	<div id="menu4" class="tab-pane fade">
				      	<h3>নীলফামারী</h3>
				      	<p>নীলফামারী সদর (১৫), ডোমার (১০), ডিমলা (১০) এবং সৈয়দপুর (৫)</p>
				    </div><!-- End of menu4 --> 
				    <div id="menu5" class="tab-pane fade">
				      	
				    </div><!-- End of menu5 --> 
				    <div id="menu6" class="tab-pane fade in active">
				      	<div class="students">
				      		<?php 
								$query = "select *from students where dep = 'cmt' and sem='7'";
								$result = mysqli_query($conn,$query);
								while($row = mysqli_fetch_assoc($result)) {
							 ?>
				      		<div class="col-md-3 student">
				      			<img src="<?php echo "admin/".$row['file']; ?>" class="img-thumbnail">
				      			<p class="text-center"><a data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>" style="cursor: pointer;" class="btn btn-info"><span class="glyphicon glyphicon-zoom-in"></span>&nbsp; View</a></p>			                    			                   
			                    <div class="modal fade" id="myModal<?php echo $row['id']; ?>" role="dialog">
							    	<div class="modal-dialog">				    
									      <!-- Modal content-->
									      <div class="modal-content">
									        <div class="modal-header bg-primary">
									        	<button type="button" class="close" data-dismiss="modal">&times;</button>													        	
									        </div>
						                    <div class="modal-body">									        										        
									        	<img src="<?php echo "admin/".$row['file']; ?>" class="img-thumbnail">
									        	<br>	<br>
									        	<table class="table table-bordered">
									        		<tr>
									        			<th class="text-center">Name</th>
														<th class="text-center">Mobile</th>
														<th class="text-center">Email</th>
														<th class="text-center">Address</th>
														<th class="text-center">Department</th>
														<th class="text-center">Semester</th>
									        		</tr>
									        		<tr>
									        			<td class="text-center"><?php echo $row['name']; ?></td>
														<td class="text-center"><?php echo $row['mobile']; ?></td>
														<td class="text-center"><?php echo $row['email']; ?></td>
														<td class="text-center"><?php echo $row['address']; ?></td>
														<?php 
															$dep = "";
															if($row['dep'] == "cmt") {
																$dep = "Computer";
															} else if($row['dep'] == "cv") {
																$dep = "Civil";
															} else if($row['dep'] == "et") {
																$dep = "Electrical";
															} else if($row['dep'] == "mc") {
																$dep = "Mechanical";
															} else if($row['dep'] == "gd") {
																$dep = "Garments Design";
															} else if($row['dep'] == "ect") {
																$dep = "Electronics";
															} else if($row['dep'] == "te") {
																$dep = "Textile";
															}
														 ?>
														<td class="text-center"><?php echo $dep; ?></td>
														<?php 
															$last_word = "";
															if($row['sem'] == 1) {
																$last_word = "st";
															} else if($row['sem'] == 2) {
																$last_word = "nd";
															} else if($row['sem'] == 3) {
																$last_word = "rd";
															} else {
																$last_word = "th";
															}
														 ?>
														<td class="text-center"><?php echo $row['sem']."".$last_word; ?></td>
									        		</tr>
									        		
									        	</table>									        											        												       
									        </div> <!-- End of modal-body -->
									        <div class="modal-footer">							        
									        	<button type="button" class="btn btn-default" data-dismiss="modal">close</button>	
									        </div>
							      		</div>						      
						    		</div>
								</div> <!-- End of modal -->
				      		</div>
				      		<?php } ?>
				      		
				      		
				      	</div>
				    </div><!-- End of menu6 --> 
				    

			  </div> <!-- End of tab-content -->
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