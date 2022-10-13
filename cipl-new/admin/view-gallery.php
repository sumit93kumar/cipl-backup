<?php 

include_once("connect.php");

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

    

    <title>View Gallery Images</title>


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
    
    <!---<script type='text/javascript' src='js/plugins/dataTables/jquery.dataTables.min.js'></script> --->
<link rel="stylesheet" type="text/css" href="js/plugins/dataTables1/example/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="js/plugins/dataTables1/example/resources/syntax/shCore.css">

	
	<script type="text/javascript" language="javascript" src="js/plugins/dataTables1/example/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="js/plugins/dataTables1/example/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="js/plugins/dataTables1/example/resources/demo.js"></script>	
    
    <script type='text/javascript' src='js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='js/plugins/pnotify/jquery.pnotify.min.js'></script>
    <script type='text/javascript' src='js/plugins/ibutton/jquery.ibutton.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/scrollup/jquery.scrollUp.min.js'></script>
    
    <script type='text/javascript' src='js/cookies.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
	
	<link rel="icon" type="image/ico" href="favicon.ico"/>
    
    

</head>

<body>

    <div class="wrapper"> 

            

      <?php include("header.php"); ?>



       

              <?php include("menu.php"); ?>





        <div class="content">





            <div class="breadLine">



                <ul class="breadcrumb">

                    <li><a href="home.php">Home</a> <span class="divider">></span></li>                

                    <li class="active">Category<span class="divider">></span></li>

                    <li class="active">View Category</li>

                </ul>



                <ul class="buttons">

                                    

                    <li>

                        <a href="javascript:void(0);" class="link_bcPopupSearch"><span class="icon-map-marker"></span><span class="text"></span></a>



                                        

                    </li>

                </ul>



            </div>



            <div class="workplace">



                



                                

           

   

                

                <div class="row-fluid">



                    <div class="span12">                    

                        <div class="head clearfix">

                            <div class="isw-cloud"></div>

                            <h1>VIEW CATEGORY</h1>        

                            <ul class="buttons">

                                                                                       

                             <!---<li><a href="iexport-to-excel.php?l= //echo base64_encode('11');" class="isw-download"></a></li>--->

                                <li>

                                    <a href="#" class="isw-settings"></a>

                                    <ul class="dd-list">

                                      

                                       

                                        

                                        <li><a href="javascript:void(0);" class="delete" ><span class="isw-delete"></span> Delete</a></li>

                                    </ul>

                                </li>

                            </ul>                       

                        </div>

                        <div class="block-fluid table-sorting clearfix">

                       

                            <table cellpadding="0" cellspacing="0" width="100%" class="table" id="example">

                                <thead>

                                    <tr>

                                       

                                        <th width="3%"><input type="checkbox" id="chkAll" /></th>

                                        

                                        

                                         <th width="15%">Title</th>

                                         <!---<th width="15%">Location</th><th width="10%">Added On</th>--->

                                         <th width="10%">Image Link</th>

                                 <th width="12%">Status</th>
								 

                                        <th width="15%">Action</th>

                                        

                                                                                                                  

                                    </tr>

                                </thead>

                               

                            </table>

                             <input type="hidden" id="tbl" name="tbl" value="gallery" />

                             <input type="hidden" id="update" name="update" value="edit-gallery.php" />

                            

                        </div>

                    </div>                                



                </div>

                

                

                

                                <div class="dr"><span></span></div>            



                

                

                



                





   







              



            </div>



        </div>   

    </div>

    
<script type='text/javascript' src="js/myscript.js"></script>

<script type="text/javascript" language="javascript" class="init">


function format ( d ) {
	var img=d[2].split(',');

	var tbl='<table cellpadding="0" cellspacing="0" width="100%" class="table" ><thead>'+

	'<tr><th width="100%" colspan="6"><center>Gallery Detail</center></th></tr>'+

	'<tr><th width="10%">Title</th><td width="23%" colspan="2">'+d[1]+'</td><th width="10%">Created On</th><td width="23%" colspan="2">'+d[4]+'</td></tr>'+
	
	'<tr><th width="10%">Image</th><td width="23%" colspan="6"><div style="display: flex;">';
	
	$.each(img, function( index, value ) {

  tbl+='<div style="display: grid; margin-right: 15px;"><img src="php/files/thumbnail/'+value+'" width="150px;"><a class="btn remove_image" style="width: 60%; margin: 10px auto;" data-attr-id="'+value+'"><span class=" isw-delete"></span>Delete</a></div>';

});
	
	
	tbl+='</div></td></tr>'+

	'</thead></table>';

	return tbl;

   

}

$(document).ready(function() {

						   

	var selected = [];

    var t = $('#example').DataTable( {

		"processing": true,

		"serverSide": true,

		"ajax": "scripts/view-gallery.php",

        "lengthMenu": [[50, 100, 200, -1], [50, 100, 200, "All"]],

	   "columnDefs": 

		[ 

		 {

			  "orderable":  false,

              "data": null,

              "targets": 0,

	          "render": function ( data, type, row ) { return '<input type="checkbox" name="select[]" value="'+row[0]+'">'; }

         },
        {
		 "render": function ( data, type, full, meta ) { 
			if(data == ""){
				return "null";
				
			}
			else{
				return data;
			}
		 },
		 "targets": 1,"data":1  
		 },
		 {
		 //"render": function ( data, type, row ) { return  '<img src="php/files/thumbnail/'+data+'" width="100px">'; },
		 "targets": 2,"data":2 ,
			"render": function ( data, type, full, meta ) {
				var split = data.split(','); //console.log(split[1]);
					return   '<img src="php/files/thumbnail/'+split[0]+'" width="100px">'; 		
				
			}		 
		 },
		 
		 {
			 "targets": 3,
			 "data": 3,
			 "render": function ( data, type, full, meta ) 
			 {
				if(data==1)
				{
			return '<a href="javascript:void(0);" style="text-decoration:none;"   class="actinact"><button class="btn btn-success" type="button" >Active</button></a>';
				}
				else
				{
			return '<a href="javascript:void(0);" style="text-decoration:none;"  class="actinact"><button class="btn btn-danger" type="button">In Active</button></a>';
				}
          	}  
          },
		  
		  {
                "orderable":      false,
                "data":           null,
				"targets": 4,
                "defaultContent": "",
				"render": function ( data, type, full, meta ) 
				{
return '<i class="isb-plus details-control"  title="View Detail" style="cursor:pointer;"></i><i class="isb-edit edit"  style="cursor:pointer;padding-left:15px;" title="Edit Job"></i>';
				}  
            }
		],

"fnDrawCallback": function (oSettings) {

$(".row-form,.row-fluid,.dialog,.loginBox,.block,.block-fluid").find("input:checkbox, input:radio").not(".skip, input.ibtn").uniform(); 

},

	   "order": [[ 2, 'desc' ]]

    } );

 

 

var detailRows = [];

 

    $('#example tbody').on( 'click', 'tr td .details-control', function () {

        var tr = $(this).closest('tr');

        var row = t.row( tr );

        var idx = $.inArray( tr.attr('id'), detailRows );

 

        if ( row.child.isShown() ) {

            tr.removeClass( 'details' );

            row.child.hide();

 

            // Remove from the 'open' array

            detailRows.splice( idx, 1 );

        }

        else {

            tr.addClass( 'details' );

            row.child( format( row.data() ) ).show();

 

            // Add to the 'open' array

            if ( idx === -1 ) {

                detailRows.push( tr.attr('id') );

            }

        }

    } );

 

    // On each draw, loop over the `detailRows` array and show any child rows

   

 t.on( 'draw', function () {

        $.each( detailRows, function ( i, id ) {

            $('#'+id+' td.details-control').trigger( 'click' );

        } );

    } );

} );















	</script>
    
<script type='text/javascript' src="js/view-files.js"></script>




</body>

</html>





 