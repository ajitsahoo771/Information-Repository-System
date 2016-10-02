<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);

if(isset($_POST['submit']))
	{
		$a=$_POST['email'];
		$b=$_POST['name'];
		session_start();
		
		$login=mysql_query("select * from userstore where RegdMail='$a'");
		$row=mysql_fetch_array($login);
		$c = $row['AccType'];
                $reg = $row['Regdno'];
                        if(mysql_num_rows($login) !=0)

			{
				$_SESSION['RegdMail']=$_POST['email'];
                                //Start of the Mailing
                                $_SESSION['Regdno']=$reg;
                                include 'mail/email.php';
                                            if($c == 'Student')
                                            { $msg="
                                              Dear   $b,
                                                          <p>To complete Registration,click the link below,
                                                          http://localhost/IRS/sregister.php<br>http://10.1.0.201
                                               <p style='color:red;'>| This is an auto-generated email. Please do not reply. |</p>";
                                            }
                                            else
                                             {
                                                $msg="
                                              Dear   $b,
                                                          <p> To complete Registration,click the link below,
                                                          http://localhost/IRS/fregister.php<br>http://10.1.0.201 <br>
                                               <p style='color:red;'>| This is an auto-generated email. Please do not reply. |</p>";
                                             }
                                           $mail->From = $from1;
                                           $mail->FromName = "Information Repository System"; // Name to indicate where the email came from when the recepient received
                                           $mail->AddAddress($a); // this is for receiver mail id
                                           $mail->WordWrap = 50; // set word wrap
                                           $mail->IsHTML(true); // send as HTML
                                           $mail->Subject = "New Registration "; //used for mail subject
                                           $mail->Body =$msg; //HTML Body
                                           if(!$mail->Send())
                                           {
                                               echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Some Error Occurred. Check Your Connection!')
                                                    window.location.href='validate.php'
                                                    </SCRIPT>");
                                           }
                                           else{
                                                echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('To complete Registration. Open the provided Email Id.')
                                                    window.location.href='validate.php'
                                                    </SCRIPT>");
                                           }
                                         //end of the mailing
 
                              
			}

			else
			{
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Provided Email Id is NOT Registered.')
                                                    window.location.href='validate.php'
                                                    </SCRIPT>");
			}
	}

?>
