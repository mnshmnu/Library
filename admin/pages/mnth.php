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
    <title>Monthly Reports</title>

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
    <link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script src="js/modernizr.custom.js"></script>

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
                        <h1>Student Reports</h1>
                        <hr>
                    </section>
                </div>
                
                <div class="cntnt">
                    <form method="POST">
                        <select name="year" required>
                        <option value="<?php if(isset($_POST['save'])){ echo $_POST['year']; }?>"><?php if(isset($_POST['save'])){ echo $_POST['year']; }else{echo "Select Year";}?></option>
                        <?php
                            for ($year = 2018; $year <= date("Y"); $year++) {
                            $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                            echo "<option value=$year $selected>$year</option>";
                            }
                        ?>
                        </select>
                        <button class="butn butn-5 butn-5a icon-cog" type="submit" name="save" value="Search Results... "><span>Submit</span></button>
                        <br>
                        <br>
                    </form>
                    <?php
                        $yr=date("Y");
                        if(isset($_POST['save'])){$yr=$_POST['year'];}
                        $val = array();
                        $sql = "SELECT *,MONTH(datetime_in),DATE(datetime_in) FROM `log_student` where YEAR(datetime_in)='$yr'";
                        $query=  mysqli_query($conn,$sql);  
                        if(mysqli_num_rows($query)>0){
                            while($row = mysqli_fetch_assoc($query)){
                                $date[] = $row['DATE(datetime_in)'];
                                if(isset($dateCount[ $row['DATE(datetime_in)'] ])){
                                    $dateCount[ $row['DATE(datetime_in)'] ]++;
                                }
                                else{
                                    $dateCount[ $row['DATE(datetime_in)'] ] = 1;
                                }
                                if(isset($month[ $row['MONTH(datetime_in)'] ])){
                                    $month[ $row['MONTH(datetime_in)'] ]++;
                                }
                                else{
                                    $month[ $row['MONTH(datetime_in)'] ] = 1;
                                }
                            }
                        }
                        $uniq = array_values(array_filter(array_unique($date)));
                        sort($uniq);
                        for($i=0;$i<count($uniq);$i++){
                            $e = explode('-',$uniq[$i]);
                            $n[$i] = $m = $e[1]-0;
                            if(isset($work[$m])){
                                $work[$m]++;
                            }
                            else{
                                $work[$m] = 1;
                            }    
                        }
                    ?>
                    <table id="report_stud" style="border-style: outset;padding:3px 7px" >
                        <thead style="background-color: #05a8f3;">
                            <th>SL.No</th>
                            <th>Date</th>
                            <th>Month</th>
                            <th>No.of Visits</th>
                            <th>Total</th>
                            <th>Average</th>
                        </thead>
                        <tbody>
                            <?php 
                            $y=-1;
                            for($i=0;$i<count($uniq);$i++){
                                $x=$n[$i];
                                if($i!=0){
                                    $y=$n[$i-1];
                                }
                                ?>
                                <tr>
                                    <td><?php echo $i+1; ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($uniq[$i])); ?></td>
                            <?php   if($x!=$y){ ?>
                                    <td rowspan="<?php  echo $work[$n[$i]];?>"><?php echo date('F', mktime(0, 0, 0, $n[$i], 10)); ?></td>
                            <?php   }   ?>
                                    <td><?php echo $dateCount[$uniq[$i]]; ?></td>
                            <?php   if($x!=$y){ ?>
                                    <td rowspan="<?php  echo $work[$n[$i]];?>"><?php echo $month[$n[$i]]; ?></td>
                                    <td rowspan="<?php  echo $work[$n[$i]];?>"><?php echo round($month[$n[$i]]/$work[$n[$i]],4); ?></td>
                            <?php   }   ?>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
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
        <script src="js/classie.js"></script>
		<script>
			var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
				buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btn-8g' ) ),
				totalButtons7Click = buttons7Click.length,
				totalButtons9Click = buttons9Click.length;

			buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
			buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

			function activate() {
				var self = this, activatedClass = 'btn-activated';

				if( classie.has( this, 'btn-7h' ) ) {
					// if it is the first of the two btn-7h then activatedClass = 'btn-error';
					// if it is the second then activatedClass = 'btn-success'
					activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btn-error' : 'btn-success';
				}
				else if( classie.has( this, 'btn-8g' ) ) {
					// if it is the first of the two btn-8g then activatedClass = 'btn-success3d';
					// if it is the second then activatedClass = 'btn-error3d'
					activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btn-success3d' : 'btn-error3d';
				}

				if( !classie.has( this, activatedClass ) ) {
					classie.add( this, activatedClass );
					setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
				}
			}

			document.querySelector( '.btn-7i' ).addEventListener( 'click', function() {
				classie.add( document.querySelector( '#trash-effect' ), 'trash-effect-active' );
			}, false );
		</script>


</body>
</html>



<?php     }
    else{
        header('Location:../login.php');
    }
?> 