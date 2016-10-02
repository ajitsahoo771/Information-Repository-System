
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['feedback'];
if(isset($_POST['submit']))
	{
	 $in=mysql_query("insert into feedback (Name,Email,Feedback)values('$a','$b','$c')");
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Feedback Submitted Successfully')
                                                    window.location.href='index.php'
                                                    </SCRIPT>");
	}
	else
	echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Feedback Not Submitted Successfully')
                                                    window.location.href='feedback.php'
                                                    </SCRIPT>");

?>