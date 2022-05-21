<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Faculty Feedback System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <em class="fa fa-user fa-fw"></em>  <em class="fa fa-caret-down"></em>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="dashboard.php?info=update_password"><em class="fa fa-gear fa-fw"></em>Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><em class="fa fa-sign-out fa-fw"></em> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><em class="fa fa-dashboard fa-fw"></em> Dashboard</a>
                        </li>
                        
						<li>
                            <a href="#"><em class="fa fa-user fa-fw"></em>Faculty<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dashboard.php?info=add_faculty"><em class="fa fa-plus fa-fw"></em> Add Faculty</a>
                                </li>
								 <li>
                                    <a href="dashboard.php?info=show_faculty"><em class="fa fa-eye"></em> Manage faculty</a>
                                </li>                           
							</ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
						
						<li>
                            <a href="#"><em class="fa fa-user fa-fw"></em>Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
								 <li>
                                    <a href="dashboard.php?info=display_student"><em class="fa fa-eye"></em> Manage Student</a>
                                </li> 
							             
							</ul>
                        </li>
						
						
		
		<!-- feedback-->
		<li>
         <a href="#"><em class="fa fa-user fa-book"></em>Feedback<span class="fa arrow"></span></a>
           <ul class="nav nav-second-level">
                             
<li><a href="dashboard.php?info=feedback"><em class="fa fa-eye"></em> feedback</a></li>
<li><a href="dashboard.php?info=feedback_average"><em class="fa fa-eye"></em> feedback Average</a></li>
	 
							             
							</ul>
                        </li>
		<!--feedback end-->
						
					
						
						
		<li>
			<a href="dashboard.php?info=contact"><em class="fa fa-eye"></em> Contact us</a>
		</li>
			   
				   
				        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                	<?php 
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="")
								{
									if($info=="add_faculty")
										{
											include('add_faculty.php');
										}
										
									elseif($info=="show_faculty")
										{
											include('show_faculty.php');
										}
										
										
									elseif($info=="edit_faculty")
										{
											include('edit_faculty.php');
										}	
										
									elseif($info=="display_student")
										{
											include('display_student.php');
										}
									
										
										
									elseif($info=="contact")
										{
											include('contact.php');
										}	
									elseif($info=="feedback")
										{
											include('feedback.php');
										}
										elseif($info=="feedback_average")
										{
											include('feedback_average.php');
										}		
										
										
									
										
										
										
										else if($info=="update_password")
										{
										include('update_password.php');
										}
									
								}
								else
								{
								include('dashboard_home.php');
								}
							
							
							?>
				
				</div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>

</body>

</html>
