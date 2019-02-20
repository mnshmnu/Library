<?php 
        include('admin/config.php');
        $r=0;
        
        date_default_timezone_set('Asia/Kolkata');
        if(isset($_POST['save'])) {
                        
                if(!$conn)
                {
                    die("connection failed".mysqli_connect_error());
                }
                /* echo "connection successfull"; */
                $id="";
                $f=0;
                $addNo=$_POST["input"];

                /* modify valus of tables */
                $DateTimein=date("Y-m-d H:i:s");
                $DateTimeout="not_out";
                /* checking for staff */
                    if(substr($addNo,0,3)=="JEC"){
                        $sql="select * from staff where employee_code = '".$addNo."'";
                        $check=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($check)>0){
                            $f=1;
                            $img_name=$addNo;
                            $row=mysqli_fetch_assoc($check);
                            $id2=$row['id'];
                            $name=$row['name'];
                            $dept=$row['department'];
                            /* ------------------------------- */
                            $dbName="log_staff";
                            $Rname="staff_id";
                            /* ------------------------------ */
                        }
                        else {
                            $f=-1;
                        }
                    }
                    
                /* checking for staff */
                
                /* checking for students */
                    else{
                        $sql="select * from students where admission_no = '".$addNo."'";
                        $check=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($check)>0){
                            $f=1;
                            $img_name=$addNo;
                            $row=mysqli_fetch_assoc($check);
                            $id2=$row['id'];
                            $name=$row['name'];
                            $dept=$row['dept'];
                            $sem=$row['sem'];
                        /* ------------------------------------ */
                        $dbName="log_student";
                        $Rname="students_id";
                        /* ------------------------------------ */
                        }
                        else {
                            $f=-1;
                        }
                    }
                
                /* checking for students */
                if ($f==1) {
                /* checking record  exist */
                $data="select datetime_out from ".$dbName." where ".$Rname." ='".$id2."' and datetime_out='0000-00-00 00:00:00'";
                $result=mysqli_query($conn,$data);
                if(mysqli_num_rows($result)>0 ){  
                    $DateTimeout=date("Y-m-d H:i:s");
                    $data="update ".$dbName." set datetime_out='$DateTimeout' where ".$Rname."='$id2'";
                    mysqli_query($conn,$data);
                }
                /* checking record  exist */            
                else{
                $data="insert into ".$dbName." values('$id','$id2','$addNo','$DateTimein','')";
                $result=mysqli_query($conn,$data);
                 }
                $data="select * from ".$dbName." where ".$Rname." ='".$id2."'";
                $result=mysqli_query($conn,$data);
                $visit=mysqli_num_rows($result);
                $data='SELECT * FROM '.$dbName.' WHERE '.$Rname.' = '.$id2.' ORDER BY id DESC LIMIT 1'; 
                $result=mysqli_query($conn,$data);
                if(mysqli_num_rows($result)>0 ){ 
                    $row=mysqli_fetch_assoc($result);
                    $dateIn=$row['datetime_in'];
                }
            }
        
        
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="admin/dist/css/anima.css">

<link rel="stylesheet" href="compiled/flipclock.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="compiled/flipclock.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<title> Library-JECC </title>
</head>
<body>
    <a href="jecc.ac.in">
    <img src="img/head.png" style="width:50%" class="center" alt="Jyothi Official Website">
    </a>
    <div class="nav" style="height: 500px">
    <ul>
        <li><a href="http://www.jecc.ac.in/campusbook" class="btn btn-primary"><i class="fas fa-book-open faa-wrench animated"style="font-size:20px;"></i> CampusBook</a></li>
        <li><a href="http://202.88.225.92/xmlui" class="btn btn-danger"><i class="fas fa-desktop faa-float animated"style="font-size:20px;"></i>  Digital Space </a></li>
        <li><a href="http://192.168.2.206/" class="btn btn-success"><i class="far fa-newspaper faa-tada animated"style="font-size:20px;"></i>  NPTEL Courses</a></li>
        <li><a href="http://jecc.ac.in/library/libusers/login" class="btn btn-warning"><i class="fas fa-lock faa-flash animated" style="font-size:20px;"></i> Library Log In</a></li>
        <li><a href="admin/login.php" class="btn btn-info"><i class="fas fa-user faa-passing animated"style="font-size:20px;"></i> Admin Log In</a></li>
    </ul>
    </div>
    <!-- ----------------------display board starts---------------------------------------------- -->
    <!-- erase style to regain original position --> 
    <?php if(isset($_POST['save'])){ ?>
        <div style="position: absolute;z-index: 100;bottom:200px;left:200px;width: 1000px"> 
    <div class="container">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm" align="center" >
                <div class="alert alert-warning alert-dismissible" style="padding-bottom: 3px;padding-top:0px;
                display: <?php if ($f==-1) { echo 'block'; } else  {echo 'none'; }?>">
                <font size="4">Enter Valid Id...</font>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
    </div> 

    <div id="main_div" style="display:
    <?php 
    if ($f==1) 
    { 
        echo 'block';
        /*     comment to stop timer */
        $r=2; 
    } 
    else 
    {
        echo 'none';
    } 
    ?>">
    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="scan">
                    <div style=" position: relative;top: 20px;margin-bottom:30px;">
                        <img src="img/<?php echo $img_name.'.jpg'; ?>" 
                            onerror="this.src='img/Default.png'" 
                            alt="img">
                    </div>
                    <div style="padding: 1px 1px 1px;">
                        <div style=" margin-bottom: 4px;font-size: 21px;line-height: 1;color: #262626;">
                       <!-- <h3>  Heading</h3>    Text Goes Here-->
                        </div>
                        <div style=" overflow: hidden;font-size: 15px;line-height: 20px;color:black;text-overflow: ellipsis;">
                           <?php echo $name;?> <br>
                           <?php echo $dept;?> <br>
                             <div id="main_div" style=" display:
                            <?php 
                                if ($dbName=="log_student") 
                                { 
                                    echo 'block'; 
                                } 
                                else 
                                {
                                    echo 'none'; 
                                } 
                            ?>"> 
                            <?php echo $sem;?><br>
                            </div>
                            <b>IN:</b>
                            <?php $date1=date_create($dateIn); echo date("h:i:sa d/m/Y ", strtotime($dateIn));?> <br>
                            <div id="main_div" style=" display:
                                <?php if ($DateTimeout!="not_out") { echo 'block'; } else {echo 'none'; } ?>">
                                <b>OUT :</b>
                                <?php echo date("h:i:sa d/m/Y ", strtotime($DateTimeout));?> <br>
                                <b>VISITS : </b>
                                <?php echo $visit;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            </div>
            <?php }?>
        </div>
    </div>
    </div>
    
    <!-- ----------------------display board ends---------------------------------------------- -->

    <!-- login box -->
    <div class="login-box"  > <!-- erase style to make logbox visible -->
        <img src="img/student.png" class="avatar">
        <h1>Scan Barcode</h1>
        <form class="form-inline" align="center" action="index.php" autocomplete="off" method="post">
            <div>
                <input type="text" class="form-control" autofocus="autofocus" name="input" placeholder="Student/Staff id">
                <input type="submit" class="btn btn-primary"  name="save" value="Submit">
            </div>
        </form>
    </div>
    <!-- login box --> 


   <div class="clock" style="position: absolute;z-index: 100;bottom:80px;left:450px;width: 550px" ></div>
      </div>

    <div class="footer" style="position : fixed">
        <div class="container">
            <div class="row"> <!-- Footer Copyright -->
                <div class="col" align="center">
                    <p><font color="white">© Copyright 2018. All Rights Reserved. | Developed &amp; Maintained by the Interns of  
                    <a href="http://jecc.ac.in/infrastructure/tbi" title="TBI"> tbi@jec </a> CSE - 2017 Admitted Batch.</font></p>
                </div><!-- Copy Right Content -->
            </div><!-- Footer Copyright -->
        </div><!-- Container Closed-->
    </div><!--Footer closed-->


   
</body>

<script type="text/javascript">
    var clock;
    
    $(document).ready(function() {
        var date = new Date(<?php echo time() * 1000 ?>);

        clock = $('.clock').FlipClock(date, {
            clockFace: 'TwelveHourClock'
        });
    });
</script>
<?php if($r==2){ ?>
<script>
    setTimeout(function () {    
    window.location.href = 'index.php'; 
},2000); /* timer */
</script>
<?php }?>
</html>