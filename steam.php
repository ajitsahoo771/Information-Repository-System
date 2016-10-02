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
</head>

</head>
<body>
 <?php include("sheader.php"); ?>
    <div id="main" style="height:750px; background: url(images/bg.png) repeat;" >
        <div id="left" role="navigation">
            <?php include("left.php"); ?>
        </div>
        <div id="profile">
            <div class="profilee">
                <p class="contentt">Developers       <img src="images/team1.png" height="60px" width="70px"></img></p>
                
                    <table class="table" style="background-color:white">
                        <tr>
                            <td><img src = "images/ajitsir.jpg" class = "img-rounded" height="120px" width="150px"></td>
                            <td><p class="contenttt">Name : Mr. Ajit Kumar Pasayat<br>Designation : Asst. Professor<br>Email Id : ajit.pasayat@cutm.ac.in<br>Department : Computer Science</td>
                        </tr>
                        <tr>
                            <td><img src = "images/nisha.jpg" class = "img-rounded" height="120px" width="150px"></td>
                            <td><p class="contenttt">Name : Nisha Agarwal<br>Regd No : 130301CSR030<br>Email ID : 130301csr030@cutm.ac.in<br>Branch : Computer Science<br>Batch : 2013-2017</td>
                        </tr>
                        <tr>
                            <td><img src = "images/salman1.jpg" class = "img-rounded" height="120px" width="150px"></td>
                            <td><p class="contenttt">Name : Mohammad Salman Haider<br>Regd No : 130301CSR018<br>Email ID : 130301csr018@cutm.ac.in<br>Branch : Computer Science<br>Batch : 2013-2017</td>
                        </tr>
                        <tr>
                            <td><img src = "images/ajit.jpg" class = "img-rounded" height="120px" width="150px"></td>
                            <td><p class="contenttt">Name : Ajit Kumar Sahoo<br>Regd No : 130301CSR017<br>Email ID : 130301csr017@cutm.ac.in<br>Branch : Computer Science<br>Batch : 2013-2017</td>
                        </tr>
                        
                    </table>
                    </p>
            </div>
        </div>  
        <div id="right" role="navigation">
             <?php include("sright.php"); ?>
        </div>
    </div>
    <div>
    <?php include("sfooter.php"); ?>
    </div>
        
</body>
</html>