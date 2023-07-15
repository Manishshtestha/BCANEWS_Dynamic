<?php
require_once 'database.php';
require_once 'header.php';

if(!empty($_POST)){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($connection,$sql);
    $findData = mysqli_num_rows($result);
    if($findData > 0){
        echo "Login Success";
    }else{
        echo "Email or Password not matched";
    }
}
?>
<h1>Login page</h1>
<!-- Login Form -->
<form action="" method="post">
    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" required><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" required><br>
    <button>Login</button>
</form>
<!-- Login Form -->
<?php
require_once 'footer.php';
?>