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
	
	<!-- Bootstrap styles -->
<link rel="stylesheet" href="js/plugins/fileupload/css/bootstrap.min.css">
<!-- Generic page styles -->

<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="js/plugins/fileupload/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="js/plugins/fileupload/css/jquery.fileupload.css">
<link rel="stylesheet" href="js/plugins/fileupload/css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="js/plugins/fileupload/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="js/plugins/fileupload/css/jquery.fileupload-ui-noscript.css"></noscript>
    <title>Add Gallery Images</title>

<link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->    
    <link rel='stylesheet' type='text/css' href='css/fullcalendar.print.css' media='print' />
    
    <link rel='stylesheet' type='text/css' href='css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='js/plugins/jquery/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.2.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/bootstrap.min.js'></script>
	<script type='text/javascript' src='js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
</head>
<body>
    <div class="wrapper"> 
            
        
		<?php include('header.php'); ?>
		
		<div class="content">


	<?php include('menu.php'); ?>



            <div class="workplace">
			
			<div id="msg">
				
			</div>
                
                <div class="page-header">
                    <h1>Add Gallery Images <!---<small>Category</small>---></h1>
                </div>  
                
                

                    

                

<div class="row-fluid">
                <div class="span6">
				<form id="fileupload" method="POST" enctype="multipart/form-data">
                        <div class="head clearfix">
                            <div class="isw-ok"></div>
                            <h1>Gallery Image Details</h1>
                        </div>
                        <div class="block-fluid">                        
                            
						<input type="hidden" id="caseno" name="caseno" value="<?php echo base64_encode('3');?>">
						<input type="hidden" id="title" name="title" value="<?php $query = $conn->prepare('Select max(id) as max_id from gallery');
	$query->execute(); 
	if($query->rowCount() > 0){
		$row = $query->fetchAll(PDO::FETCH_ASSOC); 
		foreach($row as $data){
			echo base64_encode($data['max_id'] + 1);
		}
		
	}
		?>" />
						<input type="hidden" id="description" name="description" value="<?php echo base64_encode($_SESSION['uid'])?>" />
                            
                            <div class="row-form clearfix">
                                <div class="span3">Select Category:</div>
                                <div class="span9">        
                                    <div id="selection">      
										<select id="cat_id" name="cat_id" class="validate[required]">
											<option>Select Category</option>
											<?php
												$query = $conn->prepare("Select * from category where status=1");
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
                            </div>      
							
							<div class="row-form clearfix">
                                <div class="span3">Select Subcategory:</div>
                                <div class="span9">  
									<select id="subcat_id" name="subcat_id" class="validate[required]">
										<option value="">Select Subcategory</option>
									</select>
									<span></span>
                                </div>
                            </div>
							
							<div class="row-form clearfix">
                                <div class="span3">Image Title:</div>
                                <div class="span9">        
                                    <input value="" type="text" name="image_title" id="image_title"/>
                                    
                                </div>
                            </div>
							
                     
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row-fluid fileupload-buttonbar">
            <div class="col-lg-11">
            <div class="gap"></div>
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon  isw-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start hidden">
                    <i class="glyphicon  isw-up_circle"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel hidden">
                    <i class="glyphicon isw-cancel"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete hidden">
                    <i class="glyphicon isw-delete"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle hidden">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        <div class="footer tar">
                <button class="btn">Submit</button>
                            </div>
                          </div>
                        </div>

                

				
               </form> </div>
                
                <div class="dr"><span></span></div>            

                

                
                
    
			

        </div>   
		
		
		
		
    </div>
	<script type='text/javascript' src="js/myscript.js"></script>
	<script>
	$(document).ready(function(e) {

    

    $('#cat_id').change(function(){
		

        if($(this).val()!='')

        {
             $.ajax({

            url: 'php/',

            type: "POST",

            data:  '&caseno='+btoa('10')+"&grp="+btoa($(this).val()),

            async : true,

            dataType: 'json',

            beforeSend: function(){},

            complete: function(){},

            success: function(data){

                   

                    $('#subcat_id').html(atob(data.msg));


                },

                error: function(){

                    alert("Sorry we are facing some problem. Please try later..."); 

                    } 

            });

            

        }

        });

    

});

</script>
	
	<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
    
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <span>Delete</span>
                </button>
                <input type="radio" name="delete" value="{%=file.id%}" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/plugins/fileupload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="js/plugins/fileupload/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="js/plugins/fileupload/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="js/plugins/fileupload/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="js/plugins/fileupload/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="js/plugins/fileupload/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/plugins/fileupload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/plugins/fileupload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/plugins/fileupload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/plugins/fileupload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/plugins/fileupload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/plugins/fileupload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/plugins/fileupload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/plugins/fileupload/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/plugins/fileupload/js/main.js"></script>
	
</body>
</html>
