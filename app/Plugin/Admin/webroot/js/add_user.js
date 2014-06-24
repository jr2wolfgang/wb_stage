$(function(e){


$( "#UserAddForm" ).validate({  
ignore: [], 		
  rules: {    
  	redactor: {	    
  	required: true,	   
  	minlength: 30	
  }        
 }});

});