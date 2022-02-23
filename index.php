<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="wiewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
    <nav>
        <ul class="menu_member">
            <?php if(isset($_SESSION["userid"])){
                ?>
                <li><a><?php echo $_SESSION["useruid"]; ?></a></li>
                <li><a href = "includes/logaut.inc.php" class="header-login-a">LOGOUT</a> </li>
                <?php
            }
            else{
                ?>
                <li><a  >SIGN UP</a> </li>
                <li><a  class="header_login_a" >LOGIN</a></li>
                <?php
            }
            ?>

        </ul>
    </nav>
</header>
<form action="includes/signup.inc.php" method="post" >
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password" >
    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <button type="submit" name="submit">SIGN UP</button>


</form>
<br>
<h2>Login Form</h2>
<!--Step 1 : Adding HTML-->
<form action="includes/login.inc.php" method="post">
    <div class="imgcontainer">
        <img src=
             "https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"
             alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uid" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required>

        <button type="submit" name="submit">LOG IN</button>
        <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>



