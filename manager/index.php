<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>ApparelTech</title>
        <link rel="stylesheet" href="css/style.css">
  </head>
    <?php
    session_start();
if(isset($_POST['login'])){
    require ('../config/database.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $_SESSION['manager'] = $username;
   
    $result = mysqli_query($conn, 'select * from user where username="'.$username.'" and password="'.$password.'" and accessLevel="1" ');
    if (mysqli_num_rows($result)==1){
        header('location: home.php');
    }else
        echo "<script>";
        echo "alert('ERROR| Your are not an authoriezed user! Cheack your information again')";
        echo "</script>";
}
?>
  <body>
    <hgroup>
  <h1>Apparel<span style="color:#FF4500">Tech<span></h1>
  <h3>Operational Level Login</h3>
</hgroup>
<form method="POST">
  <div class="group">
    <input type="text" name="username">
    <label>Username</label>
  </div>
  <div class="group">
    <input type="password" name="password">
    <label>Password</label>
  </div>
  <button type="submit" class="button buttonBlue" name="login">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
  </body>
</html>
