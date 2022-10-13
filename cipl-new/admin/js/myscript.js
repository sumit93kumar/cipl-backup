function BeforeAjaxFormValidation(form, options)

			{

				 if (window.console){

					 

					 

					 $("#fileupload").bind("jqv.field.result", function(event, field, errorFound, prompText){ if(errorFound) return false;});

					

					

					form.find(".footer > :submit").html('Sending...').attr('disabled','disabled');

					

					



				

        //alert("Right before the AJAX form validation call");

				 

				 }

     

    return true;

			}

			function ajaxValidationCallback(status, form, json, options) {

				







            if(status == true) 

			{

            	

				

				$("a#scrollUp").trigger('click');  

				if(json.code=='1')

				{

					$("#msg").html("<div class='alert alert-success'><center><h4>Success!</h4>"+json.msg+"<center></div> ");
					
						$(".files").html('');

						//$("#title").val(json.title);

						$(':input[type="text"]', '#fileupload').not(':button, :submit, :reset, :hidden, :radio').val('').removeAttr('checked').removeAttr('selected');

               		$("#msg").slideDown(400).delay(5000).slideUp(400);
					setTimeout(location.reload(true), 7000);

				}

				else

				{

					$("#msg").html("<div class='alert alert-error' ><center> <h4>Warning!</h4>"+json.msg+"</center></div>");	

               		$("#msg").slideDown(400).delay(5000).slideUp(500);

				}
          	  }

			  form.find(".footer > :submit").html('Submit').removeAttr('disabled');

       		 }

			 

      

	

			$("#fileupload").validationEngine('attach',{

				onBeforeAjaxFormValidation : BeforeAjaxFormValidation,

				

                ajaxFormValidation : true,

				ajaxFormValidationMethod : 'post',

				ajaxFormValidationURL : 'php/',

                onAjaxFormComplete : ajaxValidationCallback,

				scroll : true

    		});	