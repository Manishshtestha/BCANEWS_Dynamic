<?php
require_once 'database.php';
if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $image = '';
    if(!empty($_FILES['image']['name'])){
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $path = 'uploads/';
        move_uploaded_file($tmp,$path.$image);
    }
    $sql = "INSERT INTO users(name,email,password,gender,image) 
                                VALUES('$name','$email','$password','$gender','$image')";
    $result = mysqli_query($connection,$sql);
    if($result){
        echo "Record added Successfully";
    }else{
        echo "User couldn't be added due to some error";
    }
}
?>
<?php
require_once 'header.php';
?>
        <h1>Register New User</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required><br>
            <label>Gender</label><br>
            <label>
              <input type="radio" name="gender" value="male" required>Male
            </label>
            <label>
              <input type="radio" name="gender" value="female" required>Female
            </label> <br>
            <label for="image">Profile Picture</label> <br>
            <input type="file" name="image"><br><br>
            <button>Add Record</button>
        </form>
<?php
require_once 'footer.php';
?>