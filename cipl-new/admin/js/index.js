// JavaScript Document

	
			
			
			
			$("#myform").validationEngine('attach',{
				onBeforeAjaxFormValidation : BeforeAjaxFormValidationf,
				
                ajaxFormValidation : true,
				ajaxFormValidationMethod : 'post',
				ajaxFormValidationURL : 'php/',
                onAjaxFormComplete : ajaxValidationCallbackf,
				scroll : true
    		});	
			
			
			
			
			
			

function BeforeAjaxFormValidationf(form, options)
			{
				 if (window.console){
					 
					 
					 $("#myform").bind("jqv.field.result", function(event, field, errorFound, prompText){ if(errorFound) return false;});
					
					
					form.find(":submit").html('Sending...').attr('disabled','disabled');
					
					

				
        //alert("Right before the AJAX form validation call");
				 
				 }
     
    return true;
			}
			function ajaxValidationCallbackf(status, form, json, options) {
				



            if(status == true) 
			{
            	
				
			
				if(json.code=='1')
				{
					$("#msg").html("<div class='alert alert-success'><center><h4>Success!</h4>"+json.msg+"<center></div> ");
						
						window.location.href='home.php';
						$(':input', '#myform').not(':button, :submit, :reset, :hidden, :radio').val('').removeAttr('checked').removeAttr('selected');
               		
				}
				else if(json.code=='2')
				{
					$("#msg").html("<div class='alert alert-error'><center><h4>Warning!</h4>"+json.msg+"<center></div> ");
						
						
						
               		
				}
				else
				{
					$("#msg").html("<div class='alert alert-error' ><center> <h4>Error!</h4>"+json.msg+"</center></div>");	
               		
				}
                 
               	
          	  }
			 $("#msg").slideDown(400).delay(5000).slideUp(400);  
			  form.find(":submit").html('Sign request').removeAttr('disabled');
			 
			  
       		 }
			 
      