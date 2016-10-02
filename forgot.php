<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validation</title>
<link href="css/style_1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
});
</script>
<script>
            function formValidation()  
            {    
                       
                        var uname = document.signin.name;
                        var uemail = document.signin.email; 
                         if(allLetter(uname))  
                                    {  
                                     if(ValidateEmail(uemail))  
                                                {  
                                                      if(alphanumeric(uadd))  
                                                    {   
                                                        
                                                    }
                                                }  
                                     }             
                        return false;  
                     } 
                    function allLetter(uname)  
                        {   
                            var letters = /^[A-Za-z]+$/;  
                            if(uname.value.match(letters))  
                            {  
                             return true;  
                            }  
                            else  
                            {  
                                alert('Name must have alphabet characters only');  
                                uname.focus();  
                                return false;  
                            }  
                        }  
                       
                        function ValidateEmail(uemail)  
                        {  
                            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
                            if(uemail.value.match(mailformat))  
                            {  
                                return true;  
                            }  
                            else  
                            {  
                                alert("You have entered an invalid email address!");  
                                uemail.focus();  
                                return false;  
                            }  
                        } 
        </script>

</head>
<body>
 <?php include("header.php"); ?>
    <div id="main" style="height:500px; background: url(images/bg.png) repeat;">
<div id="wrapper">

    <div class="user-icon"></div>
      
<form name="login-form" class="login-form" action="checkforgot.php" method="post" onSubmit="return formValidation()">

    <div class="header">
    <h1>Forgot Password</h1>
     </div>
    <div class="content">
    <input name="name" type="text" class="input username" placeholder="Provide a Name" required="required"/><br></br>
    <input name="email" type="email" class="input username" placeholder="Provide Centurion Email Id"  required="required"/>
         </div>
    <div class="footer">
      <input type="submit" name="submit" value="Submit" class="button" /></a>
      <a href="index.php"><input type="button" name="submit1" value="Home" class="register" /></a>
    </div>
</form>
</div>
    </div>
    <?php include("footer.php"); ?>

</body>
</html>
