<?php
require_once "header.php";
require_once "database.php";
?>
<h1>View Users</h1>
<!-- Search Form -->
<form action="" method="get">
    <label for="search">Search</label>
    <input type="text" name="search" id="search" placeholder="Search by name or email">
    <button>Search</button>
</form>
<!-- Search Form -->

<!-- Table -->
<table class='data-table'>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['uid']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>    
<!-- Table -->
<?php
require_once "footer.php";
?>