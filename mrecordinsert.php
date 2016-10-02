
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);
$id=$_GET['id'];
			 
			 //echo " id is $id";
			  
			   $slct=mysql_query("select * from managerqueue where MQid='$id'");
			   $row=mysql_fetch_array($slct);
			   $rn=$row['Regdno'];
			   $rm=$row['RegdMail'];
			   $nm=$row['Name'];
			   $act=$row['AccType'];
			   $cnt=$row['Contact'];
			   $dpt=$row['Dept'];
			   $xtn=$row['Extension'];
			   $dt=$row['Date'];
			   $cat=$row['Category'];
			   $fn=$row['FileName'];
			  
			  $in=mysql_query("insert into uploaded (Regdno,RegdMail,Name,AccType,Dept,Contact,Category,FileName,Extension,Date)values('$rn','$rm','$nm','$act','$dpt','$cnt','$cat','$fn','$xtn','$dt')");
			 
			  if($in==TRUE)
			  {
				 $dlt=mysql_query("delete from managerqueue where MQid='$id'");
				 echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('File Accepted Successfully !!!')
                                                    window.location.href='mindex.php?page=1'
                                                    </SCRIPT>");
			 }
			
			 
			 
			 
			 ?>

