<?php 
	include("connect.php");
	if(empty($_SESSION['uid']))

{

  echo '<script type="text/javascript">window.location.href="index.php"</script>';

  exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>Edit Subcategory</title>

    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />  
    <!--[if lt IE 8]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->            
    <link rel='stylesheet' type='text/css' href='css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='js/plugins/jquery/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.2.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/charts/excanvas.min.js'></script>
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='js/plugins/sparklines/jquery.sparkline.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/fullcalendar/fullcalendar.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/select2/select2.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/uniform/uniform.js'></script>
    
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
    <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    
    <script type='text/javascript' src='js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='js/plugins/pnotify/jquery.pnotify.min.js'></script>
    <script type='text/javascript' src='js/plugins/ibutton/jquery.ibutton.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/scrollup/jquery.scrollUp.min.js'></script>
    
    <script type='text/javascript' src='js/cookies.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
    
</head>
<body>
    <div class="wrapper"> 
	
	<?php 

		$sql = $conn->prepare("select * from subcategory  where id =".trim(base64_decode($_GET['l']),"row_")); 
		$sql->execute();
		$num = $sql->rowCount();
		if($num > 0){
			$r = $sql->fetchAll();
			foreach($r as $ds){
				
				//print_r($ds);
			}
		}
	   else{
		   echo "Opps something went wrong please retry again...";
		   exit();
	   }	  

	  ?>
            
        
		<?php include('header.php'); ?>
		
		<div class="content">


           <?php include('menu.php'); ?>



            <div class="workplace">
			
			<div id="msg">
				
			</div>
                
                <div class="page-header">
                    <h1>Edit Subcategory <!---<small>Category</small>---></h1>
                </div>  
                
                <div class="row-fluid">

                    

                

                <div class="span6">
                        <div class="head clearfix">
                            <div class="isw-ok"></div>
                            <h1>Subcategory Details</h1>
                        </div>
                        <div class="block-fluid">                        
                            <form id="fileupload" method="POST" enctype="multipart/form-data">
						<input type="hidden" id="caseno" name="caseno" value="<?php echo base64_encode('12');?>">
						<input type="hidden" id="link" name="link" value="<?php echo $_GET['l'];?>" />
                            <div class="row-form clearfix">
                                <div class="span3">Select Category:</div>
                                <div class="span9">        
                                         
										<select id="cat_id" name="cat_id" class="validate[required]">
											<option>Select Category</option>
										<?php
											$query = $conn->prepare("Select * from category where status = 1");
											$query->execute();
											if($query->rowCount() > 0)
											{
												$data = $query->fetchAll();
												foreach($data as $row){
									
													echo "<option value='".$row['id']."'>".$row['category_name']."</option>";
												}
											}
										?>
										
										</select>
										<span></span>
									
                                    
                                </div>
                            </div> 
                            <div class="row-form clearfix">
                                <div class="span3">Subcategory:</div>
                                <div class="span9">        
                                    <input value="<?php echo stripslashes($ds['subcategory_name'])?>" class="validate[required]" type="text" name="sub_category" id="sub_category"/>
                                    
                                </div>
                            </div>      
                 
                                
                            <div class="footer tar">
                                <button class="btn">Submit</button>
                            </div>                 
                                
                            </form>
                        </div>

                    </div>
                
                
                <div class="dr"><span></span></div>            

                
</div>
                
                
    
			

        </div>   
		
		
		
		
    </div>
	<script type='text/javascript' src="js/myscript.js"></script>
	<script>
		$('#cat_id').val("<?php echo $ds['cat_id'];?>");
	</script>
</body>
</html>
