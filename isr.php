<?php 
include("db3.php");
$name = $_GET['user'];
if(isset($_POST["bt"])){
  $wid =  $_POST['wid'];
  $issue = $_POST['paragraph'];
  $sql = "INSERT INTO disparency (wid,issue)
                  values ('$wid','$issue')";
  try{
   mysqli_query($co,$sql);
   echo '<script> 
           window.location.href = "issues.php?user=' . urlencode($name) . '";
           alert("Issue raised");
         </script>';  
  }catch(mysqli_sql_exception){
    echo '<script> 
           window.location.href = "issues.php?user=' . urlencode($name) . '";
           alert("error in raising issue");
         </script>';  
  }
}
?>