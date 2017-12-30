  /**
  * @file JavaScript configurations 
  * @author Shon Philip
  * @version 1.0
  */
  
  $().ready(function(){
	//jQuery Validation  
    $("#timeForm").validate(); 
	//initialize form inputs
	$('#time_form_startTime').timepicker({
	  template: false,  
      showMeridian: false,
	  defaultTime: false
    });

    $('#time_form_endTime').timepicker({
	  template: false,
      showMeridian: false,
	  defaultTime: false
    })
	  
  })
  