<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="../admin/dist/css/anima.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<style>

    
    body{
    margin: 0;
    padding: 0;
    background: url(image/a.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;
    background-color:#1c8adb;
    top: 10%;
    
    font-family: sans-serif;

    }
    .vertical-center {
      min-height: 90%;  /* Fallback for browsers do NOT support vh unit */
      min-height: 60vh; /* These two lines are counted as one :-)       */      

      display: flex;
      align-items: center;
    }
      
    .navbar {
      overflow: hidden;
      background-color: #333;
      position: fixed;
      bottom: 0;
      width: 100%;
          } 

    .login-box{
    width: 320px;
    height: 320px;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 10%;
    color: #fff;
    top: 50%;
    left: 86%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;   
    padding: 70px 30px;     
    }

    .login-box h1{
    margin: 0;
    padding: 0 0 3px;
    font-size: 25px;
    border-bottom: 3px solid #4caf50;
    text-align: center;
    margin-bottom: 50px;
    }

    .avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
    }
    .login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    }

    .login-box input{
    width: 100%;
    margin-bottom: 20px;
    }
    .login-box input[type="text"],input[type="password"]
    {
    border: none;
    border-bottom: 1px solid #4caf50;
    background:transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    
    }

    .login-box input[type="submit"]
    {
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18x;
    border-radius: 40px;
    
    
    }

    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    }   

    .sm-menu a,.col a{
    font-size:14px;
    bottom:50%;
    }

   </style>
    



</head>

<body>
<a href="http://www.jecc.ac.in/">
<img src="image/head.png" style="width:50%" class="center" 
alt="Jyothi Official Website">
</a>
<div class="nav" style="height: 500px">
    <ul>
        <li><a href="../index.php" class="btn btn-primary">
                <i class="fas fa-arrow-circle-left   faa-passing-reverse animated"style="font-size:20px;"></i>
                Scanning Page 
            </a>
        </li>
        <li><a href="http://www.jecc.ac.in/documents/MandatoryDisclosure2015.pdf" class="btn btn-danger">
                <i class="fas fa-cloud-download-alt faa-falling animated" style="font-size:14px;"></i>
                Mandatory Disclosure
            </a>
        </li>
    </ul>
</div>



    
            <div class="login-box"  >   <!-- new modified log in box -->
                <img src="image/student.png" class="avatar">
                <h4>JECC ADMIN PANEL</h4>
                <form class="form-inline form-signin" align="center" autocomplete="off" action="" method="POST">
                    <div>
                    <i class="fas fa-user  faa-ring animated"></i>
                    <input type="text" class="form-control" name="username" id="username" 
                            autocomplete="off" autofocus value style="margin-bottom:5px" placeholder="Username"><br>
                    </div>
                    <div>
                    <i class="fas fa-lock faa-flash animated"></i>
                    <input type="password" class="form-control" name="password" id="password" 
                            autocomplete="off" autofocus value style="margin-bottom:5px" placeholder="password"><br>
                    <input class="bt btn-large btn-primary" type="submit" name="save" id="save" value="Sign In">
                    </div>
                </form>
            </div>


            
    <?php
        if(isset($_POST['save']))
        {
            $id=$_POST['username'];
            $pass=$_POST['password'];
            if($id=='admin')
            {                   
                if($pass=='admin')
                { 
                    if($id =='admin'&& $pass =='admin')
                    {
                        $_SESSION['admin']="$id";
                        ?>
                        <script> location.replace("pages/index.php"); </script>
                        <?php
                    }
                }
                else
                {
                    echo ' <script>
                    alert("Invalid Username and Password");
                </script>
                '; 
                }

            }
            else 
            {
                echo ' <script>
                alert("Invalid Username");
            </script>
            '; 
            }
        } 
            
    ?>




    <div class="navbar" style="height:50px;background-color:#212529">
        <footer id="footer" class="footer-1" style="padding-top:10px;padding-left:50px;">
            <div class="container">       
                <div class="row">
                <!-- Copy Right Logo -->

                    <div class="col" align="center">
                        <p style="font-size:14px"><font color="white">© Copyright 2018. All Rights Reserved. | Developed &amp; Maintained by the Interns of  
                    <a href="http://jecc.ac.in/infrastructure/tbi" title="TBI"> tbi@jec </a> CSE - 2017 Admitted Batch.</font></p>
                    </div><!-- Copy Right Content -->
                
                </div><!-- Footer Copyright -->
            </div>
                
        </footer>
    

    </div>


<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>    
</body>
</html>