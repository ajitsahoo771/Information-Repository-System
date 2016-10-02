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
                   
	
		$i=mysql_query("SELECT * FROM manager where Password='$oldpass'");
		$fetch=mysql_fetch_array($i);
		$pwd=$fetch['Password'];
 		if($oldpass==$pwd)
 		{
                    if($confirmpass==$newpass)
                    {
	 		$insert=mysql_query("update manager set Password='$newpass'"); 
	  		echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Password Change!!!')
                                                    window.location.href='mindex.php?page=1'
                                                    </SCRIPT>");
                    }
                    else
                    {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('New Password should match with Confirm Password')
                                                    window.location.href='medit.php'
                                                    </SCRIPT>");
                    }
 		}
 		
 		else if($pwd== null)
 		{
                   
                      echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Enter correct old password.')
                                                    window.location.href='medit.php'
                                                    </SCRIPT>");
                      
 		}
                else
                {
                      echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Password not changed. Enter correct Old Password.')
                                                    window.location.href='medit.php'
                                                    </SCRIPT>");
                       
                }
                
 	}



?>