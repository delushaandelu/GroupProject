<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
	<link rel="stylesheet" href="../config/styles.css" type="text/css" />
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Supplier</h1>
        </div>
        
    </div>
    <div class="row">
        <div id="content">
		<div id="top">
        	<div id="top-left">
            	<form method="post">
                	<table border="0">
                    	<tr></tr>
                        <tr>
                        	<td id="table-font" width="60%">
                            	Supplier ID
                            </td>
                            <td>
                            	<input type="text" name="supplier_id" class="form-control">
								<br><br>
                            </td>
						</tr>
                        <tr>
                       	  <td id="table-font" width="60%">
                            	Supplier name
							</td>
                            <td>
                            	<input type="text" name="name" class="form-control">
								<br><br>
                            </td>
                        </tr>
                         <tr>
                       	   <td id="table-font" width="60%">
                            	Location							
                            </td>
                            <td>
                            	<input type="text" name="location" class="form-control">
								<br><br>
                           </td>
                         </tr>
                         <tr>
                         	<td id="table_font" width="60%">
								Contact
							</td> 
                                         
							<td>
								<br><br>
							</td>
                        </tr>
                                    
						  <tr>
                                        
							<td id="table_font" width="60%" align="right">
								                    Telephone                            
							</td> 
                                         
							<td>
								<input type="tel" name="Tele" class="form-control">
								<br><br>
							</td>
						  </tr>
                          <tr>
                                        
							<td id="table_font" width="60%" align="left">
								                     Mobile                           
							</td> 
                                         
							<td>
								<input type="tel" name="mobile" class="form-control">
								<br><br>
							</td>
						  </tr>
						  <tr>
                        	<td id="table-font" width="60%">
                            	Address
							</td>
                            <td><textarea name="address" rows="3" class="form-control"></textarea>
                              <br><br>
 						    </td>
						  </tr>
                          <tr>
                       	   <td id="table-font" width="60%">
                            	e-mail address							
                            </td>
                            <td>
                            	<input type="email" name="email" class="form-control">
								<br><br>
                           </td>
                         </tr>

                         
                        </table>
                     </form>
                  </div>
                  <div id="top-right">
                            <form method="post">
                            	  <tr>
                           			 <td>

                            			<input type="text" name="Search by id" placeholder="Search by ID" class="form-control"><br><br>

                           			</td>
                         	      </tr>

									<button type="button" id="button" onclick="refreshAll()" class="btn btn-default btn-lg active">Refresh</button>
									<br><br>
									<input type="submit" id="button" class="btn btn-default btn-lg active" name="Insert">
                            </form>
					  		<script>
								function refreshAll() {
									location.reload();
								}

								<?php
								if(isset($_POST['Insert'])){
									include('database_connection.php');
									//include('Supplier.php');

									mysqli_select_db($dbcon);

									$sql = "INSERT INTO supplier (supplier_id, name, email, address) VALUES ('$_POST[supplier_id]','$_POST[name]','$_POST[email]','$_POST[address]')";

									mysqli_query($sql, $dbcon);
									mysqli_close($dbcon);
								}
								?>

							</script>


</div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
    </div>
    <div id="footer"></div>

    </div>      
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>






