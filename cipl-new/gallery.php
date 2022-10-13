<?php include_once("connect.php");?>
<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Corporate Infotech Pvt. Ltd. (CIPL) </title>
      <meta name="viewport" content="width=device-width">
      <!-- Include All CSS here-->
      <link rel="stylesheet" href="css/bootstrap.css"/>
      <link rel="stylesheet" href="css/owl.carousel.css"/>
      <link rel="stylesheet" href="css/owl.theme.css"/>
      <link rel="stylesheet" href="css/animate.css"/>
      <link rel="stylesheet" href="css/lightcase.css"/>
      <link rel="stylesheet" href="css/font-awesome.min.css"/>
      <link rel="stylesheet" href="css/line-awesome.css"/>
      <link rel="stylesheet" href="css/nounicon.css"/>
      <!-- Revolution Slider Setting CSS -->
      <link rel="stylesheet" href="css/settings.css"/>
      <link rel="stylesheet" href="css/preset.css"/>
      <link rel="stylesheet" href="css/theme.css"/>
      <link rel="stylesheet" href="css/responsive.css"/>
      <!-- End Include All CSS -->
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="images/favi.png">
      <!-- Favicon Icon -->
   </head>
   <body>
      <!-- Preloader Start -->
      <div class="preloader">
         <div class="preloader-inner">
            <div class="loader-logo"><img src="images/preloder.gif" width="100px" alt="CIPL"></div>
         </div>
      </div>
      <?php include("header.php"); ?>
      <section class="page_banner_gallery"></section>
      <section class="blog_section">
         <div class="container">		 		 
            <div class="row">
               <div class="col-lg-6 offset-lg-3 text-center noPadding">
                  <h5 class="text-uppercase sec_sub_title">ENENTS & INSIGHTS</h5>
                  <h2 class="sec_title">
                     Life at CIPL - Work, Fun, Celebration and much more.
                  </h2>
               </div>
            </div>						
			<?php 							
			$query = $conn->prepare("Select category.*, files.name from category left join files on category.image = files.title where category.status = 1 and category.image = files.title");	
			$query->execute();		
			if($query->rowCount() > 0){	
				$fs = "<div class='row'>";			
				$row = $query->fetchAll(PDO::FETCH_ASSOC);	
				foreach($row as $data){						
						$fs .= "<div class='col-lg-3 col-md-6'>	
						<div class='singleblog'>		
						<img src='admin/php/files/".$data["name"]."' alt=''/>	
						<h3><a href='gallery-subcategory.php?id=".$data["id"]."'>".$data["category_name"]."</a></h3>	
						</div>								</div>";	
				}			
				$fs .= "</div>";	
				echo $fs;				
			}						
		?>
            <!---<div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="singleblog">
                     <img src="images/e-1.jpg" alt=""/>
                     <h3><a href="#">The Annual Kick Off</a></h3>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="singleblog">
                     <img src="images/e-2.jpg" alt=""/>
                     <h3><a href="#">New Year Party</a></h3>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="singleblog">
                     <img src="images/e-3.jpg" alt=""/>
                     <h3><a href="#">Sales Meet (Ranneeti)</a></h3>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="singleblog">
                     <img src="images/e-3.jpg" alt=""/>
                     <h3><a href="#">Sales Meet (Ranneeti)</a></h3>
                  </div>
               </div>
            </div>--->
         </div>
      </section>
      <?php include("inquiry.php"); ?>
      <?php include("footer.php"); ?>
      <!-- Back To Top Button -->
      <a href="javascript:void(0)" id="backtotop"><i class="la la-arrow-up"></i></a>
      <!-- Back To Top Button -->
      <!-- Include All JS -->
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.js"></script>
      <script src="js/jquery.appear.js"></script>
      <script src="js/jquery.shuffle.min.js"></script>
      <script src="js/lightcase.js"></script>
      <script src="js/gmaps.js"></script>
      <script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>
      <!-- Slider Revolution Main Files -->
      <script src="js/jquery.themepunch.tools.min.js"></script>
      <script src="js/jquery.themepunch.revolution.min.js"></script>
      <!-- Slider Revolution Extension -->  
      <script src="js/extensions/revolution.extension.actions.min.js"></script>
      <script src="js/extensions/revolution.extension.carousel.min.js"></script>
      <script src="js/extensions/revolution.extension.kenburn.min.js"></script>
      <script src="js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script src="js/extensions/revolution.extension.migration.min.js"></script>
      <script src="js/extensions/revolution.extension.navigation.min.js"></script>
      <script src="js/extensions/revolution.extension.parallax.min.js"></script>
      <script src="js/extensions/revolution.extension.slideanims.min.js"></script>
      <script src="js/extensions/revolution.extension.video.min.js"></script>
      <script src="js/theme.js"></script>
      <!-- Include All JS -->
   </body>
</html>