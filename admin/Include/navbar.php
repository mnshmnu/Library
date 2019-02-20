 <div id="navbar">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-lig">
        <button type="button" id="sidebarCollapse" class="btn btn-infos">
        <i class="fa fa-align-justify"></i>
        </button>
        <!--<a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h style="padding-left:10px"> Lib-Com</h>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="../logout.php" onclick="return confirm('Do You want to log out?')">
                <i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
        </div>
    </nav>
</div>

<style>
    .navbar{
	    padding: 16px 10px;
	    background: #05a8f3;
	    border: none;
	    border-radius: 0;
	    box-shadow: 1px 1px 3px rgba(0,0,0,0.1);
        }

    .navbar bg-lig{
    	background: #616060;
    	border: none;
    }



    .navbar-btn{
    	box-shadow: none;
    	outline: none!important;
    	border: none;
    }


    .navbar-btn btn-infos{
    	color: rgb(255, 255, 255);
    }
</style>



    
    
