function showMsg(i){
    var msg="";
  switch(i){
    case 1:
      msg="Please enter value for fullname";
    break;
    case 2:
      msg="Please enter a valid email address";
    break;
    case 3:
      msg="Please enter a value for password";
    break;
    case 4:
      msg="The passwords you have entered do not match";
    break;
    case 5:
      msg="Please select a category";
    break;
    case 6:
      msg="Your account has been activated";
    break;
    case 7:
      msg="User email already exits";
    break;
    case 8:
      msg="Check your spam folder if email is not in inbox";
    break;
    default:
      msg="Registering User. You will receive a verification email shortly.";
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
	$("#register").click(function(){
    var register_url=$(".register").data("value");
		var fullname=$("#fullname").val();
		var email=$("#email").val();
		var password=$("#password").val();
		var confirmpassword=$("#confirmpassword").val();
		var category=$("#category").val();
    if(fullname.length==0){
      showMsg(1);
      return;
    }
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if(!email.match(emailExp)){
      showMsg(2);
      return;
    }
    if(password.length==0){
      showMsg(3);
      return
    }
     if(password!=confirmpassword){
      showMsg(4);
      return;
    }
    if(category==0){
      showMsg(5);
      return;
    }
    showMsg(0);
    document.getElementById("loading").style.visibility="visible";
   // alert(register_url);
    setTimeout(function(){
        $.ajax({
        url:register_url,
        type:"POST",
        async:false,
        data:{
        "fullname":fullname,
        "email":email,
        "password":password,
        "category":category
        }
      }).done(function(data){
          $("#fullname").val("");
          $("#email").val("");
          $("#password").val("");
          $("#confirmpassword").val("");
          $("#category").val(0);
          document.getElementById("loading").style.visibility="hidden";
          if(data=="User already exits"){
            showMsg(7);
          }
          else{
            showMsg(8);
          }
      }).fail(function(){
      });

    },5000);
  
	});
});