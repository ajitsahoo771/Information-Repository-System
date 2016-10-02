<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
    session_start();
    $regn = $_SESSION['Regdno'];
    $mail = $_SESSION['RegdMail'];
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link href="css/register.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>

<!----validation--->
<script>
    function formValidation()  
        {  
            var passid = document.login.pass; 
            var cpassid = document.login.cpass;
            var uname = document.login.sname;   
            var uphn = document.login.sphno;
            if(passid_validation(passid,7,12))  
            {  
                if(allLetter(uname))  
                    {  
                        if(allnumeric(uphn))  
                                {  
                                  
                                }
                    } 
            }
            return false;  
       }   
    function passid_validation(passid,mx,my)  
    {  
        var passid_len = passid.value.length;  
        if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
        {  
            alert("Password should not be empty / length be between "+mx+" to "+my);  
            passid.focus();  
            return false;  
        }  
        return true;  
    } 
    function allLetter(uname)  
    {   
        var letters =  /^[a-zA-Z ]+$/ ;
        if(uname.value.match(letters))  
        {  
            return true;  
        }  
        else  
        {  
            alert('Username must have alphabet characters only');  
            uname.focus();  
            return false;  
        }  
    }  
     
    /*function allnumeric(uphn)  
    {   
        var numbers = /^\d{10}$/;  
        if(uphn.value.match(numbers))  
        {  
            alert('Form Succesfully Submitted');  
           window.location.reload()
            return true;  
        }  
        else  
        {  
            alert('Enter correct Phone Number');  
            uphn.focus();  
            return false;  
        }  
    }*/   
</script>
<!--- End of Validation --->
</head>
<body onload="document.login.pass.focus();">
 <?php include("header.php"); ?>
    <div id="main" style="height:650px; background: url(images/bg.png) repeat;">
<div id="wrapper">
<form name="login" class="login" onSubmit="return formValidation()" action="insertsregister.php" method="post">

    <div class="header">
    <h1>Student Registration</h1>
   <span style="font-family: 'Bree Serif', serif;font-weight: 10;font-size: 15px;line-height:34px;text-shadow: 1px 1px 0 rgba(256,256,256,1.0);">Fill out the form below to register.</span>
    </div>
    <div class="content">
       <fieldset class="row1">
           <legend style="font-family: 'Bree Serif', serif; color: #3683a3">Account Details</legend>
           <table> 
               <tr> <td>Registration Number </td>
                   <td> <input name="regno" type="text" style="margin-left:10px" class="input" value="<?php echo $regn; ?>" readonly/> </td>
                      <td><p  style="text-align: right">Email</p> </td>
                     <td><input name="email" type="email" style="margin-left:10px" class="input" value="<?php echo $mail;?>" readonly/> </td>
                </tr>
                <tr style="margin-top:10px">
                    <td  style="margin-top:10px"><p  style="text-align: right">*Password</p></td>
                    <td><input name="pass" type="password" style="margin-left:10px" required="required" class="input" /></td>
                    <td><p  style="text-align: right">*Confirm Password</p></td>
                    <td><input name="cpass" type="password" style="margin-left:10px" required="required" class="input" /></td>
                </tr> 
             </table>  
       </fieldset>
        <fieldset class="row2">
                <legend style="font-family: 'Bree Serif', serif; color: #3683a3">Personal Details</legend>
                <table><tr>
                        <td><p  style="text-align: right;margin-left:100px">*Name</p> </td>
                        <td><input type="text" name="sname" style="margin-left:8px" required="required" class="input"/></td>
                    <td><p  style="text-align: right;margin-left:35px">*Phone Number</p></td>
                    <td><input type="text" maxlength="10" style="margin-left:5px" name="sphno" required="required" class="input"/></td>
                    </tr>
                <tr>
                    <td><p  style="text-align: right;margin-left:50px">*Department</p> </td>
                    <td><select name="sdept" style="margin-left:8px;color: #9d9e9e;font-weight: 10" required="required" >
                    <option  selected ></option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="MECH">MECH</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="EE">EE</option>
                        </select></td>
                    <td><p  style="text-align: right;margin-left:30px">*Section </td>
                    <td><select  name="ssec" style="margin-left:5px;color: #9d9e9e;font-weight: 10;" required="required">
                    <option  selected ></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                        </select></td>
                </tr>
                 <tr> 
                    <td><p  style="text-align: right;margin-left:50px">*Batch</p> </td>
                    <td><select  name="sbatch" style="margin-left:8px;color: #9d9e9e;font-weight: 10;" required="required">
                    <option  selected ></option>
                    <option value="2008-2012">2008-2012</option>
                    <option value="2009-2013">2009-2013</option>
                    <option value="2010-2014">2010-2014</option>
                    <option value="2011-2015">2011-2015</option>
                    <option value="2012-2016">2012-2016</option>
                    <option value="2013-2017">2013-2017</option>
                    <option value="2014-2018">2014-2018</option> 
                    <option value="2015-2019">2015-2019</option> 
                    </select></td>
                     <td><p  style="text-align: right;margin-left:50px">*Gender</p></td>
                     <td><input style="margin-left:5px" id="male" name="gender" type="radio" required="required" value="Male"/>
                     <font  class="gender">Male</font> 
                     <input type="radio" id="female" name="gender" value="Female"/>
                     <font class="gender">Female</td>
                    
                    
                 </tr>
                </table>
            </fieldset>
         
   
    </div>
    <div class="footer">
               <table><tr>
                
                <td><input type="submit" name="submit1" style="margin-left: 530px" value="Register" class="button" /></td>
                </tr>
             </table>    
    </div>
</form>
</div>
    </div>
    <?php include("footer.php"); ?>

</body>
</html>