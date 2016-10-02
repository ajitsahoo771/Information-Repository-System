<?php
session_start();
if(!isset($_SESSION['Regdno']))
{
    header("location:librarianlogin.php");
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
 <?php include("mheader.php"); ?>
    <div id="main" style="height:750px; background: url(images/bg.png) repeat;" >
        <div id="left" role="navigation">
            <?php include("left.php"); ?>
        </div>
        <div id="profile">
            <div class="profilee">
                <p class="contentt">  Registered Student List
                    <img src="images/project.jpg" height="50px" width="50px"></img>
                    <input type="search" name="search" id="search" value="" class="form-control" style="width:245px;margin-top:5px" placeholder="Search">
                </p>
                <table class = "table table-striped" style="background-color:#ffffff ;font-size:15px" id="tblData">
              
                    <thead style="color: #6982ee ">
      <tr>
         <th>Regd No</th>
         <th>Name</th>
         <th>Regd Mail</th> 
         <th>Contact</th>
         <th>Dept</th> 
         <th>Section</th>
         <th>Batch</th> 
      </tr>
   </thead>
   
   <tbody>
       <tr>
            <?php 
            $num_rec_per_page=12;
             if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
            $start_from = ($page-1) * $num_rec_per_page;
            
            $con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);
       $select = mysql_query("Select * From student LIMIT $start_from, $num_rec_per_page");
       if($select === FALSE) { 
       die(mysql_error());}
       while($row2 = mysql_fetch_array($select))
       {
        ?>
      <tr>
         <td><?php echo $row2['Regdno']; ?></td>
         <td><?php echo $row2['Name']; ?></td>
         <td><?php echo $row2['RegdMail']; ?></td>
         <td><?php echo $row2['Contact']; ?></td>
         <td><?php echo $row2['Dept']; ?></td>
         <td><?php echo $row2['Sec']; ?></td>
         <td><?php echo $row2['Batch']; ?></td>
      </tr>
       <?php
       }
       ?>
      </tr>
   </tbody>
   
</table>
                      <?php 
$sql = "SELECT * FROM student"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);
echo '<p style="margin-left:330px">';
$n = $_GET['page'];
$prv=$n-1;
if($prv > 0)
{echo "<a href='mstudent.php?page=".$prv."'>".'Previous<'."</a> "; // Goto 1st page  
}
for ($i=1; $i<=$total_pages; $i++) { 
          echo "<a href='mstudent.php?page=".$i."'>".$i."</a> "; 
            
}; 
$nxt=$page+1;
if($nxt <= $total_pages)
echo "<a href='mstudent.php?page=".$nxt."'>".'>Next'."</a> "; // Goto last page
echo '</p>';

?>
            </div>
        </div>  
        <div id="right" role="navigation">
             <?php include("mright.php"); ?>
        </div>
    </div>
    <div>
    <?php include("mfooter.php"); ?>
    </div>
        
</body>
</html>
