<?php
    session_start();
    if(isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
	<title>Reports</title>

	<!-- Bootstrap CSS version 4.1.3 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">

	<!--Font Awesome version 5.2.0-->	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
	crossorigin="anonymous">
	<!-- FontAwesome Icon Animation CSS-->
	<link rel="stylesheet" type="text/css" href="../dist/css/anima.css">
	<link rel="stylesheet" type="text/css" href="../dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
   	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body >


<?php include '../Include/navbar.php';?>
<div class="rowsy">
    <div class="col-sm-3">
        <?php include '../Include/sidebar.php';?>
    </div>
    <div class="col-sm-9">
        <div class="cntnty">
			<div class="content">
				<div class="col-lg-12">
					<section class="content-header">                                                                            <!-- Content Header (Page header) -->
						<h1>Reports</h1>
						<hr>
					</section>
				</div>
				<!--Main Content-->
			<div class="rows">
				<div class="col-sm-7">
					<div class="rows">
						<!-- Total Visits -->
						<div class="panel panel-vio">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fas fa-user-graduate faa-flash animated" style="font-size:68px"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge" style="padding-left:100px">Faculty</div>
										<div> Reports</div>
									</div>
								</div>
								<a href="staf_rep.php">
									<span class="pull-left">
										<p style="color:White;">View Details</p>
									</span>
									<span class="pull-right">
										<i class="fa fa-arrow-circle-right faa-passing animated" style="font-size:20px"></i>
									</span>
									<div class="clearfix"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="rows">
						<!-- All Reports -->
						<div class="panel panel-yellow">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fas fa-chalkboard-teacher faa-pulse animated" style="font-size:68px"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge" style="padding-left:80px">Student</div>
										<div>Reports</div>
									</div>
								</div>
								<a href="stud_rep.php">
									<span class="pull-left">
										<p style="color:White;">View Details</p>
									</span>
									<span class="pull-right">
										<i class="fa fa-arrow-circle-right faa-passing animated" style="font-size:20px"></i>
									</span>
									<div class="clearfix"></div>
								</a>
							</div>
						</div>
					</div>
				</div><!-- end of 1st column-->
				<div class="col-sm-5">
					<img class="img-responsive" src="../../img/prin.png" alt="Chania" width="460" height="345" style="padding-left:70px"> 
				</div><!--End of 2nd column-->
			</div>
				
			</div> <!--End Of Main Content-->
        </div> <!-- end cntnt-->
			
    </div>
</div>
</div>

<?php include '../Include/footer.php';?>


   


        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
     crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
     crossorigin="anonymous"></script>


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