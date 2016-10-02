<?php 
    $con=mysql_connect("localhost","root","");
    mysql_select_db("irs",$con);	
	$query1 = "SELECT * FROM uploaded";
	$result = mysql_query($query1);
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
                   <?php
                        while($row1=mysql_fetch_array($result))
                        {
                                $name=$row1['FileName'];
                                $type=$row1['Extension'];
                                ?>
                        <div class="rect">
                        <a href="download.php?filename=<?php echo $name ;?>" >
                        <?php echo $name ;?></a>
                        </div>
                        <?php }?>
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