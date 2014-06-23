$(function(e){


$( "#UserAddForm,#UserEditForm").validate({  
ignore: [], 		
  rules: {    
  	redactor: {	    
  	required: true,	   
  	minlength: 30	
  	},
  	'data[User][email]': {
      required: true,
      email: true
    }        
 }});

});