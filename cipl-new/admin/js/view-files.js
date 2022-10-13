$(document).ready(function(){

		

		

		

$('#example tbody').on( 'click', '.actinact', function () {



					var ctr=$(this); console.log(ctr);

					$(this).html("<img src='img/loaders/c_loader_bw.gif' />");

					var id=$(this).parent('td').parent('tr').attr('id');

					$.post('php/',{'caseno': btoa("6"),'link':btoa(id),'table':$("#tbl").val()}, function(data){

					$(ctr).html(data);

				}).fail(function(xhr, ajaxOptions, thrownError) { 

					alert(thrownError); 

			

				});

													

				} );	





$('#example tbody').on( 'click', '.sendreminder', function () {



					var ctr=$(this);

					$(this).html("<img src='img/loaders/c_loader_bw.gif' /> Send Reminder");

					var id=$(this).parent('td').parent('tr').attr('id');

					$.post('php/',{'caseno': btoa("59"),'link':btoa(id)}, function(data){

						$(ctr).html("Send Reminder");

						alert(data.trim());

						

				}).fail(function(xhr, ajaxOptions, thrownError) { 

					alert(thrownError); 

			

				});

													

				} );			

		

						   

$('#example tbody').on( 'click', 'tr td .edit', function () {

		window.location.href=$('#update').val()+"?l="+btoa($(this).parent('td').parent('tr').attr('id'));

	} );						   

						   

						   

$('#chkAll').change(function(){

							 if ($(this).prop('checked')==true)

							 { 					

							      $("input[name='select[]']").attr('checked','checked').parent('span').addClass('checked');

   							 }

							 else

							 {

								  $("input[name='select[]']").removeAttr('checked').parent('span').removeClass('checked');

							 }

							 });





$(document).on( 'click','#example tbody .delete , .delete',  function () {

													

								if($('input:checkbox:checked').length<1 )

								{

									notify_i('Alert','Please select atleast one checkbox');

									

									return false;

								}

								if(!confirm("Are You Sure To Delete Selected Records"))

								{

										return false;

								}

								var chkbx='';

								for(var i=0;i<$('input:checkbox:checked').length;i++)

								{

									chkbx=chkbx+$('input:checkbox:checked')[i].value+',';

								}

								

					$.post('php/',{'caseno': btoa(20),'link':btoa(chkbx),'table':$("#tbl").val()}, function(data){

					if(data==0)

					{

						alert("Sorry we are facing some problem.Please retry later...");

					}

					else

					{

						 $("#example").dataTable().fnDraw();

					}

				}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?

				alert(thrownError); //alert with HTTP error

				});

													

} );



$('#example tbody').on( 'click', 'a[data-target="#myModal7676"]', function () {

		$('#txtjobid').val($(this).parents('tr').attr('id').replace('row_',''));

	} );						   

				



						   

						   

						   });

