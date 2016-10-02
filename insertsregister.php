
<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);
$a=$_POST['regno'];
$b=$_POST['email'];
$c=$_POST['sname'];
$d=$_POST['gender'];
$e=$_POST['pass'];
$f=$_POST['sphno'];
$g=$_POST['sdept'];
$h=$_POST['ssec'];
$i=$_POST['sbatch'];
$j=$_POST['cpass'];
if(isset($_POST['submit1']))
	{
                if($e==$j)
                
                {
                    $fin = mysql_query("insert into users (user_name, user_pass, user_email ,user_date, user_level) values ('$c','$e','$b',now(),0)");
                    $in=mysql_query("insert into student (Regdno,RegdMail,Name,Gender,Password,Contact,Dept,Sec,Batch)values('$a','$b','$c','$d','$e','$f','$g','$h','$i')");
                    header("Location:index.php");
                }
                else
                {
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Password and Confirm Password Should be same.')
                                                    window.location.href='sregister.php'
                                                    </SCRIPT>");
                }
	}
	else
	header("Location:sregister.php");

?>