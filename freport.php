<?php
session_start();
if(!isset($_SESSION['Regdno']))
{
    header("location:login.php");
}
?>
<?php
    $con=mysql_connect("localhost","root","");
    mysql_select_db("irs",$con);
    $catid = $_GET['id'];
    $category = mysql_query("Select * From category where cid='$catid'");
    $cate = mysql_fetch_array($category);
    $catname = $cate['cname'];

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
    <div id="main" style="height:750px; background: url(images/bg.png) repeat;" >
        <div id="left" role="navigation">
            <?php include("left.php"); ?>
        </div>
        <div id="profile">
            <div class="profilee">
                <p class="contentt">  <?php echo $catname; ?>  List    <img src="images/project.jpg" height="50px" width="50px"></img>
               <input type="search" name="search" id="search" value="" class="form-control" style="width:245px;margin-top:5px" placeholder="Search">
                </p>
               
                <table class = "table" style="background-color:#ffffff " id="tblData">
                    <thead style="color: #6982ee ">
      <tr>
         <th>File Name</th>
         <th>Uploaded By</th> 
         <th>Department</th>
         <th>Uploaded On</th> 
         <th>View</th>
         <th>Download</th> 
      </tr>
   </thead>
   
   <tbody>
       <tr>
             <?php 
             $num_rec_per_page=7;
             if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
            $start_from = ($page-1) * $num_rec_per_page;
            
            $con=mysql_connect("localhost","root","");
            mysql_select_db("irs",$con);
        $select = mysql_query("Select * From uploaded where Category='$catname' LIMIT $start_from, $num_rec_per_page");
       if($select === FALSE) { 
       die(mysql_error());}
       while($row2 = mysql_fetch_array($select))
       { $name= $row2['Extension'];
        ?>
      <tr>
         <td><?php echo $row2['FileName']; ?></td>
         <td><?php echo $row2['Name']; ?></td>
         <td><?php echo $row2['Dept']; ?></td>
         <td><?php echo $row2['Date']; ?></td>
         <td><a href="view.php?filename=<?php echo $name ;?>" target="_NEW"><img src="images/view3.png" height="38px" width="38px"></img></td>
         <td><a href="download.php?filename=<?php echo $name ;?>" ><img src="images/download.png" height="40px" width="40px" style="margin-left: 10px"></img></a></td>
      </tr>
       <?php
       }
       ?>
      </tr>
   </tbody>
</table>
                 <?php 
$sql = "SELECT * FROM uploaded where Category='$catname'"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);
echo '<p style="margin-left:330px">';
$n = $_GET['page'];
$prv=$n-1;
if($prv > 0)
{echo "<a href='freport.php?page=".$prv."&id=".$catid."'>".'Previous<'."</a> "; // Goto 1st page  
}
for ($i=1; $i<=$total_pages; $i++) { 
          echo "<a href='freport.php?page=".$i."&id=".$catid."'>".$i."</a> "; 
            
}; 
$nxt=$page+1;
if($nxt <= $total_pages)
echo "<a href='freport.php?page=".$nxt."&id=".$catid."'>".'>Next'."</a> "; // Goto last page
echo '</p>';
?>
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

