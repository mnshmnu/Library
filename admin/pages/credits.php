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
    <title>Credits</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS version 4.1.3 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!--Font Awesome version 5.2.0-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <!-- FontAwesome Icon Animation CSS-->
    <link rel="stylesheet" type="text/css" href="../dist/css/anima.css">
    <link rel="stylesheet" type="text/css" href="../dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">










</head>

<body>

    <?php include '../Include/navbar.php';?>

    <div class="rowing">
        <!--Side Bar/Menu-->
        <?php include '../Include/sidebar.php';?>
        <!--/-Side Bar/Menu  ended-->
        <div class="image_head">
            <img src="img/header.png" class="img_099">
        </div>
            <!-- EDITED 20-03-19 -->
            <div class="card w-75" style="margin-left:2%">
                <div class="card-body">
                    <u>
                        <h2>
                            <b>LIBCOM-Entry Register Automation:-</b>
                        </h2>
                    </u>
                    <p style="color:black">"
                        <b>LIBCOM</b> is an visitors log management application , designed and developed specifically for Libraries,
                        Computer Labs, and other areas where manual logs are kept in track for daily activities. LIBCOM not
                        only decreases the effort to write and pin down all by your own, but also minimizes the time and
                        cost by making it all automatic and digital.
                        <br>
                        <b>Certain features of LIBCOM includes:-</b>
                        <ol>
                            <li>Automating entry register.</li>
                            <li>Search Current Users.</li>
                            <li>Search Users logged at specific time.</li>
                            <li>Generating Charts and graphs based on relative data.</li>
                            <li>Generating reports based on certain criterias.</li>
                        </ol>


                        LIBCOM is designed, developed & maintained by Interns of
                        <b> Technology Business Incubator, Jyothi Engineering College, Cheruthuruthy (JECC).</b>
                        LIBCOM is backed up by PHP & MySQL."</p>
                    <h4>Team</h4>


                    <table>
                        <!-- Mentors Details Table-->
                        <tr>
                            <th colspan="3">
                                <u>MENTORS</u>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <img class="photo" src="http://jecc.ac.in/uploads/higher_authorities/royachan2-250x2741.jpg">
                            </th>
                            <th>
                                <img class="photo" src="http://jecc.ac.in/uploads/staffs/JEC593.jpg">
                            </th>
                            <th>
                                <img class="photo" src="http://jecc.ac.in/uploads/staffs/JEC422.jpg">
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <!-- Trigger/Open The Modal -->
                                <button id="myBtn">Fr. Roy Joseph Vadakkan</button>
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <h3>Rev. Fr. Roy Joseph</h3>
                                        <h5>Campus Head (Secretary & Asst. Manager)</h5>
                                        <br>
                                        <hr>
                                        <p>Fr. Roy Joseph Vadakkan with an MBA Degree is the First Asst. Manager and campus
                                            head of Jyothi Engineering College. He is also Asst. Prof in the BSH Department
                                            handling management subjects. He has also taken his PGDMLE from the National
                                            Law School, Bangalore.</p>
                                        <p>Among his various qualifications he has professional memberships in the following:
                                            Life member in Indian Society of Technical Education( ISTE), Life member in Indian
                                            Society of Hospital Administrators (ISHA), Life member in Thrissur Management
                                            Association. Young, vibrant and 'with' the youth, he is the chief warden of Santhome
                                            Boys Hostels in our campus. As a sports person he inspires young people on the
                                            sports field, being a national level referee in Basketball. He is also a member
                                            of The Basket Ball Federation of India and the Vice President of TBA(Trichur
                                            Basketball Association). He encourages the all-round development of the students
                                            with his manifold capabilities in the field of music, sports and spirituality.</p>
                                        <p>He worked as Assistant Director of Jubilee Mission Group of institution and is Youth
                                            Trainer for value education programme since 2008. Fr. Roy is also a visiting
                                            Faculty to Calicut University for MBA and MHA programme from 2008 onwards. He
                                            is also visiting faculty to Amala Institute of Medical Science, Jubilee Mission
                                            Medical College and Research Institute, Govt. Nursing College Thrissur and Little
                                            Flower School of Nursing Angamaly.</p>
                                        <span class="close">
                                            <button type="button" class="btnclose">Close</button>
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <!-- Trigger/Open The Modal -->
                                <button id="myBtn">
                                    <a href="http://jecc.ac.in/staffs/JEC593" target="_blank">Mr.Vinod</a>
                                </button>
                            </td>
                            <td>
                                <button id="myBtn">
                                    <a href="http://jecc.ac.in/staffs/JEC422" target="_blank">Mr.Shaiju Paul</a>
                                </button>
                            </td>
                        </tr>

                    </table>
                    <!-- Mentors table ends..-->

                    <table>
                        <!-- Developer Detail's Table -->
                        <tr>
                            <th colspan="4">
                                <u>DEVELOPERS</u>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <img class="phot_student" src="img/deepak.jpg">
                            </td>
                            <td>
                                <img class="phot_student" src="img/sreerag.jpg">
                            </td>
                            <td>
                                <img class="phot_student" src="img/maneesh.jpg">
                            </td>
                            <td>
                                <img class="phot_student" src="img/abhijith.jpg">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button id="myBtn">
                                    <a href="https://www.linkedin.com/in/deepak-k-v-b51752161" target="_blank">Deepak K V - (CSE-2017-21)</a>
                                </button>

                            </td>

                            <td>
                                <!-- Trigger/Open The Modal -->
                                <button id="myBtn">
                                    <a href="https://www.linkedin.com/in/sreerag-r-nandan-302a66160" target="_blank">Sreerag R Nandan - (CSE-2017-21)</a>
                                </button>
                            </td>
                            <td>
                                <button id="myBtn">
                                    <a href="https:/www.linkedin.com/in/maneeshmanoj-reach2me" target="_blank">Maneesh Manoj - (CSE-2017-21)</a>
                                </button>
                            </td>
                            <td>
                                <button id="myBtn">
                                    <a href="https://www.linkedin.com/in/abhijith-v-j-291306171" target="_blank">Abhijith Vadakkan - (CSE-2017-21)</a>
                                </button>
                            </td>
                        </tr>

                    </table> 
					<!-- Developer Table ends - -->

                    <div class="listul">
                        <ul>
                            <u>Timeline</u>
                            <li>2018-July:Project idea was presented by Mr.Shaiju & Mr.Vinod. </li>
                            <li>2018-July:Formed Intern's team & started working guided by Mr Vinod.K under the supervision of
                                Fr.Roy Joseph Vadakkan.</li>
                            <li>2018-Nov:1st Phase Completed.</li>
                            <li>2019-Jan:2nd Phase Completed.</li>
                            <li>2019-Feb:Project presented to TBI.</li>
                            <li>2019-Mar:Project Presented to Management.</li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- EDITED 20-03-19 -->




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
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>





</body>

</html>
<?php
    }
    else{
        header('Location:../login.php');
    }
?>