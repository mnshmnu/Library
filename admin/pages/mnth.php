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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>
<body>
<?php
$val = array();
$sql = "SELECT *,MONTH(datetime_in),DATE(datetime_in) FROM `log_student`";
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
<table id="report_stud" border="1">
    <thead>
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

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
     crossorigin="anonymous"></script>

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script> -->
        
        <!-- <script>
        $(document).ready(function() {
            $('#month').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                // 'rowsGroup': [2]
            } );
        } );
        </script> -->


</body>
</html>



<?php     }
    else{
        header('Location:../login.php');
    }
?> 