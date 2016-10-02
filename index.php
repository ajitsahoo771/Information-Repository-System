<?php
session_start();
session_destroy();
session_unset();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IRS</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>

</head>
<body>
 <?php include("header.php"); ?>
    <div id="main" style="height:750px; background: url(images/bg.png) repeat;" >
        <div id="left" role="navigation">
            <?php include("left.php"); ?>
        </div>
        <div id="profile">
            <div class="profilee">
                <p class="contentt">Welcome to Information Repository System,</p>
                <p class="contenttt">Information Repository System (IRS) is a digital collection of freely accessible study materials, journals, magazines, lecture notes and video lectures etc. IRS project started with the vision to archive all the contents of the CUTM Library.
                    <br>As a first step in realizing this vision, it is proposed to create the Digital Library with a free-to-read, searchable collection of freely accessible study materials, journals, magazines, lecture notes and video lectures etc.</p>
                <p class="contenttt">We need your feedback to improve the services and website look and feel.<br> We will appreciate you if you can send your feedback to us at: <a href="#"> feedback.irs.cutm@gmail.com</a></p>
            </div>
        </div>  
        <div id="right" role="navigation">
             <?php include("right.php"); ?>
        </div>
    </div>
    <div>
    <?php include("footer.php"); ?>
    </div>
        
</body>
</html>