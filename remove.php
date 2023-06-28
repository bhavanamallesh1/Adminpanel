<?php
  include("database.php");
  include("db2.php");
  $id = $_GET["id"];
  $sql = "SELECT * FROM teamlogin WHERE username = '$id'";
  $r = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($r);
  $d = $row['workid'];
  $sql = "DELETE FROM teamlogin WHERE username = '$id'";
  try{
    mysqli_query($conn, $sql);
    $sql = "DELETE FROM disparency WHERE wid = '$d'";
    mysqli_query($con, $sql);
        echo '<script> 
        window.location.href = "addteam.php";
        alert("successfully removed");
        </script>';
}catch(mysqli_sql_exception){
        echo '<script> 
        window.location.href = "addteam.php";
        alert("not removed");
        </script>';
}
  ?>