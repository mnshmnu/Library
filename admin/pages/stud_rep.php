<?php
    include('config.php');
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
    <title>Student Reports</title>

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
<body>
    <?php include '../Include/navbar.php';?>

    <div class="rowsy">
        <div class="col-sm-2">
            <?php include '../Include/sidebar.php';?>
        </div>
        
        <div class="column-sm-9">
            <div class="ctt">
                <div class="col-lg-12">
                   <section class="content-header">                                                                            <!-- Content Header (Page header) -->
                        <h1>Faculty Reports</h1>
                        <hr>
                    </section>
                </div>
                <div class="cntnt">
    
                <?php
                    // ALL REPORTS-STUDENTS
                    $sel = "Select students.admission_no,name,dept,sem,datetime_in,datetime_out
                    from log_student,students where log_student.students_id = students.id";
                    $query = mysqli_query($conn,$sel);
                    if(mysqli_num_rows($query)>0){
                ?>
                <table id="report_stud">
                    <thead>
                        <th>Admission Number</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>Entry Time</th>
                        <th>Exit Time</th>
                    </thead>
                    <tbody>               
                        <?php           
                            while($row = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $row['admission_no']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['dept']; ?></td>
                            <td><?php echo $row['sem']; ?></td>
                            <td><?php echo $row['datetime_in']; ?></td>
                            <td><?php echo $row['datetime_out']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table> 
                <?php } ?>
            </div>
        </div>
        </div>
    </div>
		<?php include '../Include/footer.php';?>




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






        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        
        <script>
        $(document).ready(function() {
            $('#report_stud').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
        </script>


       
        </body>
        </html>
        <?php
    }
    else{
        header('Location:../login.php');
    }
?>