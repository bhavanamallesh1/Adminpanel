<?php
  include("database.php");
  $id = $_GET["id"];
  $sql = "SELECT * FROM teamlogin WHERE username = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $d = $row['workid'];
?>
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
<body>
<div class="row justify-content-center">
<div class="col-md-5">
    <div class="card custom-card custom-form-card" id="formCard">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Update work of <?php echo $row['username']; ?></h5>
        <hr>
        <form id="registrationForm2" method="post" action="updatedata1.php?id=<?php echo urlencode($id); ?>">
            <div class="form-group">
                <h6><br>WorkId</h6>
              <input type="text" class="form-control" id="wid" name="wid" value="<?php echo $row['workid']; ?>" placeholder="Enter WorkId" required>
              </div>
              <hr>
              <div class="form-group">
                <h6>Data sets Assigned : <?php echo $row['datasetlength']; ?></h6>
              </div>
              <div class="form-group">
                <h6>Data sets completed : <?php echo $row['completed']; ?></h6>
              </div>
              <div class="form-group">
              <h6>Deadline : <?php echo date("d-m-Y", strtotime($row['deadline'])); ?></h6>
              </div>
              <hr>
              <div class="form-group">
              <h6>Dataset Length</h6>
              <input type="number" class="form-control" id="num" name="num" value="<?php echo $row['datasetlength']; ?>" min=1 placeholder="Enter Length of data set assigned" required>
              </div>
              <div class="form-group">
            <h6>Deadline</h6>
            <input type="date" class="form-control" id="date" name="date" value="<?php echo date("Y-m-d", strtotime($row['deadline'])); ?> "min="<?php echo date('Y-m-d'); ?>" required>
          </div>
              <button type="submit" id="myButton" name = "bt" class="btn btn-primary custom-button">update work</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
 if(isset($_POST['bt'])){
    include("db2.php");
    $ID = $_POST['wid'];
    $datasetlength = $_POST['num'];
    $date = date("Y-m-d", strtotime( $_POST['date']));
    $sql = "UPDATE teamlogin SET 
    workid = '$ID',
    datasetlength = '$datasetlength',
    deadline = '$date'
    WHERE username = '$id'";
        try{
        mysqli_query($conn, $sql);
        $id = $row['workid'];
        $sq = "UPDATE disparency SET
                wid = '$ID'
                WHERE wid = '$id'";
        mysqli_query($con, $sq);
        $sq = "UPDATE data SET
        workid = '$ID'
        WHERE workid = '$id'";
        mysqli_query($con, $sq);
            echo '<script> 
            window.location.href = "admindashboard.php";
            alert("successfully updated");
            </script>';
    }catch(mysqli_sql_exception){
        mysqli_query($conn, $sql);
            echo '<script> 
            window.location.href = "admindashboard.php";
            alert("not updated");
            </script>';
    }
 }
?>