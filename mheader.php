<!DOCTYPE HTML>
<html>
<head>
     <title>Header</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
</head>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<body onload="startTime()">
    <div></div>
<div class="banner">	  
	 <div class="header">
			 <div class="logo" style="margin-left:120px">
				<a href="mindex.php"><img src="images/Logo.gif" alt="" height="200px" width="180px" /></a>
			 </div>
             <div id="date" style="color:white;margin-left:1100px"><div id="txt"style="margin-left: 100px"></div> <?php $mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";?></div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="mindex.php?page=1">Home</a></li>
                                         <li><a href="http://localhost/Forum/signin.php" onclick="return confirm('Are you sure ? Your Session will expire if you proceed.')">Forum</a></li>
					 <li><ul class="menuTemplate2 decor2_1" license="mylicense"> 
					 <li><a href="#" class="arrow" style="margin-bottom: 13px">Users</a>
                                              <div class="drop decor2_2" style="width: 100px;">
                                                    <div>
                                                        <a href="mstudent.php?page=1">Student</a><br />
                                                        <a href="mfaculty.php?page=1">Faculty/Staff</a><br />
                                                        <a href="mfeedback.php?page=1">Feedback</a><br />
                                                    </div>
                                             </div>
                                         </li></ul> 
                                         <li><ul class="menuTemplate2 decor2_1" license="mylicense"> 
                                         <li><a href="#" class="arrow" style="margin-bottom: 13px">My Account</a>
                                              <div class="drop decor2_2" style="width: 100px;">
                                                    <div>
                                                        <a href="medit.php">Edit</a><br />
                                                        <a href="mlogout.php">Logout</a><br />
                                                    </div>
                                             </div>
                                         </li></ul>
				 </ul>
                         </div><br><br><br>
                                  
         </div>
</div>
</body>
</html>
	