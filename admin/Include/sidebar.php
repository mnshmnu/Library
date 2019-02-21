<nav id="sidebar">
	<div class="sidebar-header">
		<h3>MENU</h3>
	</div>
	<ul class="list-unstyled components">
            <li>
					<a href="#pageSubmenu" style="color:#05a8f3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page</a>
					<ul class="list-unstyled" id="pageSubmenu">
						<li><a href="index.php">Home</a></li>
						<li><a href="active.php">Active Users</a></li>
						<li><a href="totals.php">Total Visits</a></li>
						<li><a href="reports.php">Reports</a></li>
						<li><a href="date.php">DateWise Scans</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
						
					</ul>
			</li>
			<li>
					<a href="#homeSubmenu" style="color:#05a8f3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Services</a>
					<ul class="list-unstyled" id="homeSubmenu">
						<li>
							<a href="http://www.jecc.ac.in/campusbook">
							<i class="fas fa-book-open faa-wrench animated" style="font-size:20px;"></i> CampusBook</a>
						</li>
						<li>
							<a href="http://202.88.225.92/xmlui">
							<i class="fas fa-desktop faa-float animated" style="font-size:20px;"></i> Digital Space </a>
						</li>
						<li>
							<a href="http://192.168.2.206/">
							<i class="far fa-newspaper faa-tada animated" style="font-size:20px;"></i> NPTEL Courses</a>
						</li>
						<li>
							<a href="http://jecc.ac.in/library/libusers/login">
							<i class="fas fa-lock faa-flash animated" style="font-size:20px;"></i> Library Log In</a>
						</li>
					</ul>
			</li>
				
				
	</ul>
</nav>

<style>
	
#sidebar {
    min-width: 250px;
    max-width: 100%;
    min-height: 100%;
    position:fixed;
    background: #151718;
    color: #fff;
    transition: all 0.3s;
    z-index: 1;
    left: 0;
    overflow-x: hidden;
}
#sidebar.active{
	margin-left: -250px;
}

#sidebar .sidebar-header{
	padding: 15px;
}
#sidebar ul.components{
	padding: 20px 0px;
}

#sidebar ul p{
	padding: 10px;
	font-size: 1.1em;
	display: block;
}

#sidebar ul li a{
	padding: 10px;
	font-size: 1.1em;
	display: block;
}
#sidebar ul li a:hover {
    color: #f1f6f8;
    background: rgb(29, 32, 34);
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #05a8f3;
    background: rgb(29, 32, 34);
}
a[data-toggle="collapse"] {
    position: relative;
}
.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #111;
}
ul ul a.active {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #05a8f3;
}


ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}
a.download{
	background: #fff;
	color: #011c29;
}
a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

@media(maz-width:768px){
	#sidebar{margin-left: -250px;}
	#sidebar.active{
		margin-left: 0px;
	}
	#sidebarCollapse span{
		display: none;
	}
}

</style>
	


    
    
