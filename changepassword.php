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
                   
	
		$h=mysql_query("SELECT * FROM student where Password='$oldpass' and Regdno='$b'");
		$fetch1=mysql_fetch_array($h);
		$pwd=$fetch1['Password'];
                $name= $fetch1['Name'];
 		if($oldpass==$pwd)
 		{
                    if($confirmpass==$newpass)
                    {
	 		$insert=mysql_query("update student set Password='$newpass' where Regdno='$b'"); 
                        $insert1=mysql_query("update users set user_pass='$newpass' where user_name='$name'"); 
	  		echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Password Change!!!')
                                                    window.location.href='sprofile.php?page=1'
                                                    </SCRIPT>");
                    }
                    else
                    {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('New Password should match with Confirm Password')
                                                    window.location.href='sprofile.php?page=1'
                                                    </SCRIPT>");
                    }
 		}
 		else if($pwd== null)
 		{
                   
                      echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Enter correct old password')
                                                    window.location.href='sprofile.php?page=1'
                                                    </SCRIPT>");
                       
 		}
                 else
                {
                      echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Password not changed. Enter correct Old Password.')
                                                    window.location.href='sprofile.php?page=1'
                                                    </SCRIPT>");
                }
                
 	}



?>