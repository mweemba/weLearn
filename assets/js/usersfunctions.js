
function FormValidate1(){
	var formvalid=true;
   
	var t3=passidvalidation();
	var t4=checkBothpasswords();
	  var t2=oldpassvalidate();
	
	errorlist="";
	
     if (t2==0) {
        errorlist += '<li>The Current Password is not correct</li>';
    }
	
    if (t3==0) {
        errorlist += '<li>The New Password too weak</li>';
    }
	
    if (t4==0) {
        errorlist += '<li>The two Passwords are not the same</li>';
    }
	
	
	
    if (errorlist.trim()) {
        document.getElementById("self_edit_pass").innerHTML = '<div class="alert alert-danger"><ul>'+errorlist.trim()+'</ul></div>';
      formvalid=false;
    }
	else {
	formvalid=true;
 
		
	}
	
	return formvalid;
}
function passidvalidation(){


var pass_valid=0;
var password1= document.getElementById("new_password").value;
var password_strength=document.getElementById("passwordValidate");
 var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$" ,"g");
var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$","g");
var enoughRegex = new RegExp("(?=.{6,}).*", "g");

if (password1.length==0) {
 password_strength.innerHTML = 'Type Password';
} else if (false == enoughRegex.test(password1)) {
 password_strength.innerHTML = '<span style="color:red">Too Short!</span>';
 pass_valid=0;
} else if (strongRegex.test(password1)) {
 password_strength.innerHTML = '<span style="color:green">Strong!</span>';
 pass_valid=1;
} else if (mediumRegex.test(password1)) {
 password_strength.innerHTML = '<span style="color:orange">Medium!</span>';
 pass_valid=1;
} else {
 password_strength.innerHTML = '<span style="color:red">Weak!</span>';
 pass_valid=0;
}
checkBothpasswords();
return pass_valid;
}



function oldpassvalidate()
{ 
var oldpassValid=0;
var oldpass= document.getElementById("current_password").value;
console.log(oldpass);


	 
  $.ajax({
	  async:false,
       type: "POST",
       url: '../actions/checkPassOnChange.php',
       data: "oldpass="+oldpass,
       success: function(data)
       {
		   
		  // console.log(data);
          if (data.trim() === 'success') {
            document.getElementById("old_pass_response").innerHTML="<img src='../assets/images/tick.jpg' width='20'>";	
			oldpassValid=1;
			
          }
          else {
			document.getElementById("old_pass_response").innerHTML="<font color='red'>"+data+"</font>"
			oldpassValid=0;
          }
       }
   });
  console.log(oldpassValid);
	return oldpassValid;

}
		
		


function checkBothpasswords() {
	var bothpassvlaid=0;
var pass1= document.getElementById("new_password").value;
var pass2= document.getElementById("confirm_password").value;
if(pass1.trim() == pass2.trim())
{
document.getElementById("checkbothpass").innerHTML ="<img src='../assets/images/tick.jpg' width='20'>";
bothpassvlaid=1;
}
else{

document.getElementById("checkbothpass").innerHTML="<font color='red'>The two passwords are not the same</font>"
bothpassvlaid=0;
}

return bothpassvlaid;

}
/*
function SelfChangepass()
{ 




	 
 
$("form").submit(function(){
	 
	 event.preventDefault();
	var postData = $("#self_user_pass_form").serializeArray();
	
	$.ajax({
       type: 'POST',
       url: '../actions/update_password.php',
	   data: postData,
       success:  function(data)
       {
       //destroy();
	   	console.log(data);
		
	document.getElementById('self_edit_pass').innerHTML=data;
			
		
		
       }
   });
});
  return false;


}
*/



