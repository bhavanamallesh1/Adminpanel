<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>team dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="lib/js/jquery.min.js"></script>
<script src="lib/js/jquery-ui.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>
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
  .navbar-nav {
  margin-right: 30px;
}
@media (max-width: 768px) {
      .center-content {
        height: auto;
      }
      .custom-card {
        width: 100%;
      }
    }
    .custom-button {
      background-color: black;
      color: white;
      border: black;
      width: 100%;
    }
    .navbar-nav .active {
  background-color: black;
  color: black;
}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="admindashboard.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="addteam.php">Add Team</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white" href="assignwork.php">Assign work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="data.php">Data Storage</a>
      </li>
      <li class="nav-item">
  <a class="nav-link text-white" href="adminissues.php">Issues </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="adminlogin.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card custom-card custom-form-card" id="formCard">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Assign Work</h5>
        <form id="registrationForm" method="post" action="assignwork.php">
        <div class="form-group">
            <select class="form-control" id="username" name="username" required>
              <option value="">Select a Team member</option>
              <?php 
                  $sql = 'SELECT username FROM teamlogin';
                  $result = mysqli_query($conn, $sql);
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['username'] . '">' . $row['username'] . '</option>';
                    }
                  } 
              ?>
            </select>
                </div>
            <div class="form-group">
              <input type="text" class="form-control" id="wid" name="wid" placeholder="Enter WorkId" required>
              </div>
              <div class="form-group">
              <input type="number" class="form-control" id="num" name="num" min=1 placeholder="Enter Length of data set assigned" required>
              </div>
              <div class="form-group">
            <label for="deadline">Deadline</label>
            <input type="date" class="form-control" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required>
          </div>
          <div class="form-group">
              <button type="submit" id="myButton" name = "bt" class="btn btn-primary custom-button">Assign</button>
          </div>
              <div class="form-group">
              <p style="color: red;"> * To modify dataset length or to extend dead line go to admin dashboard</p>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</body>
</html> 
<?php
    if(isset($_POST["bt"])){
      $user = $_POST["username"];
      $wid = $_POST["wid"];
      $a = date('Y-m-d');
      $d = $_POST["date"];
      $l = intval($_POST["num"]);
      $sql = "UPDATE teamlogin SET workid='$wid',assigndate = '$a',deadline='$d',datasetlength='$l' Where username = '$user'";
      try{
        mysqli_query($conn, $sql);
        echo '<script> 
          window.location.href = "assignwork.php";
          alert("Work successfully assigned");
          </script>';
      }
      catch(mysqli_sql_exception){
        echo '<script> 
        window.location.href = "assignwork.php";
        alert("found some error while connecting to Data Base or same workID found");
        </script>';
      }
    }

?>