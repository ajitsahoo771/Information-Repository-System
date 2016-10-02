
<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);
$a=$_POST['regno'];
$b=$_POST['email'];
$c=$_POST['fname'];
$d=$_POST['gen'];
$e=$_POST['pass'];
$f=$_POST['phn'];
$g=$_POST['dept'];
$h=$_POST['desg'];
$j=$_POST['cpass'];

if(isset($_POST['submit']))
	{
            if($e==$j)
                
                {
                        $fin = mysql_query("insert into users (user_name, user_pass, user_email ,user_date, user_level) values ('$c','$e','$b',now(),0)");
                       $in=mysql_query("insert into facstaff (Regdno,RegdMail,Name,Gender,Password,Contact,Dept,Designation)values('$a','$b','$c','$d','$e','$f','$g','$h')");
                       header("Location:login.php");
                 }
                else
                {
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Password and Confirm Password Should be same.')
                                                    window.location.href='fregister.php'
                                                    </SCRIPT>");
                }
	}
	else
	header("Location:fregister.php");

?>