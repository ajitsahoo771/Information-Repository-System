<?php
session_start();

$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);
      if(isset($_POST['submit']))
      {
     	$oldpass=$_POST['oldpass'];
      	$newpass=$_POST['newpass'];
      	$confirmpass=$_POST['confirmpass'];
		$b=$_SESSION['Regdno'];
                   
	
		$i=mysql_query("SELECT * FROM facstaff where Password='$oldpass' and Regdno='$b'");
		$fetch2=mysql_fetch_array($i);
		$pwd2=$fetch2['Password'];
 		$name= $fetch2['Name'];
 		if($oldpass==$pwd2)
 		{
                       if($confirmpass==$newpass)
                    {
                        $insert=mysql_query("update facstaff set Password='$newpass' where Regdno='$b'"); 
                        $insert1=mysql_query("update users set user_pass='$newpass' where user_name='$name'"); 
	  		("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Password Change!!!')
                                                    window.location.href='fprofile.php?page=1'
                                                    </SCRIPT>");
                          header("location:fprofile.php?page=1");
                    }
                        else
                    {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('New Password should match with Confirm Password')
                                                    window.location.href='fprofile.php?page=1'
                                                    </SCRIPT>");
                    }
 		}
 		else if( $pwd2== null)
 		{
                   
                      echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Enter correct old password')
                                                    window.location.href='fprofile.php?page=1'
                                                    </SCRIPT>");
                       
 		}
                 else
                {
                      echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Password not changed')
                                                    window.location.href='fprofile.php?page=1'
                                                    </SCRIPT>");
                       
                }
                
 	}



?>