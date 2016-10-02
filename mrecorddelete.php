<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);

			  
			 
				 $id=$_GET['id'];
				 $dlt1=mysql_query("delete from managerqueue where MQid='$id'");
				 echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('File Rejected Successfully !!!')
                                                    window.location.href='mindex.php?page=1'
                                                    </SCRIPT>");
			     echo "$id";
			 
?>