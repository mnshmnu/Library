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

        <title>Date Wise Scans</title>

        <!-- Bootstrap CSS version 4.1.3 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Font Awesome version 5.2.0-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
        <!-- FontAwesome Icon Animation CSS-->
        <link rel="stylesheet" type="text/css" href="../dist/css/anima.css">

        <link rel="stylesheet" type="text/css" href="../dist/css/style.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

        <!-- Datatable Stylesheet -->
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
            <div class="col-sm-3">
                <?php include '../Include/sidebar.php';?>
            </div>
            <div class="col-sm-9">


                <div class="cntnty" style="padding-left:10px">
                    <div class="content-wrapper">
                        <!-- Content Wrapper. Contains page content -->
                        <section class="content-header">
                            <!-- Content Header (Page header) -->
                            <h1 style="font-family:Calibri;padding-top:30px">Date wise Visits</h1>
                            <hr>
                        </section>

                        <section class="cntnt">
                            <!-- Main content -->
                            <div class="row">
                                <!-- Small boxes (Stat box) -->

                                <div class="col">
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col">
                                                From<br><input type="date" value="<?php if(isset($_POST['save'])){ echo $_POST['date_start']; }?>" name="date_start"><br>
                                            </div>
                                            <div class="col">
                                                To<br><input type="date" value="<?php if(isset($_POST['save'])){ echo $_POST['date_end']; }?>" name="date_end"><br>
                                            </div>
                                            <div class="col">
                                                <select name="category" class="btn btn-prima" style="margin-top:18px;font-size:14px">
                                                    <option>Select Category
                                                    <option value="all">All
                                                    <option value="students">Students
                                                    <option value="staff">Staff
                                                </select>
                                            </div>
                                            <div class="col" style="padding-top:18px">
                                                <button type="submit" name="save" class="btn btn-prima" value="Search Results... ">
                                                    Submit
                                                    <i class="fas fa-spinner fa-pulse"></i>
                                                </button>
                                            </div>
                                        </div><br>
                                    </form><br>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                            if(isset($_POST['save'])){
                                $date_start = $_POST['date_start'].' 00:00:00';
                                $date_end = $_POST['date_end'].' 23:59:59';
                                $category = $_POST['category'];
                                // Staff Between Dates
                                $sel = mysqli_query($conn,"select * from log_staff where datetime_in between '$date_start' and '$date_end'");
                                $staff_btwn = 0;
                                if(mysqli_num_rows($sel)>0){
                                $staff_btwn = mysqli_num_rows($sel);
                                }
                                // Staff Between Dates
                                // Student Between Dates
                                $selstud = mysqli_query($conn,"select * from log_student where datetime_in between '$date_start' and '$date_end'");
                                $student_btwn = 0;
                                if(mysqli_num_rows($selstud)>0){
                                $student_btwn = mysqli_num_rows($selstud);
                                }
                                // Student Between Dates
                            }
                        ?>

                                <div class="col">
                                    <div class="panel panel-yellow">
                                        <?php 
                                    if(isset($_POST['save'])){
                                ?>
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="far fa-clock faa-flash animated" style="font-size:68px;padding:15px"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">
                                                    </div>
                                                    <div>Visits In Between</div>
                                                    <?php 
                                                if(isset($_POST['save'])){
                                                    if($category=="all" || $category=="staff" ){
                                                    echo "STAFF : ".$staff_btwn;}
                                                    ?>
                                                    <br>
                                                    <?php
                                                    if($category=="all" || $category=="students" ){
                                                    echo "STUDENT : ".$student_btwn;}
                                        ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- --------------------------------------------------------- -->
                                        <?php
                                
                                if($category=="all"){
                                    if(mysqli_num_rows($sel)>0){
                                        // Datatable content-Staff
                                        ?>
                                        <table id="table_staff">
                                            <thead>
                                                <th>Employee Code</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Entry Time</th>
                                                <th>Exit Time</th>
                                            </thead>
                                            <?php
                                        while($row = mysqli_fetch_assoc($sel)){
                                            $id = $row['staff_id'];    
                                            $sel1 = mysqli_fetch_assoc(mysqli_query($conn,"select * from staff where id = $id"));
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $sel1['employee_code']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['department']; ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                    $originalDate =$row['datetime_in'];
                                                    $dateTime = date_create($originalDate);
                                                    echo date_format($dateTime, 'd-m-Y H:m:s');
                                                     ?>
                                                </td>
                                                <td>
                                                    
                                                    <?php
                                                     $originalDate =$row['datetime_out'];
                                                     $dateTime = date_create($originalDate);
                                                     echo date_format($dateTime, 'd-m-Y H:m:s');
                                                     ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                        <?php

                                            // Datatable content-Student
                                    }
                                    if(mysqli_num_rows($selstud)>0){
                                        // Datatable content-Staff
                                        ?>
                                        <table id="table_student">
                                            <thead>
                                                <th>Admission No</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Semester</th>
                                                <th>Entry Time</th>
                                                <th>Exit Time</th>
                                            </thead>
                                            <?php
                                        while($row = mysqli_fetch_assoc($selstud)){
                                            $id = $row['students_id'];    
                                            $sel1 = mysqli_fetch_assoc(mysqli_query($conn,"select * from students where id = $id"));
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $sel1['admission_no']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['dept']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['sem']; ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                    $originalDate =$row['datetime_in'];
                                                    $dateTime = date_create($originalDate);
                                                    echo date_format($dateTime, 'd-m-Y H:m:s'); ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $originalDate =$row['datetime_out'];
                                                    $dateTime = date_create($originalDate);
                                                    echo date_format($dateTime, 'd-m-Y H:m:s'); ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                        <?php
                                            // Datatable content-Student
                                    }
                                }
                                else if($category=="staff"){
                                    echo "REPORT OF STAFF VISITS:"; 
                                    if(mysqli_num_rows($sel)>0){
                                        // Datatable content-Staff
                                        ?>
                                        <table id="table_staff">
                                            <thead>
                                                <th>Employee Code</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Entry Time</th>
                                                <th>Exit Time</th>
                                            </thead>
                                            <?php
                                        while($row = mysqli_fetch_assoc($sel)){
                                            $id = $row['staff_id'];    
                                            $sel1 = mysqli_fetch_assoc(mysqli_query($conn,"select * from staff where id = $id"));
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $sel1['employee_code']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['department']; ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                    $originalDate =$row['datetime_in'];
                                                    $dateTime = date_create($originalDate);
                                                    echo date_format($dateTime, 'd-m-Y H:m:s'); ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                    $originalDate =$row['datetime_out'];
                                                    $dateTime = date_create($originalDate);
                                                    echo date_format($dateTime, 'd-m-Y H:m:s'); ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                        <?php

                                            // Datatable content-Staff
                                    }
                                }
                                else if($category=="students"){
                                    if(mysqli_num_rows($selstud)>0){
                                        // Datatable content-Staff
                                        ?>
                                        <table id="table_student">
                                            <thead>
                                                <th>Admission No</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Semester</th>
                                                <th>Entry Time</th>
                                                <th>Exit Time</th>
                                            </thead>
                                            <?php
                                        while($row = mysqli_fetch_assoc($selstud)){
                                            $id = $row['students_id'];    
                                            $sel1 = mysqli_fetch_assoc(mysqli_query($conn,"select * from students where id = $id"));
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $sel1['admission_no']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['dept']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $sel1['sem']; ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $originalDate =$row['datetime_in'];
                                                    $dateTime = date_create($originalDate);
                                                    echo date_format($dateTime, 'd-m-Y H:m:s'); ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                    $originalDate =$row['datetime_out'];
                                                    $dateTime = date_create($originalDate);
                                                    echo date_format($dateTime, 'd-m-Y H:m:s'); ?>
                                                </td>
                                            </tr>
                                            <?php 
                                        }

                                            // Datatable content-Student
                                    }
                                }
                                else{
                                    echo "No visit found in the given time period".mysqli_error($conn);
                                }
                            }
                                ?>


                                            <!-- --------------------------------------------------------- -->
                                    </div>
                                    <?php 
                                    }
                                ?>
                                </div>
                            </div>
                    </div>
                    </section>


                </div>

            </div>
            <!--Footer-->
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="js/index.js"></script>

    <!-- Google charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });  
    </script>

</html>
<?php
    }
    else{
        header('Location:../login.php');
    }
?>

<!-- Datatable Javascrpit -->
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
    $(document).ready(function () {
        $('#table_staff').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#table_student').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<!-- Datatable Javascrpit -->