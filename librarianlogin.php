<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>
 <?php include("header.php"); ?>
    <div id="main" style="height:740px; background: url(images/bg.png) repeat;">
                <div id="left" role="navigation">
            <?php include("left.php"); ?>
        </div>

<div id="wrapper">

    <div class="user-icon"></div>
    <div class="pass-icon"></div>
   
<form name="login-form" class="login-form"  method="post" action="checklibrarianlogin.php">

    <div class="header">
    <h1>Login Now</h1>
   <span>Enter Password.</span>
    </div>
    <div class="content">
    <input name="userid" type="text" class="input username" placeholder="User Id" value='IRS Manager' readonly/>
   <input name="password" type="password" class="input password" placeholder="Password" onfocus="this.value=''" required="required"/>
  
    </div>
    <div class="footer">
    <input type="submit" name="submit" value="Login" class="button" />
  
    </div>
</form>
</div>
        <div id="right" role="navigation">
             <?php include("right.php"); ?>
        </div>
    </div>
    <div id="foterr">
    <?php include("footer.php"); ?>
    </div>
</body>
</html>