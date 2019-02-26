<?php
    include('config.php');
    session_start();
    if(isset($_SESSION['admin'])){
?>

<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">


    <title>Total Visits</title>
    
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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<?php
                // Timeframe selection
                date_default_timezone_set('Asia/Kolkata');
                $timeline = "0000-00-00 00:00:00";
                $today = date("Y-m-d H:i:s");
                if (isset($_POST['timeline'])) {
                    $timeline = $_POST['timeline'];
                }
                
                // Timeframe selection

                // Department Wise
                $cse=0;$ce=0;$ece=0;$eee=0;$me=0;$mre=0;
                $sel = mysqli_query($conn,"select admission_no from log_student where datetime_in between '$timeline' and '$today'");
                $total_no = mysqli_num_rows($sel);
                $sel = mysqli_query($conn,"Select students_id from log_student where datetime_in between '$timeline' and '$today'");
                if(mysqli_num_rows($sel)>0){
                    while($data = mysqli_fetch_assoc($sel)){
                      $stud_id = $data['students_id']; 
                        $sel1 = mysqli_query($conn,"Select * from students where id = '$stud_id'");
                        if(mysqli_num_rows($sel1)>0){
                            while($data1 = mysqli_fetch_assoc($sel1)){
                                $department = $data1['dept'];
                                if($department=="CSE"){
                                    $cse++;
                                }
                                if($department=="CE"){
                                    $ce++;
                                }
                                if($department=="ECE"){
                                    $ece++;
                                }
                                if($department=="EEE"){
                                    $eee++;
                                }
                                if($department=="ME"){
                                    $me++;
                                }
                                if($department=="MRE"){
                                    $mre++;
                                }
                            }
                        }
                        else{
                            echo "No matching records found in Database";
                        }
                    }
                }
                else{
                    echo "No records Found in Log";
                }
?>
<?php
                // Department Wise
    $dcse = 0;$dce = 0;$dece = 0;$deee = 0;$dme = 0;$dmre = 0;$dmgm = 0;
    $sel3 = mysqli_query($conn, "select employee_code from log_staff where datetime_in between '$timeline' and '$today'");
    $totalsno = mysqli_num_rows($sel3);

    $sel3 = mysqli_query($conn, "Select staff_id from log_staff where datetime_in between '$timeline' and '$today'");
    if (mysqli_num_rows($sel3) > 0) {
    while ($dat = mysqli_fetch_assoc($sel3)) {
        $staf_id = $dat['staff_id'];
        $sel2 = mysqli_query($conn, "Select * from staff where id = '$staf_id'");
        if (mysqli_num_rows($sel2) > 0) {
            while ($dat = mysqli_fetch_assoc($sel2)) {
                $dept = $dat['department'];
                if ($dept == "CSE") {
                    $dcse++;
                }
                if ($dept == "CE") {
                    $dce++;
                }
                if ($dept == "ECE") {
                    $dece++;
                }
                if ($dept == "EEE") {
                    $deee++;
                }
                if ($dept == "ME") {
                    $dme++;
                }
                if ($dept == "MRE") {
                    $dmre++;
                }
                if ($dept == "MGM") {
                    $dmgm++;
                }
            }
        } else {
            echo "No matching records found in Database";
        }
    }
    } else {
    echo "No records Found in Log";
    }
?>
<?php
            // ALL VISITS
    $data = mysqli_query($conn, "select * from log_student where datetime_in between '$timeline' and '$today'");
    $visit_student = mysqli_num_rows($data);

    $data1 = mysqli_query($conn, "select * from log_staff where datetime_in between '$timeline' and '$today'");
    $visit_staff = mysqli_num_rows($data1);
?>
<?php
        $s1 = 0;$s2 = 0;$s3 = 0;$s4 = 0;$s5 = 0;$s6 = 0;$s7 = 0;$s8 = 0;
        $mel = mysqli_query($conn, "select admission_no from log_student where datetime_in between '$timeline' and '$today'");
        $totals_no = mysqli_num_rows($mel);

        $mel = mysqli_query($conn, "Select students_id from log_student where datetime_in between '$timeline' and '$today'");
        if (mysqli_num_rows($mel) > 0) {
        while ($datas = mysqli_fetch_assoc($mel)) {
            $stud_id = $datas['students_id'];
            $mel1 = mysqli_query($conn, "Select * from students where id = '$stud_id'");
            if (mysqli_num_rows($mel1) > 0) {
                while ($data2 = mysqli_fetch_assoc($mel1)) {
                $sem = $data2['sem'];
                if ($sem == "S1") {
                    $s1++;
                }
                if ($sem == "S2") {
                    $s2++;
                }
                if ($sem == "S3") {
                    $s3++;
                }
                if ($sem == "S4") {
                    $s4++;
                }
                if ($sem == "S5") {
                    $s5++;
                }
                if ($sem == "S6") {
                    $s6++;
                }
                if ($sem == "S7") {
                    $s7++;
                }
                if ($sem == "S8") {
                    $s8++;
                }
            }
        } else {
            echo "No matching records found in Database";
        }
        }
        } else {
        echo "No records Found in Log";
    }
?>
<?php
            // ALL VISITS
            $data = mysqli_query($conn, "select * from log_student where datetime_in between '$timeline' and '$today'");
            $visit_student = mysqli_num_rows($data);

            $data1 = mysqli_query($conn, "select * from log_staff where datetime_in between '$timeline' and '$today'");
            $visit_staff = mysqli_num_rows($data1);

            $num_visit = $visit_student + $visit_staff;

            // UNIQUE
            $data = mysqli_query($conn, "select DISTINCT(students_id) from log_student where datetime_in between '$timeline' and '$today'");
            $uniq_student = mysqli_num_rows($data);

            $data = mysqli_query($conn, "select DISTINCT(staff_id) from log_staff where datetime_in between '$timeline' and '$today'");
            $uniq_staff = mysqli_num_rows($data);

            $uniq_visit = $uniq_student + $uniq_staff;

            // Department Wise
            $ucse = 0;
            $uce = 0;
            $uece = 0;
            $ueee = 0;
            $ume = 0;
            $umre = 0;
            $usel = mysqli_query($conn, "select admission_no from log_student where datetime_in between '$timeline' and '$today'");
            $utotal_no = mysqli_num_rows($sel);

            $sel = mysqli_query($conn, "Select students_id from log_student where datetime_in between '$timeline' and '$today'");
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
                            {
                                $ucse++;
                            }
                            if ($department == "CE") 
                            {
                                $uce++;
                            }
                            if ($department == "ECE") 
                            {
                                $uece++;
                            }
                            if ($department == "EEE") 
                            {
                                $ueee++;
                            }
                            if ($department == "ME") 
                            {
                                $ume++;
                            }
                            if ($department == "MRE") 
                            {
                                $umre++;
                            }
                        }
                    } 
                    else 
                    {
                        echo "No matching records found in Database";
                    }
                }
            } 
            else 
            {
                echo "No records Found in Log";
            }
            $sel = mysqli_query($conn, "select * from log_student where datetime_out ='0000-00-00 00:00:00'");
            $notout_stud = mysqli_num_rows($sel);

            $sel = mysqli_query($conn, "select * from log_staff where datetime_out ='0000-00-00 00:00:00'");
            $notout_staf = mysqli_num_rows($sel);
?>

<?php
                // Department Wise
    $fcse = 0;$fce = 0;$fece = 0;$feee = 0;$fme = 0;$fmre = 0;$fmgm = 0;
    $fsel = mysqli_query($conn, "select employee_code from log_staff where datetime_in between '$timeline' and '$today'");
    $ftotal_no = mysqli_num_rows($fsel);

    $fsel = mysqli_query($conn, "Select staff_id from log_staff where datetime_in between '$timeline' and '$today'");
    if (mysqli_num_rows($fsel) > 0) {
        while ($fdata = mysqli_fetch_assoc($fsel)) {
        $fstaff_id = $fdata['staff_id'];
        $fsel1 = mysqli_query($conn, "Select * from staff where id = '$fstaff_id'");
        if (mysqli_num_rows($fsel1) > 0) {
            while ($fdata1 = mysqli_fetch_assoc($fsel1)) {
                $fdepartment = $fdata1['department'];
                if ($fdepartment == "CSE") {
                    $fcse++;
                }
                if ($fdepartment == "CE") {
                    $fce++;
                }
                if ($fdepartment == "ECE") {
                    $fece++;
                }
                if ($fdepartment == "EEE") {
                    $feee++;
                }
                if ($fdepartment == "ME") {
                    $fme++;
                }
                if ($fdepartment == "MRE") {
                    $fmre++;
                }
                if ($fdepartment == "MGM") {
                    $fmgm++;
                }
            }
        } else {
            echo "No matching records found in Database";
        }
    }
    } else {
    echo "No records Found in Log";
    }
?>
<?php
    $dataPoints = array(
    array("label" => "Computer Science Engg", "symbol" => "CSE", "y" => $fcse),
    array("label" => "Civil Engg", "symbol" => "CE", "y" => $fce),
    array("label" => "Electronic & Commn Engg", "symbol" => "ECE", "y" => $fece),
    array("label" => "Electrical Engg", "symbol" => "EEE", "y" => $feee),
    array("label" => "Mechanical Engg", "symbol" => "ME", "y" => $fme),
    array("label" => "Mechatronic Engg", "symbol" => "MRE", "y" => $fmre),
    array("label" => "Management", "symbol" => "MGMT", "y" => $fmgm),
        )
?>

<body>
    <?php include '../Include/navbar.php';?>
    <div class="rowsy">
        <div class="col-sm-3">
            <?php include '../Include/sidebar.php';?>
        </div>
        <div class="col-sm-9">
            <div class="cntnty">
            <div class="container"><!--Main Content-->
            <!-- Reports-specified-time-frame -->
            Select Time frame:
            <form name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                <select name="timeline" id="Idtimeline" onchange="myform.submit();" style="border-radius: 20px;
    background:rgba(0,0,0,0.3);padding:3px 13px;" >
                    <option value="<?php echo "0000-00-00 00:00:00";  ?>">All Time
                    <option value="<?php echo date('Y-m-d H:i:s', strtotime("-1 day")); ?>">From Last day onwards
                    <option value="<?php echo date('Y-m-d H:i:s', strtotime("-1 week")); ?>">From Last week onwards
                    <option value="<?php echo date('Y-m-d H:i:s', strtotime("-1 month")); ?>">From Last month onwards
                    <option value="<?php echo date('Y-m-d H:i:s', strtotime("-1 year")); ?>">From Last year onwards
                </select>
            </form>
            <br>
            <?php 
            if(isset($_POST['timeline'])){
            ?>
                Displaying reports from <?php
                $originalDate=$_POST['timeline'];
                $timeline = date_create($originalDate);
                echo date_format($timeline, 'd-m-Y H:m:s');
                  ?>.

            <?php 
            }
            ?>

            <!-- Reports-specified-time-frame -->
                <div class="row">
                    <div class="col-6">
                        <div id="piechart2" style="width: 500px; height: 300px;"></div>
                    </div>
                    <div class="col-6">
                        <div id="piechart4" style="width: 500px; height: 300px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div id="piechart_3d" style="width: 500px; height: 300px;"></div>
                    </div>
                     <div class="col-6">
                        <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div id="piechart" style="width: 500px; height: 300px;"></div>
                    </div>
                    <div class="col-6">
                        <div id="piechart3" style="width: 500px; height: 300px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div id="chartContainer" style="width: 515px; height: 300px;"></div>
                </div>
            </div><!--End Of Main Content-->
            </div> <!-- end cntnt-->
			
        </div>
    </div>

    <?php include '../Include/footer.php';?>

    
</body>
    <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
     crossorigin="anonymous"></script>
     
     
    <!-- Google charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	
	<script>
		$(document).ready(function () {
			$('#sidebarCollapse').on('click', function () {
				$('#sidebar').toggleClass('active');
			});
		});  
    </script>
    
    <!--  TOTAL Visits Pie Charts -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['TotalScans', 'Dept'],
          ['Students',  <?php echo $visit_student; ?>],
          ['Faculty',   <?php echo $visit_staff; ?>],
          
        ]);

        var options = {
          title: 'Total Visits'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>


      <!--Student Visits-->
    <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Dept", "Visits", { role: "style" } ],
        ["CSE", <?php echo $ucse; ?>, "orange"],
        ["CE", <?php echo $uce; ?>, "green"],
        ["ECE", <?php echo $uece; ?>, "red"],
        ["EEE", <?php echo $ueee; ?>, "blue"],
        ["ME",<?php echo $ume; ?>, "Teal"],
        ["MRE",<?php echo $umre; ?>, "Violet"]


        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total Student Visits-Department Wise",
        width: 500,
        height: 300,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };


      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
        }
    </script>

        <!--Faculty Visits-->
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dept', 'Visits'],
          ['CSE', <?php echo $dcse; ?>],
          ['CE',  <?php echo $dce; ?>],
          ['ECE', <?php echo $dece; ?>],
          ['EEE', <?php echo $deee; ?>],
          ['ME',  <?php echo $dme; ?>],
          ['MRE', <?php echo $dmre; ?>],
          ['MGM', <?php echo $dmgm; ?>]
        ]);

        var options = {
          title: 'Total-Faculty Visits',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester', 'Visits'],
          ['Semester 1', <?php echo $s1; ?>], 
          ['Semester 2', <?php echo $s2; ?>], 
          ['Semester 3', <?php echo $s3; ?>],
          ['Semester 4', <?php echo $s4; ?>], 
          ['Semester 5', <?php echo $s5; ?>], 
          ['Semester 6', <?php echo $s6; ?>],
          ['Semester 7', <?php echo $s7; ?>],
          ['Semester 8', <?php echo $s8; ?>]
        ]);

        var options = {
          title: 'Total Student Visits-Semester Wise Analysis',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

    <!-- Student Dept wise Pie Chart  -->
	<script type="text/javascript">
		google.charts.load('current', { 'packages': ['corechart'] });
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {

			var data = google.visualization.arrayToDataTable([
          ['Dept', 'Login Per Day'],
          ['CSE',  <?php echo $cse; ?>],
          ['CE',   <?php echo $ce; ?>],
          ['ECE',  <?php echo $ece; ?>],
          ['EEE',  <?php echo $eee; ?>],
          ['MECH', <?php echo $me; ?>],
          ['MR', <?php echo $mre; ?>],
        ]);


			var options = {
				title: 'Unique Student Visits-Department wise Analysis'
			};

			var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

			chart.draw(data, options);
		}
    </script>

    
	<!-- Unique Visits Pie Charts -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Dept', 'Login Per Day'],
          ['Students',   <?php echo $uniq_student; ?>],
          ['Faculty',   <?php echo $uniq_staff; ?>],
          
        ]);

        var options = {
          title: 'Unique Visits Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

        chart.draw(data, options);
      }
    </script>

     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
	    window.onload = function() {
 
	    var chart = new CanvasJS.Chart("chartContainer", {
	    theme: "light2",
	    animationEnabled: true,
	    title: {
		    text: "Faculty visits-Department wise"
	    },
	    data: [{
		type: "doughnut",
		indexLabel: "{symbol} - {y}",
		yValueFormatString: "#,##0.0\"%\"",
		showInLegend: true,
		legendText: "{label} : {y}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	    }]
	    });
	    chart.render();
 
	    }
    </script>
    

    
</html>
<?php
    }
    else{
        header('Location:../login.php');
    }
?>