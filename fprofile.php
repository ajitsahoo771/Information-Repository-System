<?php
session_start();
if(!isset($_SESSION['Regdno']))
{
    header("location:login.php");
}
 else 
 {
 ?>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);

$d=$_SESSION['Regdno'];
$fetch=mysql_query("select * from userstore where Regdno='$d'");
$acc=mysql_fetch_array($fetch);
$c = $acc['AccType'];
if($c == "Faculty")
{
   $stu = mysql_query("select * from facstaff where Regdno='$d'");
   $row = mysql_fetch_array($stu);
   $fname = $row['Name'];
   $femail = $row['RegdMail'];
   $fdept = $row['Dept'];
   $fcon = $row['Contact'];
   $fdesg = $row['Designation'];
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IRS</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link href="css/style_1.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap/bootstrap.min.js"></script>
<script>
$(document).ready(function()
{
	$('#search').keyup(function()
	{
		searchTable($(this).val());
	});
});

function searchTable(inputVal)
{
	var table = $('#tblData');
	table.find('tr').each(function(index, row)
	{
		var allCells = $(row).find('td');
		if(allCells.length > 0)
		{
			var found = false;
			allCells.each(function(index, td)
			{
				var regExp = new RegExp(inputVal, 'i');
				if(regExp.test($(td).text()))
				{
					found = true;
					return false;
				}
			});
			if(found == true)$(row).show();
				else $(row).hide();
		}
	});
}
</script>

</head>
<body>
 <?php include("fheader.php"); ?>
    <div id="main" style="height:750px; background: url(images/bg.png) repeat;">
        <div id="left" role="navigation">
            <?php include("left.php"); ?>
        </div>
        <div id="profile">
            <div class="profilee">
                
                <ul id = "myTab" class = "nav nav-tabs">
   <li class = "active">
      <a href = "#home" data-toggle = "tab">Profile</a>
   </li>
   
   <li><a href = "#upl" data-toggle = "tab">Uploads</a></li>
   
  <li><a href = "#edit" data-toggle = "tab">Edit</a></li>
</ul>

<div id = "myTabContent" class = "tab-content">

   <div class = "tab-pane fade in active" id = "home">
       
      <img src="images/teachers.png" height="120px" width="150px" style="margin-top:20px;margin-left: 10px"></img>
         
        <p class="contentt">Faculty/Staff Profile</p>
          <table class="table"  style="background-color:#ffffff ;color: #63bbfa;font-size: 18px;font-family: 'Bree Serif', serif;font-size:20px" >
              <tr>
                  <td>Name: <font style="color: #5a5b5b;font-family: 'Bree Serif'"><?php echo $fname; ?></td>
                  <td></td>
              </tr>
               <tr>
                  <td>Employee Id:<font style="color: #5a5b5b;font-family: 'Bree Serif'"><?php echo $d; ?></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Email Id:<font style="color: #5a5b5b;font-family: 'Bree Serif'"><?php echo $femail; ?></td>
                  <td></td>
              </tr>
               <tr>
                  <td>Department:<font style="color: #5a5b5b;font-family: 'Bree Serif'"><?php echo $fdept; ?></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Designation:<font style="color: #5a5b5b;font-family: 'Bree Serif'"><?php echo $fdesg; ?></td>
                  <td></td>
              </tr>
             <tr>
                  <td>Contact Number:<font style="color: #5a5b5b;font-family: 'Bree Serif'"><?php echo $fcon; ?></td>
                  <td></td>
              </tr>
          </table>
      </p>
   </div>
 
         <div class = "tab-pane fade"id="upl" >
             <p>
               <form enctype="multipart/form-data" action="uploadfilefac.php" name="form" method="post">
                 <p class="contentt">  Upload A File
                 <img src="images/upload.png" height="50px"  width="50px"></img></p>
                <table class="table"  style="background-color:#ffffff ;color: #63bbfa;font-size: 18px;margin-top: 10px;font-family: 'Bree Serif', serif;font-size:20px" >
                    <tr>
                       <td>Title:   <input type="text" name="filename" style="border:2px;width:160px; color: #9d9e9e" class="input" required/></td>
                    </tr>
               <tr>
                    <td>Category:   <select  name="cat" style="color: #9d9e9e" required="required">
                    <option  selected ></option>
                    <option value="Project Report">Project Report</option>
                    <option value="Documents & Files">Documents & Files</option>
                    <option value="Questionnaires">Questionnaires</option>
                    <option value="Lectures & Notes">Lectures & Notes</option>
                    <option value="Videos">Videos</option>
                    <option value="Journals">Journals</option>
                    <option value="Magazines">Magazines</option>
                    <option value="Magazines">Thesis & Dissertation</option>
                        </select></td>
                     </tr>
               <tr>
                       <td> <input type="file" name="photo" id="photo" style="background-color:white  "/>
                           <input type="submit" name="submit" id="submit" value="Submit" style="margin-top:10px;color:white;background-color: #63bbfa ;height:28px;width:100px" />    </td>
                   
               </tr>
           </table>
          </form>
             </p>
             <p class="contentt">  My Uploads
                <img src="images/upload.png" height="50px"  width="50px"></img><input type="search" name="search" id="search" value="" class="form-control" style="width:245px;margin-top:5px" placeholder="Search">
                </p>
                <table class = "table table-striped" style="background-color:#ffffff " id="tblData">
              
   <thead>
      <tr>
         <th>Category</th>
         <th>File Name</th>
         <th>Published On</th> 
      </tr>
   </thead>
   
   <tbody>
       <?php 
        
       $num_rec_per_page=5;
             if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
            $start_from = ($page-1) * $num_rec_per_page;
       
       $select = mysql_query("Select * From uploaded  where Regdno='$d'  LIMIT $start_from, $num_rec_per_page");
       while($row2 = mysql_fetch_array($select))
       {
        ?>
      <tr>
         <td><?php echo $row2['Category']; ?></td>
         <td><?php echo $row2['FileName']; ?></td>
         <td><?php echo $row2['Date']; ?></td>
      </tr>
       <?php
       }
       ?>
   </tbody>
   
</table>
     <?php 
$sql = "SELECT * FROM uploaded where Regdno='$d'"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);
echo '<p style="margin-left:330px">';
$n = $_GET['page'];
$prv=$n-1;
if($prv > 0)
{echo "<a href='fprofile.php?page=".$prv."'>".'Previous<'."</a> "; // Goto 1st page  
}
for ($i=1; $i<=$total_pages; $i++) { 
          echo "<a href='fprofile.php?page=".$i."'>".$i."</a> "; 
            
}; 
$nxt=$page+1;
if($nxt <= $total_pages)
echo "<a href='fprofile.php?page=".$nxt."'>".'>Next'."</a> "; // Goto last page
echo '</p>';

?>
         </div>
   <div class = "tab-pane fade" id = "edit">
      <p>
      
<form name="login-form" action="fchangepassword.php" method="post" >
<table class="table"  style="background-color:#ffffff ;color: #63bbfa;font-size: 18px;margin-top: 10px;font-family: 'Bree Serif', serif;font-size:20px" >
    <p class="contentt">Change Your Password     <img src="images/edit.png" height="45px"  width="45px"></img></p>
    <tr><td>Old Password:   <input name="oldpass" type="password" class="input username"  required="required"/></td>
    </tr>
    <tr><td>New Password:   <input name="newpass" type="password" class="input username"   required="required"/></td>
    </tr>
    <tr><td>Confirm Password:  <input name="confirmpass" type="password" class="input username"  required="required"/></td>
    </tr>    
    
      <td><input type="submit" name="submit" value="Change" style="margin-top:10px;color:white;background-color: #63bbfa ;height:28px;width:100px;border-color: #002468" />
</table>
</form>
</p>
   </div>
 </div>

            </div>
        </div>  
        <div id="right" role="navigation">
             <?php include("fright.php"); ?>
        </div>
    </div>
    <div>
    <?php include("ffooter.php"); ?>
    </div>
        
</body>
</html>
<?php
 }
 ?>
