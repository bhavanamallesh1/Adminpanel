<?php 
    include("database.php");
    if(isset($_POST["submit"])){
        $mail = $_POST["mail"];
        $pass =  $_POST["pass"];
        $sql = "select * from teamlogin where email = '$mail' and password = '$pass'";
        try{
            $r = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($r);

            $count = mysqli_num_rows($r);
            if($count == 1){
                header("Location:teamdashboard.php?user=" . urlencode($row['username']));
            }else{
                echo '<script> 
                        window.location.href = "teamlogin.php";
                        alert("Login failed . Invalid username or password !!!!");
                        </script>';
            }
        }  catch(mysqli_sql_exception){
            echo '<script> 
            window.location.href = "teamlogin.php";
            alert("Login failed . Due to some issue in accessing data bases !!!!");
            </script>';
        }
      
        mysqli_close($conn);
    }
    
?>