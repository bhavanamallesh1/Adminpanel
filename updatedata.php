
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
         body {
      font-family: 'Gill Sans','sans-serif';
  }
    .custom-card {
      margin-bottom: 20px;
    }
    .custom-form-card {
      width: 400px; 
      height: fit-content; /* Set the height to fit the content *//* Set the desired width for the registration form card */
      margin: 0 auto; /* Center align the form horizontally */
      margin-top: 50px; /* Add some top margin for spacing */
    }
    @media (max-width: 768px) {
      .center-content {
        height: auto;
      }
      .custom-card {
        width: 100%;
      }
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 20px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #87CEEB;
    }
    .custom-button {
      background-color: black;
      color: white;
      border: black;
      width: 100%;
    }
    .navbar-nav {
  margin-right: 30px;
}
.navbar {
      width: 100%; /* Set the desired width for the navigation bar */
    }
.table-card {
    border: none; /* Remove the card outline */
  }
  .navbar-nav .active {
  background-color: black;
  color: black;
}
.edit-button , .remove-button {
  padding:5px 10px;
  background-color: #3CB043;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 13px;
  margin-left: 10px;
  margin-top: -15px;
  transition: background-color 0.3s;
}
.edit-button:hover {
  background-color: #45a049;
}
.remove-button:hover{
  background-color: #FF0000;
}
.options-buttons {
  display: inline-block;
}

.options-buttons button {
  margin-right: 5px;
}
.edit-form-container {
  display: none; /* Hide the form container by default */
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background */
}

.edit-form-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 600px;
}

.close {
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<?php
  include("database.php");
  $id = $_GET["id"];
  $sql = "SELECT * FROM teamlogin WHERE username = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>
<body>
<div class="row justify-content-center">
<div class="col-md-5">
    <div class="card custom-card custom-form-card" id="formCard">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Edit member</h5>
        <form id="registrationForm2" method="post" action="updatedata.php?id=<?php echo urlencode($id); ?>">
        <div class="form-group">
              <input type="text" class="form-control" id="ename" name="name" placeholder="Enter your name" value="<?php echo $row['username']; ?>" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="eemail" name="email" placeholder="Enter your email" value="<?php echo $row['email']; ?>" required>
              </div>
              <div class="form-group">
                <input type="password"  class="form-control" id="epassword" name="pass" value="<?php echo $row['password']; ?>" placeholder="Enter a password" required>
              </div>
              <div class="form-group">
                <input type="password"  class="form-control" id="erpassword" name="rpass" value="<?php echo $row['password']; ?>" placeholder="Re-enter password" required>
              </div>
              <div class="form-group">
                <input type="number"  class="form-control" name = "contact" id="enum" value="<?php echo $row['contact']; ?>" placeholder="Enter contact number" required>
            </div>
              <button type="submit" id="myButton1" name = "btn"  value="chesoko" class="btn btn-primary custom-button">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
 if(isset($_POST['btn'])){
    $n = $_POST['name'];
    $em = $_POST['email'];
    $p = $_POST['pass'];
    $c = $_POST['contact'];
    $rp = $_POST['rpass'];
    if ($p == $rp){
        $sql = "UPDATE teamlogin SET 
        username = '$n',
        email = '$em',
        password = '$p',
        contact = '$c'
        WHERE username = '$id'";

        try{
        mysqli_query($conn, $sql);
            echo '<script> 
            window.location.href = "addteam.php";
            alert("successfully updated");
            </script>';
    }catch(mysqli_sql_exception){
        mysqli_query($conn, $sql);
            echo '<script> 
            window.location.href = "addteam.php";
            alert("not updated");
            </script>';
    }
    }else{
        echo '<script> 
        window.location.href = "updatedata.php?id=' . urlencode($id) . '";
        alert("passwords are not matching");
      </script>';
    }

 }
?>