<?php

include_once("connect.php");

?>

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
	  <link rel="stylesheet" type="text/css" href="dist/css/style.css">

      <!-- End Include All CSS -->

      <!-- Favicon Icon -->

      <link rel="icon" type="image/png" href="images/favi.png">

      <!-- Favicon Icon -->
	  <style>
	  
	  .nav-justified {
    width: 100%;
}
@media (min-width: 768px)
.nav-justified>li {
    display: table-cell;
    width: 1%;
}


@media (min-width: 768px)
.nav-justified>li>a {
    margin-bottom: 0;
}
.nav-justified>li>a {
    margin-bottom: 5px;
    text-align: center;
}
.nav-pills>li>a {
    border-radius: 4px;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
	.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #337ab7;
}
#myTabs li a.active{background: #0486c1;
    color: #fff;
}  
.bg-shadws {
    position: relative;
}
.bg-shadws::before {
    position: absolute;
    background: #00000061;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    content: '';
}
.bg-shadws img{margin : 0;}
.sc-date {
    left: 25%;
    position: absolute;
    top: 38%;
    font-size: 20px;
    margin: auto;
    background: #000;
    width: 50%;
    padding: 15px;
    display: flex;
}
.sc-date .date {color: #fff; margin: auto;} 
	  </style>
	  

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
				  <h2 class="sec_title"><?php echo $_GET['id'];?></h2>

               </div>

            </div>
			
			<div class="row">
				
					<?php
						$id = $_GET['id']; 
						/*$query = $conn->prepare("Select * from subcategory where cat_id =".$id." and status =1");
						$query->execute();
						if($query->rowCount() > 0){
							$row = $query->fetchAll(PDO::FETCH_ASSOC);
							$fs = '<ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">';
							$ms = '<div class="tab-content">';
							foreach($row as $data){
								$fs .= '<li><a href="#'.$data["subcategory_name"].'" data-toggle="tab">'.$data["subcategory_name"].'</a></li>'; */
								
								$we = $conn->prepare("Select gallery.*, subcategory.*, (select min(name) from files where status=1 and gallery.images = files.title) as images_name from gallery left join subcategory on subcategory.id = gallery.subcat_id  where subcategory.subcategory_name = '".$id. "' group by gallery.title");
								$we->execute(); //print_r($we); //print_r($we->rowCount());
								if($we->rowCount() > 0){
									$rw = $we->fetchAll(PDO::FETCH_ASSOC);
									$fd = '';
									foreach($rw as $dsa){
										//print_r($dsa);
										if($dsa['title'] == ""){
											
											$fd .= '<div class="col-md-4">
													<a href="gallery-detail.php?id='.$dsa["title"].'">
													<div class="singleblog bg-shadws">
														<img src="admin/php/files/'.$dsa["images_name"].'" alt="">
													</div>
													</a>
												</div>';
										}
										else{ //'.$data["id"].'
										$fd .= '<div class="col-md-4">
													<a href="gallery-detail.php?id='.$dsa["title"].'"><div class="singleblog bg-shadws">
														<img src="admin/php/files/'.$dsa["images_name"].'" alt="">
														<div class="sc-date"><p class="date">'.$dsa["title"].'</p></div>
													</div></a>
												</div>';
										}
									}
									echo $fd;
								}
								else{
									echo "No data found";
								}
								
								/*$fd .= '</div>';
								//print_r($fd);
								
								$ms .= '<div role="tabpanel" class="tab-pane fade" id="'.$data["subcategory_name"].'">'.$fd.'</div>';
							}
							$ms .= '</div>';
							$fs .= '</ul>'.$ms;
							echo $fs;
						}
						else{
							echo "No subcategory found";
						}*/
					?>
					
					<!---<ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
						<li><a href="#Commentary" data-toggle="tab" class="active">Commentary</a></li>
						<li><a href="#Videos" data-toggle="tab">Videos</a></li>
						<li><a href="#Events" data-toggle="tab">Events</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active show" id="Commentary">Commentary WP_Query goes here.</div>
						<div role="tabpanel" class="tab-pane fade" id="Videos">Videos WP_Query goes here.</div>
						<div role="tabpanel" class="tab-pane fade" id="Events">Events WP_Query goes here.</div>
					</div>--->
				
			</div>
			
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
	  
	  <script>
	  					
						$(document).on("click", "#myTabs li a", function(){
							var sd = $(this).attr("href").replace("#" ,""); 
							$(".tab-pane").removeClass("active show");
							$('.tab-pane[id*="'+sd+'"]').addClass("active show");
							/*console.log(match);
							  if($match.length){
								$(".tab-pane").removeClass('active show');
								$(".tab-pane").addClass('active show');
								return false; 
							  }*/
						
						})
						
					</script>

      <!-- Include All JS -->

   </body>

</html>