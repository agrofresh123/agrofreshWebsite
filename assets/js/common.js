var base_url  = "http://whatsdesign.in/aff/ci/";
var base_url  = "http://www.agrofreshfoods.com/";
$(document).on("click", "#fsend" , function(e) {
  e.preventDefault();
   var formdata = $("#footer-form :input").serialize();
    console.log('formdata '+JSON.stringify(formdata));
   $.ajax({
     type    : "POST",
     url     : base_url+"Api/email/footerform",
     data    : formdata,
     success : function(resData){
 			// alert(resData);
 			console.log(resData);
 			var response = jQuery.parseJSON(resData);
 			if (response['Response-Validate'] === true) {
 				if(response['Response-Status']  === true){
 					$.toaster(response['Response-Message'], 'Success', 'success');
          $("#footer-form :input").val('');
 				}else if(response['Response-Status'] === false){
 					$.toaster(response['Response-Message'], 'Error', 'danger');
 					return false;
 				}
 			}
 			else{
 				$.each(response['Response-Message'], function(key, value) {
 					if(value != ''){
 						$.toaster(value, 'Error', 'danger');
 						$("#footer-form #"+key).focus();
 						return false;
 					}
 				});
 			}
 		 },error: function(){
    }
   });
   event.preventDefault();
   return false;  //stop the actual form post !important!
});

$(document).on("click", "#sendcontact" , function(e) {
  e.preventDefault();
   var formdata = $("#contactForm :input").serialize();
    console.log('formdata '+JSON.stringify(formdata));
   $.ajax({
     type    : "POST",
     url     : base_url+"Api/email/contactform",
     data    : formdata,
     success : function(resData){
 			// alert(resData);
 			console.log(resData);
 			var response = jQuery.parseJSON(resData);
 			if (response['Response-Validate'] === true) {
 				if(response['Response-Status']  === true){
 					$.toaster(response['Response-Message'], 'Success', 'success');
          $("#contactForm :input").val('');
 				}else if(response['Response-Status'] === false){
 					$.toaster(response['Response-Message'], 'Error', 'danger');
 					return false;
 				}
 			}
 			else{
 				$.each(response['Response-Message'], function(key, value) {
 					if(value != ''){
 						$.toaster(value, 'Error', 'danger');
 						$("#contactForm #"+key).focus();
 						return false;
 					}
 				});
 			}
 		 },error: function(){
    }
   });
   event.preventDefault();
   return false;  //stop the actual form post !important!
});
$(document).on("click", "#sendenquiry" , function(e) {
  e.preventDefault();
   var formdata = $("#appointment :input").serialize();
    console.log('formdata '+JSON.stringify(formdata));
   $.ajax({
     type    : "POST",
     url     : base_url+"Api/email/enquiryform",
     data    : formdata,
     success : function(resData){
 			// alert(resData);
 			console.log(resData);
 			var response = jQuery.parseJSON(resData);
 			if (response['Response-Validate'] === true) {
 				if(response['Response-Status']  === true){
 					$.toaster(response['Response-Message'], 'Success', 'success');
          $("#appointment :input").val('');
          $("#app-modal").modal('hide');
 				}else if(response['Response-Status'] === false){
 					$.toaster(response['Response-Message'], 'Error', 'danger');
 					return false;
 				}
 			}
 			else{
 				$.each(response['Response-Message'], function(key, value) {
 					if(value != ''){
 						$.toaster(value, 'Error', 'danger');
 						$("#appointment #"+key).focus();
 						return false;
 					}
 				});
 			}
 		 },error: function(){
    }
   });
   event.preventDefault();
   return false;  //stop the actual form post !important!
});

$(document).on("click", "#sendfenquiry" , function(e) {
  e.preventDefault();
   var formdata = $("#footerform :input").serialize();
    console.log('formdata '+JSON.stringify(formdata));
   $.ajax({
     type    : "POST",
     url     : base_url+"Api/email/footerenquiryform",
     data    : formdata,
     success : function(resData){
 			// alert(resData);
 			console.log(resData);
 			var response = jQuery.parseJSON(resData);
 			if (response['Response-Validate'] === true) {
 				if(response['Response-Status']  === true){
 					$.toaster(response['Response-Message'], 'Success', 'success');
          $("#footerform :input").val('');
 				}else if(response['Response-Status'] === false){
 					$.toaster(response['Response-Message'], 'Error', 'danger');
 					return false;
 				}
 			}
 			else{
 				$.each(response['Response-Message'], function(key, value) {
 					if(value != ''){
 						$.toaster(value, 'Error', 'danger');
 						$("#footerform #"+key).focus();
 						return false;
 					}
 				});
 			}
 		 },error: function(){
    }
   });
   event.preventDefault();
   return false;  //stop the actual form post !important!
});

$("#contactno").on("keypress",function (event) {
   $(this).val($(this).val().replace(/[^\d].+/, ""));
	if ((event.which < 48 || event.which > 57)) {
		$.toaster("Please Enter Number Only", 'Error!', 'danger');
		event.preventDefault();
	}else{
	}
});