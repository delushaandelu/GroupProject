<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/home.css" type="text/css" />
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="color: #008B8B">Priyantha Enterprises</h1>
        </div>
    </div>
    <div class="row">
        <div class="first_section">
            <br><br>
            <button type="button" id="button1"><i class="fa fa-user-plus" aria-hidden="true"></i> Manage Customer</button>     
            <button type="button" id="button1"><i class="fa fa-user-plus" aria-hidden="true"></i> View Stock</button>
            <br><br>
        </div>
        <div>
            <button type="button" id="button1"><i class="fa fa-user-plus" aria-hidden="true"></i> Manage Suppliers</button>     
            <button type="button" id="button1"><i class="fa fa-user" aria-hidden="true"></i> View Suppliers</button>
            <br><br>
        </div>
        <div>
            <button type="button" id="button1"><i class="fa fa-cloud-download" aria-hidden="true"></i> Backup</button>     
            <button type="button" id="button1"><i class="fa fa-cogs" aria-hidden="true"></i> Setting</button>
        </div>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>