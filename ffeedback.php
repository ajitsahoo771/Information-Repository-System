<?php
session_start();
if(!isset($_SESSION['Regdno']))
{
    header("location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IRS</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link href="css/style_1.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap/bootstrap.min.js"></script>
</head>

</head>
<body>
 <?php include("fheader.php"); ?>
    <div id="main" style="height:750px; background: url(images/bg.png) repeat;" >
        <div id="left" role="navigation">
            <?php include("left.php"); ?>
        </div>
        <div id="profile">
            <div class="profilee">
                <p class="contentt"> Feedback Form               <img src="images/feedback.jpg" height="50px"  width="50px"></img></p>
                 <form name="feedbackform" action="ffeedbackform.php" method="post" >
        <table class="table"  style="background-color:#ffffff ;color: #63bbfa;font-size: 18px;margin-top: 10px;font-family: 'Bree Serif', serif;font-size:20px" >
            <tr><td>Name* :   <input name="name" type="text" class="input username"  required="required"/></td>
            </tr>
            <tr><td>Email Id* :   <input name="email" type="email" class="input username"   required="required"/></td>
            </tr>
            <tr><td>Feedback* :  <textarea name="feedback"></textarea></td>
            </tr>    

              <td><input type="submit" name="submit" value="Submit" style="margin-top:10px;color:white;background-color: #63bbfa ;height:28px;width:100px;border-color: #002468" />
        </table>
               
            </div>
        </div>  
        <div id="right" role="navigation">
             <?php include("fright.php"); ?>
        </div>
    </div>
    <div>
    <?php include("ffooter.php"); ?>
    </div>
        
</body>
</html>
