
<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
if(isset($_POST['submit']))
{
$sleep=$_POST['sleep'];
$study=$_POST['study'];
$social=$_POST['social'];
$course=$_POST['course'];
$hobbie=$_POST['hobbie'];
$party=$_POST['party'];
$query="insert into  behaviourpref(sleep,study,social,course,hobbie,party) values(?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssss',$sleep,$study,$social,$course,$hobbie,$party);
$stmt->execute();
echo"<script>alert('Roommate Search is in progress');</script>";
}
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
	<link rel="stylesheet" href="css/iframe.css">
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

<style>
	#btn2{
		scroll-behavior: smooth;
	}
	.col1{
		display: none;
  padding: 20px;
  background-color:snow;
  border-radius: 10px;
  display:none;
  border:none;
}
.col1 .row1{
  margin-left: 20px;
  flex-basis: 40%;
  border-radius: 5%;
  border:1px solid gray;
  text-align: center;
  padding: 15px;
}

.btn-select{
  background-color: #325d88;
  border-color: transparent;
  color: #ffffff;
  display: inline-block;
  text-align: center;
  border-radius:8px;
}
#myDiv {
        display: none;
		
        
    }

</style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top:5%">Find Roommate</h2>
						<div id="container">
						<div class="panel panel-primary">
									<div class="panel-heading">Behaviour Preference for Your Desired Roommate</div>
									<div class="panel-body">
<form form method="post" action="" name="behaviourpref">
	<div class="cols3">
		<label class="col-sm-2 control-label">Sleeping Habits :</label>
		<select name="sleep" id="" class="form-control" required="required">
			<option value="Early Night">Early Night</option>
			<option value="	Late Night" name="Late Night">Late  Night</option>
			<option value="N/A" selected>Select Option</option>
		</select>
</div>
	
	<div class="cols3">
		<label class="col-sm-2 control-label">Study Habits :</label>
		<select name="study" class="form-control" required="required">
		<option value="" >Select Option</option>

		    <option value="">Select Option</option>
			<option value="Group Study">Group Study</option>
			<option value="Self Study">Self Study</option>
			<option value="Library Goer">Library Goer</option>
			
		</select>
	</div>
	<div class="cols3">
		<label for="" class="col-sm-2 control-label">Socializing</label>
		<select name="social" id="" class="form-control" required="required">
			<option value="" >Select Option</option>
			<option value="Introvert">Introvert</option>
			<option value="Extrovert">Extrovert</option>
			<option value="">Balanced</option>
			
		</select>
	</div>

	<div class="cols3">
		<label for="" class="col-sm-2 control-label">Select Course :</label>
		<select name="course" id="" class="form-control" required="required">
		<option value="" >Select Option</option>
			<option value="Undergraduate">Undergraduate</option>
			<option value="Postgraduate">Postgraduate</option>
			<option value="Diploma">Diploma</option>
			
		</select>
	</div>

	<div class="cols3">
		<label for="" class="col-sm-2 control-label">Hobbies :</label>
		<select name="hobbie" id="" class="form-control" required="required">
		<option value="" >Select Option</option>
			<option value="Movies">Movies</option>
			<option value="Sports">Sports</option>
			<option value="Hiking">Hiking</option>
			<option value="Swimming">Swimming</option>
			
		</select>
	</div>

	<div class="cols3">
		<label for="" class="col-sm-2 control-label">Party Preference :</label>
		<select name="party" id="" class="form-control" required="required">
		<option value="" >Select Option</option>
			<option value="partying">Partying</option>
			<option value="not-partying">Not Parting</option>		
		
		</select>
	</div>
<div>
</form>            

<div class="col-sm-6 col-sm-offset-4">
<input type="submit" id="search" name="submit" Value="Submit "  class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						
				<!--Find roommate-->
				<form id="myForm" >
				<button type="button" class="btn btn-primary" id="showDivBtn" style="color:white;border-radius:8px; border:none;" onclick="smoothScroll(document.getElementById('myDiv'))">Choose Roomate</button>
</form>

<div id="myDiv">
    <h2 class="page-title" style="font-size:18px; text-align:center" >Roommates with Your Preference</h2>
				<div class="col1" style="display:flex;">
				<div class="row1">
					<h3>Jane Muthengi</h3>
				<p>Behaviour </p>
				<form action="" name="name">
										<ol style="text-align:left;">
											<li>Introvert</li>
											<li>Early night</li>
											<li>Partying</li>
											<li>Undergraduate</li>
											<li>Swimming</li>
										</ol>
										<input type="submit" value="Select"  id="btn"  style="color:orangered;">
									</form>    
				</div>

<div class="row1">
					<h3>Mary Johns</h3>
				<p>Behaviour </p>
				<form action="">
										<ol style="text-align:left;">
											<li>Extrovert</li>
											<li>Late night</li>
											<li>Partying</li>
											<li>Undergraduate</li>
											<li>Hiking</li>
										</ol>
										<input type="submit" value="Select" id="btn1"  style="color:orangered;">
									</form>    
				</div>

				<div class="row1">
					<h3>Lucy Maina</h3>
				<p>Behaviour </p>
				<form action="">
										<ol style="text-align:left;">
											<li>Extrovert</li>
											<li>Early night</li>
											<li>Not partying</li>
											<li>Diploma</li>
											<li>Sports</li>
										</ol>
										<input type="submit" name="select" value="Select" id="btn2"   style="color:orangered;">
									</form>    
				</div>
				</div></div>
						
</div>

<script>
	//display Roommates for selection
document.getElementById('showDivBtn').addEventListener('click', function() {
    document.getElementById('myDiv').style.display = 'block';
});


//Rommate1 selected
document.getElementById('btn1').addEventListener('click', function() {
    alert("Mary Johns selected, wait for approval");
});

//Rommate2 selected

document.getElementById('btn2').addEventListener('click', function() {
    alert("Lucy selected, wait for approval");
});

///Rommate1 selected
document.getElementById('btn').addEventListener('click', function() {
    alert("Jane selected, wait for approval");
});

//smooth scroll
window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}

</script>

					
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

