<?php
session_start();
?>   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ApperalTech</title>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/changePassword.css" type="text/css">
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    <link rel="stylesheet" href="js/template.css" type="text/css" />
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>

<!-- page content -->
    <div class="right_col" role="main">
        <h2 class="hfont">Change Your Password Here!</h2>
        <div class="row">
            <div id="content">
                <div id="top3">
                    <h5>
                    <font color="#a52a2a" size="+2">Change Password!</font>
                    </h5>
                    <br><br>
                    <!-- create form -->
                    <form method="post" action="changePassword.php">
                    <tr>
                        <td id="table-font" width="30" >
                            Password*
                        </td>
                        <td>
                            <input type="password" name="oldpwd" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td id="table-font" width="30" >
                            New Password*
                        </td>
                        <td>
                            <input type="password" name="Newpwd1" class="form-control" required>
                    
                        </td>
                    </tr>
                    <tr>
                        <td id="table-font" width="30" >
                            Confirm new Password*
                        </td>
                        <td>
                            <input type="password" name="Newpwd2" class="form-control" required>
                        </td>
                    </tr>
                    <br><br> 
                    <button type="submit" id="button1" class="" name="pwd">Change</button>
                    </form>
                </div>
        
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div> 
        </div>
    </div>
</body>
    
<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
  <!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
</html>


    <?php
    //get database connection
    include('dbConfig.php');

    //define variables
    if(isset($_POST["pwd"])){
        $NewPassword1=$_POST['Newpwd1'];
        $newpwd1 = sha1($NewPassword1);
        $OldPassword=$_POST['oldpwd'];
        $oldpwd = sha1($OldPassword);
        $NewPassword2=$_POST['Newpwd2'];
        $newpwd2 = sha1($NewPassword2);
        $user = $_SESSION['username'];
        
        //query
        $sql = "UPDATE user SET password='$newpwd1' WHERE accessLevel=0 && username='$user'";
        $sql_1 = "select password from user where accessLevel=0 and username='$user';";
    
        $result = mysqli_query($db, $sql_1);
        $row = mysqli_fetch_assoc($result);
        $old_password = $row["password"];
        if ($old_password == $oldpwd){ //check old password correct
            if($newpwd1==$newpwd2){ //check new password equal
                if (mysqli_query($db, $sql) === TRUE){
                    echo "<script>";
                    echo "sweetAlert('Done...', 'Passowrd changed!!', 'success');";
                    echo "</script>";
                    header("location:changePassword.php");
                }
                else{
                    echo "<script>";
                    echo "</script>";
                    echo "sweetAlert('Oops...', 'Password update failed!', 'error');";    
                    header("location:changePassword.php");
                }
            }else{
                echo "<script>";
                echo "sweetAlert('Oops...', 'New passowrd not matching!', 'error');";
                echo "</script>";
                header("location:changePassword.php");
            }
        }else{
            echo "<script>";
            echo "sweetAlert('Oops...', 'Old passoword incorrect!', 'error');";
            echo "</script>";
            header("location:changePassword.php");
        }
        mysqli_close($db);
    }


