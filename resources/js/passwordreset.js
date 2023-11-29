function showMsg(i){
    var msg="";
  switch(i){
    case 1:
      msg="Please enter a valid email address";
    break;
    case 2:
      msg="Your email address was not found in our system";
    break;
    case 3:
    	msg="Check your spam folder if email is not in inbox";
    break;
    default:
      msg="You will receive a password reset email shortly.";
    break;
  }
   $(".poper").notify(
      msg,"warning",
      {
        position:"bottom right",
        showDuration:500,
      }
   );
 
}
$(document).ready(function(){
	$("#passwordreset").click(function(){
		var email=$("#email").val();
		var passwordreset_url=$(".passwordreset").data("value");
		var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if(!email.match(emailExp)){
		    showMsg(1);
		    return;
		 }
		showMsg(0);
    	document.getElementById("loading").style.visibility="visible";
    	setTimeout(function(){
	        $.ajax({
	        url:passwordreset_url,
	        type:"POST",
	        async:false,
	        data:{
	        "email":email,
	        }
	    }).done(function(data){
	        $("#email").val("");
	        document.getElementById("loading").style.visibility="hidden";
	        if(data=="Reset password email sent"){
	        	showMsg(3);
	        }
	        else{
	        	showMsg(2);
	        }
	    }).fail(function(){
	    });

     },5000);
	});
});