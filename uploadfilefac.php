<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
    mysql_select_db("irs",$con);
    session_start();
    $d=$_SESSION['Regdno']; 
$fetch=mysql_query("select * from userstore where Regdno='$d'");
$acc=mysql_fetch_array($fetch);
$c = $acc['AccType'];
if($c == "Student")
{
   $stu = mysql_query("select * from student where Regdno='$d'");
   $row = mysql_fetch_array($stu);
   $sname = $row['Name'];
   $semail = $row['RegdMail'];
   $sdept = $row['Dept'];
   $scon = $row['Contact'];
}
elseif($c == "Faculty")
{
    $stu = mysql_query("select * from facstaff");
   $row = mysql_fetch_array($stu);
   $sname = $row['Name'];
   $semail = $row['RegdMail'];
   $sdept = $row['Dept'];
   $scon = $row['Contact'];
}
// Upload A File
if(isset($_POST['submit'])!=""){
    $filename = $_POST['filename'];
$scat = $_POST['cat'];
$exten = $_POST['ext'];
$name=$_FILES['photo']['name'];
$size=$_FILES['photo']['size'];
$type=$_FILES['photo']['type'];
$temp=$_FILES['photo']['tmp_name'];
$caption1=$_POST['caption'];
$link=$_POST['link'];
move_uploaded_file($temp,"files/".$name);
$insert=mysql_query("insert into managerqueue(Regdno,RegdMail,Name,Contact,Dept,AccType,Category,FileName,Extension,Date)values('$d','$semail','$sname','$scon','$sdept','$c','$scat','$filename','$name',now())");
if($insert){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('File Uploaded in the Managerqueue.Wait for the Approval!!!')
    window.location.href='fprofile.php?page=1'
    </SCRIPT>");
}
else{
die(mysql_error());
}
}
?>