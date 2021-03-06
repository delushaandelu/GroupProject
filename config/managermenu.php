 <!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">

#holder
{
	position:absolute;
	width:100%;
	height:100%;
}
#holder img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-radius: 10%;
}
    </style>
    </head>
<body>
<div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: #0a0a0a; color: white">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="background-color: #0a0a0a; font-size: 30px; color:#FF4500; margin-left: 10%;" >Manager</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown head-dpdn">
                   
                       <a href="../manager/ManageUser-Manage_Customer.php"><i class="fa fa-user-plus" style="color: white"></i><span class="badge">
                           <?php
                        require("database_connection.php"); 

                            $sql= "select count(customer_id) as total from customer where status='false'";
                        //$result=mysqli_query($dbcon,$sql);
                        $result = mysqli_query($dbcon,$sql);
                        $row = mysqli_fetch_assoc($result);
                                echo  $row["total"];
                        ?>  
                        </span></a>
                        
                   
                    
                    </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down" style="color: white"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

<div class="navbar-default sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search" margin-botton:70%>
                            <div class="input-group custom-search-form" style="margin-botton:50%">
                                <img src="images/avatar.jpg" />
                            </div>
                        </li>
                        <li>
                            <a href="../manager/home.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Supplier<span class="fa arrow" style="color: white"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../manager/supplier-manage_supplier.php">Manage supplier</a>
                                </li>
                                <li>
                                    <a href="../manager/Supplier-View_Supplier.php">View</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Stock<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../manager/Stock_ManageItem.php">Search item</a>
                                </li>
                                <li>
                                    <a href="../manager/Stock-View_Stock.php">View Stock</a>
                                </li>
                                <li>
                                    <a href="../manager/Stock-Order_Stock.php">Order Stock</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Manage Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../manager/ManageUser-Manage_Customer.php">Manage customer</a>
                                </li>
                                <li>
                                    <a href="../manager/ManageUser-View_Customer.php">View customer</a>
                                </li>
                                <li>
                                    <a href="../manager/ManageUser-Manage_Stock_Manager.php">Manage Admin Panel</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Stock_NewReport.php"><i class="fa fa-bar-chart"></i> Stock Reports</a>
                                </li>
                                <li>
                            <a href="lineGraph.php"><i class="fa fa-line-chart"></i> Purchase report<span class="fa arrow"></span></a>
                        
                        </li>
                                
                            </ul>
                        </li>
                        
                        
                        
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-eye"></i> View<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../manager/View-Rent.php">Rent</a>
                                </li>
                                <li>
                                    <a href="../manager/View-Purchase_Order.php">Purchase order</a>
                                </li>
                                <li>
                                    <a href="../manager/View-Delivery.php">Delivery</a>
                                </li>
                                <li>
                                    <a href="../manager/View-Vehicle_Details.php">Vehicle details</a>
                                </li>
                                <li>
                                    <a href="../manager/View-Driver_Details.php">Driver details</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quotation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../manager/Quotation-Manage_Quotation.php">Manage</a>
                                </li>
                                <li>
                                    <a href="../manager/Quotation-View_Quotation.php">View</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-cloud-upload"></i> Backup<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../manager/backup.php">Take Backup</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Setting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="../manager/Settings-Change_username.php">Change Username</a>
                                </li> -->
                                <li>
                                    <a href="../manager/Settings-Change_password.php">Change Password</a>
                                </li>
                            </ul>
                        </li>
                        
                   
                </div>
            </div>
        </nav>
     </div>
    </div>
</body>
