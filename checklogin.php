 <?php

$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);

if(isset($_POST['submit']))
	{
		$a=$_POST['userid'];
		$d=$_POST['password'];

		$login=mysql_query("select * from facstaff where Regdno='$a' and Password='$d'");
		$login1=mysql_query("select * from student where Regdno='$a' and Password='$d'");
		$row=mysql_fetch_array($login);
		$stud=mysql_fetch_array($login1);
		if($row['Regdno']==$a && $row['Password']==$d)
				{
					session_start();
                                        $_SESSION['Regdno']=$_POST['userid'];
					header("Location:findex.php");
					exit();
				}
				else if($stud['Regdno']==$a && $stud['Password']==$d)
				{
                                        session_start();
                                        $_SESSION['Regdno']=$_POST['userid'];	
				header("Location:sindex.php");
					exit();	
				}
                                else
                                {
                                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Invalid User Id Or Password !')
                                                    window.location.href='login.php'
                                                    </SCRIPT>");
                                }
	}
    

?>