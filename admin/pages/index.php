<?php
    include('config.php');
    session_start();
    if(isset($_SESSION['admin'])){
?>

<!DOCTYPE html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Lib-Com</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">

	<!-- Bootstrap CSS version 4.1.3 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<!--Font Awesome version 5.2.0-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
	 crossorigin="anonymous">
	<!-- FontAwesome Icon Animation CSS-->
	<link rel="stylesheet" type="text/css" href="../dist/css/anima.css">
	<link rel="stylesheet" type="text/css" href="../dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/clock.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>



<?php
            // ALL VISITS
            $data = mysqli_query($conn, 'select * from log_student');
            $visit_student = mysqli_num_rows($data);
            $data1 = mysqli_query($conn, 'select * from log_staff');
            $visit_staff = mysqli_num_rows($data1);
            $num_visit = $visit_student + $visit_staff;
            // UNIQUE
            $data = mysqli_query($conn, 'select DISTINCT(students_id) from log_student');
            $uniq_student = mysqli_num_rows($data);
            $data = mysqli_query($conn, 'select DISTINCT(staff_id) from log_staff');
            $uniq_staff = mysqli_num_rows($data);
            $uniq_visit = $uniq_student + $uniq_staff;
            // Department Wise
            $cse = 0;
            $ce = 0;
            $ece = 0;
            $eee = 0;
            $me = 0;
            $mre = 0;
            $sel = mysqli_query($conn, 'select admission_no from log_student');
            $total_no = mysqli_num_rows($sel);
            $sel = mysqli_query($conn, "Select students_id from log_student");
            if (mysqli_num_rows($sel) > 0) 
            {
                while ($data = mysqli_fetch_assoc($sel)) 
                {
                    $stud_id = $data['students_id'];
                    $sel1 = mysqli_query($conn, "Select * from students where id = '$stud_id'");
                    if (mysqli_num_rows($sel1) > 0) 
                    {
                        while ($data1 = mysqli_fetch_assoc($sel1)) 
                        {
                            $department = $data1['dept'];
                            if ($department == "CSE") 
                            {   $cse++;            }
                            if ($department == "CE") 
                            {   $ce++;             }
                            if ($department == "ECE") 
                            {   $ece++;             }
                            if ($department == "EEE") 
                            {   $eee++;             }
                            if ($department == "ME") 
                            {   $me++;              }
                            if ($department == "MRE") 
                            {   $mre++;             }
                        }
                    } 
                    else 
                    {   echo "No matching records found in Database";   }
                }
            } 
            else 
            {   echo "No records Found in Log";  }
            $sel = mysqli_query($conn, "select * from log_student where datetime_out ='0000-00-00 00:00:00'");
            $notout_stud = mysqli_num_rows($sel);
            $sel = mysqli_query($conn, "select * from log_staff where datetime_out ='0000-00-00 00:00:00'");
            $notout_staf = mysqli_num_rows($sel);
?>

<body>
	
	<?php include '../Include/navbar.php';?>
	<div class="rowing">
    	<div class="col-sm-3">
        	<?php include '../Include/sidebar.php';?>
    	</div>	<!--End Of col 3-->
    	<div class="col-sm-9">
			<div class="cntnt"><!--Main Content-->
				
				<div class="rowl">
				<div class="col-lg-4" style="padding-top:40px">
					<!-- 1st Column starts-->
					<div class="rows">
						<!-- Currently Inside Row -->
						<div class="panel-grn">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fas fa-clock faa-wrench animated" style="font-size:68px"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div style="font-size:20px">Currently Inside</div>
										<div>Students:
											<?php echo $notout_stud;?>
										</div>
										<div>Faculty:
											<?php echo $notout_staf;?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- End of 1st Row -->
					<div class="rows">
						<!-- Total Visits -->
						<div class="panel-vio">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fas fa-chalkboard-teacher faa-flash animated" style="font-size:68px"></i>
									</div>
									<div class="col-xs-9">
										<div class="huge" style="padding:10px">
											<p>Total Visits :</p>
											<?php echo $num_visit; ?>
										</div>
									</div>
								</div>
								<a href="totals.php">
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
					</div> <!-- End of 2nd Row -->
					<div class="rows">
						<!-- All Reports -->
						<div class="panel-yellow">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fas fa-user-graduate faa-pulse animated" style="font-size:68px"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge" style="padding:10px">All Reports</div>
									</div>
								</div>
								<a href="reports.php">
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
					</div> <!-- End of 3rd Row -->
				</div>
				<div class="col-lg-6" style="padding-top:40px">
					<!-- Digital Clock Display -->
					<div id="clock" class="dark">
						<div class="display">
							<div class="weekdays"></div>
							<div class="ampm"></div>
							<div class="alarm"></div>
							<div class="digits"></div>
							<div class="preloader-scan" style="position:relative;padding-bottom:30px">
  								<ul>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
    								<div class="diode">
      									<div class="laser"></div>
    								</div>
  								</ul>
  							</div>
						</div>
					</div><!-- Digital Clock Display Ends here -->
				
				</div><!-- end of col-->
				</div><!-- end of rowl-->

			</div><!--End Of cntnt-->
		</div>	<!--End Of col 9-->
	</div>		<!--End Of rowing-->
		
        	
    
	
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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
    <script src="js/digitalclock.js"></script>
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