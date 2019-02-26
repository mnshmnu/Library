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
	<title>Contact</title>
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
    <!-- Datatable Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">








	
</head>

<body>

    <?php include '../Include/navbar.php';?>
<div class="rowing">
    <!--Side Bar/Menu-->
    <?php include '../Include/sidebar.php';?>
		<!--/-Side Bar/Menu  ended-->

        <div class="row">
        <!-- Small boxes (Stat box) -->

            <div class="col">
                <form method="POST">
                    <div class="row">
                        <div class="col">
                            <select name="category" id="category" class="btn btn-prima" style="margin-top:18px;margin-left:18px;font-size:14px" required>
                                <option value="">Select Category
                                <option value="all">All
                                <option value="students">Students
                                <option value="staff">Staff
                            </select>
                            <button type="submit" name="save" style="margin-top:18px;" class="btn btn-prima" value="Search Results... ">
                                Submit
                            </button>
                        </div>
                    </div><br>
                </form><br>
            </div>
        </div>

        <?php
            if(isset($_POST['save'])){
                $category = $_POST['category'];
            
        ?>
        
            <div class="content">
            <?php
                if($category=="students" || $category=="all"){
            ?>
            <b>REPORT OF ACTIVE STUDENT(s): </b>
            <table id="active_stud">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Semester</th>
                </thead>
                <?php
                    $selectn = mysqli_query($conn,"select * from log_student where datetime_out ='0000-00-00 00:00:00'");
                    while($sel = mysqli_fetch_assoc($selectn)){
                        $id = $sel['students_id'];
                        $sel1 = mysqli_fetch_assoc(mysqli_query($conn,"select * from students where id = $id"));   
                ?>
                <tr>
                    <td><?php echo $sel1['admission_no'] ?></td>
                    <td><?php echo $sel1['name'] ?></td>
                    <td><?php echo $sel1['dept'] ?></td>
                    <td><?php echo $sel1['sem'] ?></td>
                </tr>
                <?php
                    }
                ?>
                </thead>
            </table>
            <?php
                }
            ?>

    <br><br>
            <?php
                if($category=="staff" || $category=="all"){
            ?>
            <b style="margin-top:20px">REPORT OF ACTIVE STAFF(s): </b>
            <table id="active_staff">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Department</th>
                </thead>
                <?php
                    $selectn2 = mysqli_query($conn,"select * from log_staff where datetime_out ='0000-00-00 00:00:00'");
                    while($sel2 = mysqli_fetch_assoc($selectn2)){
                        $id = $sel2['staff_id'];
                        $sels1 = mysqli_fetch_assoc(mysqli_query($conn,"select * from staff where id = $id"));   
                ?>
                <tr>
                    <td><?php echo $sels1['id'] ?></td>
                    <td><?php echo $sels1['name'] ?></td>
                    <td><?php echo $sels1['department'] ?></td>
                </tr>
                <?php
                    }
                ?>
                </thead>
            </table>
            <?php
                }
            }
            ?>    







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
<!-- Datatable Javascrpit -->
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/buttons.flash.min.js"></script>
<script src="js/jszip.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/buttons.html5.min.js"></script>
<script src="js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script>
    $(document).ready(function () {
        $('#active_stud').DataTable({
        });
        $('#active_staff').DataTable({
        });
    });
</script>

<!-- Datatable Javascript -->

<!-- Content retain for category selection -->
<script type="text/javascript">
  document.getElementById('category').value = "<?php echo $_POST['category'];?>";
</script>