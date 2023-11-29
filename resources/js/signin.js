function showMsg(i){
  /*  var msg="";
  switch(i){
    case 1:
      msg="Please enter a valid email address";
    break;
    case 2:
      msg="Please enter a value for password";
    break;
    default:
      msg="Logging in";
    break;
  }
   $(".poper").notify(
      msg,"warning",
      {
        position:"bottom right",
        showDuration:500,
      }
   );
 */
}
$(document).ready(function(){
	$("#signin").click(function(){
	
		
		var signin_url=$(".signin").data("value");
		var home_url=$(".home").data("value");
		var email=$("#email").val();
		var password=$("#password").val();
		var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	    if(!email.match(emailExp)){
	     	showMsg(1);
	    	return;
	    }
	    if(password.length==0){
      		showMsg(2);
      		return
    	}
    	showMsg(0);
	    document.getElementById("loading").style.visibility="visible"
	    setTimeout(function(){
	        $.ajax({
	        url:signin_url,
	        type:"POST",
	        async:false,
	        data:{
	        "email":email,
	        "password":password,
	        }
	      }).done(function(data){
	          $("#email").val("");
	          $("#password").val("");
	          document.getElementById("loading").style.visibility="hidden";
	          if(data="Login was successfull"){
	          	window.location=home_url;
	          }
	          else{
	          	alert(data);
	          }
	      }).fail(function(){
	      });

	    },5000);
	});
});