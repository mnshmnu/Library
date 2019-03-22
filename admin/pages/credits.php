<?php
    include('config.php');
    session_start();
    if(isset($_SESSION['admin'])){
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Credits</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">

	<!-- Bootstrap CSS version 4.1.3 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<!--Font Awesome version 5.2.0-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- FontAwesome Icon Animation CSS-->
	<link rel="stylesheet" type="text/css" href="../dist/css/anima.css">
	<link rel="stylesheet" type="text/css" href="../dist/css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">









	
</head>

<body>

    <?php include '../Include/navbar.php';?>

<div class="rowing">
    <!--Side Bar/Menu-->
    <?php include '../Include/sidebar.php';?>
		<!--/-Side Bar/Menu  ended-->
    <div class="content">
    	<div>
    		<img src="../../img/head.png" height=100px width=100% >
    	</div>
<!-- EDITED 20-03-19 -->
		<div class="card w-75" style="margin-left:2%">
			<div class="card-body">
				<h4>LIBCOM-Entry Register Automation</h4>
				<p style="color:blue">LIBCOM is an visitors log management application which helps in automating entry register. It is developed and maintained by Interns at Technology Business Incubator, Jyothi Engineering College, Cheruthuruthy (JECC). LIBCOM is a webapplication running on PHP & MySQL.</p>
				<h4>Team</h4>
				<ul>
				<u>MENTORS</u><br>
				<li>Fr. Roy Joseph Vadakkan</li>
				<li>Mr. Vinod K </li>
				<li>Mr. Shaiju Paul </li>
				<br><u>Developers</u><br>
				<li><a href="https://www.linkedin.com/in/deepak-k-v-b51752161">Deepak K V - (CSE-2017-21)</a></li>
				<li><a href="https://www.linkedin.com/in/sreerag-r-nandan-302a66160">Sreerag R Nandan - (CSE-2017-21)</a></li>
				<li><a href="https://www.linkedin.com/in/abhijith-v-j-291306171">Abhijith V J - (CSE-2017-21)</a></li>
				<li><a href="www.linkedin.com/in/maneeshmanoj-reach2me">Maneesh Manoj - (CSE-2017-21)</a></li>
				</ul>
				<h4>Timeline</h4>
				<ul>
				<li>2018-July:Project idea was presented and work started by Interns guided by Mr Vinod K under the supervision of Fr. Roy Joseph Vadakkan </li>
				<li>2019-March:Project presented..</li>
				</ul>
			</div>	
		</div>
<!-- EDITED 20-03-19 -->
	</div>
</div>
</div>
</div>
	


 <!--Footer-->
 <?php include '../Include/footer.php';?>
    

    <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>
	 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	 <script src="js/index.js"></script>
 

	
	
    <script>
		$(document).ready(function () {
			$('#sidebarCollapse').on('click', function () {
				$('#sidebar').toggleClass('active');
			});
		});  
    </script>





</body>

</html>
<?php
    }
    else{
        header('Location:../login.php');
    }
?>
