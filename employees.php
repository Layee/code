<?php
session_start();
 include_once "db.php";
 if(!$_SESSION['email']) {
    header("Location:index.php");
    exit();
 }
   $search = $_POST['search'];
   $query =" SELECT * FROM employees WHERE firstName LIKE '%$search%' OR lastName LIKE '%$search%'";
    $query = mysqli_query($connect,$query);
   while($row= mysqli_fetch_array($query)){
     echo "<div>";
     echo $row['firstName']."  ".$row['lastName'];
     echo "<a href='profile.php?userId=" . $row["id"] . "'>";
     echo "</div>";

     
 }

?>
        