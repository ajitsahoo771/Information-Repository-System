<?php
session_start();
if(!isset($_SESSION['Regdno']))
{
    header("location:librarianlogin.php");
}
?>               
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IRS Disclaimer</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>

</head>
<body>
 <?php include("mheader.php"); ?>
    <div id="main" style="height:750px; background: url(images/bg.png) repeat;" >
        <div id="left" role="navigation">
            <?php include("left.php"); ?>
        </div>
        <div id="profile">
            <div class="profilee">
                <p class="contentt">Welcome to Information Repository System,</p>
                <p class="contenttt"><b>Copyright Policy</b><br>
All the materials on CUTM IRS website are out of copyright however, in case of a possible error in copyright checking, if the author or publisher sends a written request for removal to the address below, such a request will be validated and complied with.
<br><b>Non-commercial Uses Only</b><br>
The CUTM IRS and its contents should be used by registered users only.<br>
    <b>Restricted Access to and Distribution of Content</b><br>
You may not distribute, make available, and/or attempt to make available, any of the content in the CUTM IRS to any other person/body.<br> 
<b>Copyright Notices</b><br>
You agree not to modify, obscure, or remove any copyright notice or other attribution included in the CUTM IRS, and not to authorize others to do so.
<br><b>Disclaimers</b><br>
Fair Use, Educational, and Other Exceptions to Copyright Laws<br>

<br>For any issue please contact:<br>
The CUTM IRS team, <br>
At - Ramchandrapur,
P.O. - Jatni <br> Bhubaneswar,
Dist: Khurda – 752050<br>
Odisha, India<br>
Phone: (0674) 2492496, Fax: (0674) 2490480

            </div>
        </div>  
        <div id="right" role="navigation">
             <?php include("mright.php"); ?>
        </div>
    </div>
    <div>
    <?php include("mfooter.php"); ?>
    </div>
        
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       