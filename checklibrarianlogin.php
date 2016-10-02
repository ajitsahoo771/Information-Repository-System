 <?php

$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);

if(isset($_POST['submit']))
	{
                $d=$_POST['password'];

		$login=mysql_query("select * from manager");
		$row=mysql_fetch_array($login);
		if($row['Password']==$d)
				{
					session_start();
                                        $_SESSION['Regdno']= $_POST['password'];
                                       	header("Location:mindex.php?page=1");
					exit();
				}
                                else
                                {
                                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Invalid Password !')
                                                    window.location.href='librarianlogin.php'
                                                    </SCRIPT>");
                                }
	}
    

?>
