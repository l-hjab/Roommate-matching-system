<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Room Details</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top:2%">Rooms Details</h2>
						<div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Aberdare Hostel (Room 101)</strong>
               <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="450" height="300" src="img/R.jpg" alt="js_pic">
            </div>
              <a href="{% url 'noc_form' %}" class="stretched-link">It has 3 beds</a>
			  <p>6 Roommates Per Room <br>
			   Cost Ksh 10,000 per Semester
			   <br><strong style="color:orangered;">(Female Hostel)</strong><br></p>
			   
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-relative">
            <strong class="d-inline-block mb-2 text-primary">Kilimanjaro Hostel (Room 102)</strong>
               <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="450" height="300" src="img/room3.jpg" alt="js_pic">
            </div>
              <a href="{% url 'noc_form' %}" class="stretched-link">It has 2 beds</a>
			  <p>4 Roommates Per Room <br>
			   Cost Ksh 12,000 per Semester
			   <br><strong style="color:orangered;">(Female Hostel)</strong><br></p>
			   
          </div>
        </div>
      </div>
	  <!--Room 2 -->
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
             <strong class="d-inline-block mb-2 text-primary">Venus Hostel (Room 103)</strong>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="450" height="300" src="img/room7.jpg"  alt="react_pic">
          </div>
            <a href="{% url 'mess_committee' %}" class="stretched-link">It has 1 beds</a>
			<p>2 Roommates Per Room <br>
			   Cost Ksh 16,000 per Semester
			   <br><strong style="color:orangered;">(Female Hostel)</strong><br></p>
			   
          </div>
        </div>
      </div>
	  <!--Room 3 -->
	  <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
           <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Mount-Kenya Hostel (Room 111)</strong>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="450" height="300" src="img/bed1.jpg"  alt="react_pic">
          </div>
             <a href="{% url 'noc_form' %}" class="stretched-link">It has 2 beds</a>
			  <p>4 Roommates Per Room <br>
			   Cost Ksh 11,000 per Semester
			   <br><strong style="color:orangered;">(Male Hostel)</strong><br></p>
			   
        </div>
      </div>
    </div>
  </div>
    <!--Room 4 -->
	<div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
             <strong class="d-inline-block mb-2 text-primary">Pluto Hostel (Room 112)</strong>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="450" height="300" src="img/room6.jpg"  alt="react_pic">
          </div>
            <a href="{% url 'mess_committee' %}" class="stretched-link">It has 3 beds</a>
			<p>6 Roommates Per Room <br>
			   Cost Ksh 10,000 per Semester
			   <br><strong style="color:orangered;">(Male Hostel)</strong><br></p>
			   
          </div>
        </div>
      </div>
	  <!--Room 5 -->
	  <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
           <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Jupiter  Hostel (Room 113)</strong>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="450" height="300" src="img/room5.jpg"  alt="react_pic">
          </div>
             <a href="{% url 'noc_form' %}" class="stretched-link">It has 1 bed</a>
			  <p>2 Roommates Per Room <br>
			   Cost Ksh 18,000 per Semester
			   <br><strong style="color:orangered;">(Male Hostel)</strong><br></p>
			   
        </div>
      </div>
    </div>
  </div>
  <h2 style="color:#F5A623;">Booked Room Information</h2>

							
							<div class="panel-body">
								<table id="zctb" class="table table-bordered " cellspacing="0" width="100%">
									
									
									<tbody>
<?php	
$aid=$_SESSION['login'];
	$ret="select * from registration where emailid=?";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('s',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>

<tr>
<td colspan="4"><h4>Room Realted Info</h4></td>
<td><a href="javascript:void(0);"  onClick="popUpWindow('http://localhost/hostel/full-profile.php?id=<?php echo $row->emailid;?>');" title="View Full Details">Print Data</a></td>
</tr>
<tr>
<td colspan="6"><b>Reg no. :<?php echo $row->postingDate;?></b></td>
</tr>



<tr>
<td><b>Room no :</b></td>
<td><?php echo $row->roomno;?></td>
<td><b>Seater :</b></td>
<td><?php echo $row->seater;?></td>
<td><b>Fees PM :</b></td>
<td><?php echo $fpm=$row->feespm;?></td>
</tr>

<tr>
<td><b>Food Status:</b></td>
<td>
<?php if($row->foodstatus==0)
{
echo "Without Food";
}
else
{
echo "With Food";
}
;?></td>
<td><b>Stay From :</b></td>
<td><?php echo $row->stayfrom;?></td>
<td><b>Duration:</b></td>
<td><?php echo $dr=$row->duration;?> Months</td>
</tr>

<tr>
<td colspan="6"><b>Total Fee : 
<?php if($row->foodstatus==1)
{ 
$fd=2000; 
echo (($dr*$fpm)+$fd);
}
else
{
echo $dr*$fpm;
}
?></b></td>
</tr>
<tr>
<td colspan="6"><h4>Personal Info Info</h4></td>
</tr>

<tr>
<td><b>Reg No. :</b></td>
<td><?php echo $row->regno;?></td>
<td><b>Full Name :</b></td>
<td><?php echo $row->firstName;?><?php echo $row->middleName;?><?php echo $row->lastName;?></td>
<td><b>Email :</b></td>
<td><?php echo $row->emailid;?></td>
</tr>


<tr>
<td><b>Contact No. :</b></td>
<td><?php echo $row->contactno;?></td>
<td><b>Gender :</b></td>
<td><?php echo $row->gender;?></td>
<td><b>Course :</b></td>
<td><?php echo $row->course;?></td>
</tr>


<tr>
<td><b>Emergency Contact No. :</b></td>
<td><?php echo $row->egycontactno;?></td>
<td><b>Guardian Name :</b></td>
<td><?php echo $row->guardianName;?></td>
<td><b>Guardian Relation :</b></td>
<td><?php echo $row->guardianRelation;?></td>
</tr>

<tr>
<td><b>Guardian Contact No. :</b></td>
<td colspan="6"><?php echo $row->guardianContactno;?></td>
</tr>

<tr>
<td colspan="6"><h4>Addresses</h4></td>
</tr>
<tr>
<td><b>Correspondense Address</b></td>
<td colspan="2">
<?php echo $row->corresAddress;?><br />
<?php echo $row->corresCIty;?>, <?php echo $row->corresPincode;?><br />
<?php echo $row->corresState;?>


</td>
<td><b>Permanent Address</b></td>
<td colspan="2">
<?php echo $row->pmntAddress;?><br />
<?php echo $row->pmntCity;?>, <?php echo $row->pmntPincode;?><br />
<?php echo $row->pmnatetState;?>	

</td>
</tr>


<?php
$cnt=$cnt+1;
} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
