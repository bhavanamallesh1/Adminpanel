<?php 
include("db2.php");
$id = $_GET['id'];
$sql = "UPDATE disparency SET status= 1 where id = '$id'";
try{
    $result = mysqli_query($con, $sql);
    echo '<script> 
          window.location.href = "adminissues.php";
          alert("Approved");
          </script>';
}
catch(mysqli_sql_exception){
    echo '<script> 
    window.location.href = "adminissues.php";
    alert("problem in execution");
    </script>';
}
?>