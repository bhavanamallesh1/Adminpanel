<?php 
$name = "";
if (isset($_GET['user'])) {
    $name = $_GET['user'];
} 
include("database.php");
$sql = "select * from teamlogin where username = '$name'";
$count = 
$r = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($r);
$_POST = array();
include("db2.php");
$id = $row['workid'];
$sql = "select * from data where workid = '$id'";
$result = mysqli_query($con, $sql);
$count = $row['completed'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>team dashboard</title>
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
    .custom-textarea {
      width: 400px;
      height: 200px;
      margin: 0 auto;
      margin-top: 50px;
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
.center-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.center-container p {
  font-size: 24px;
  text-align: center;
}
input[type="text"],
input[type="email"],
input[type="number"],
input[type="date"],
input[type="url"]{
  width: 250px;
  padding: 10px;
  margin-bottom: 4px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: none;
}
    </style>
</head>

<body>
<?php  if ((($count == $row['datasetlength']) || empty($row['workid']))){?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
  <a class="navbar-brand" href="#"><?php echo $name ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="teamdashboard.php?user=<?php echo urlencode($name); ?>">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white " href="issues.php?user=<?php echo urlencode($name); ?>">Issues</a>
      </li>
      <li>
        <a class="nav-link text-white" href="teamlogin.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="center-container">
  <p>Work not assigned</p>
</div>
<?php }else{?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
  <a class="navbar-brand" href="#"><?php echo $name ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="teamdashboard.php?user=<?php echo urlencode($name); ?>">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white " href="#">Issues</a>
      </li>
      <li>
        <a class="nav-link text-white" href="teamlogin.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!------------------------------------------------------------------------------------------------------------------>
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card custom-card custom-form-card" id="formCard">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Raise Issue</h5>
        <form id="registrationForm" method="post" action="isr.php?user=<?php echo urlencode($name); ?>">
        <div class="form-group">
            <h6>WorkId : <?php echo $row['workid']?></h6>
        </div>
        <div class="form-group">
          <input type="text" name="wid" value="<?php echo $row['workid']?>" readonly>
        </div>
        <div class="form-group">
        <h6>Enter valid Issue</h6>
        <textarea id="paragraph" name="paragraph" rows="4" cols="40" placeholder="Continue.." required></textarea><br>
        </div>
          <div class="form-group">
              <button type="submit" id="myButton" name = "bt" class="btn btn-primary custom-button">report issue</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-md-7">
    <div class="card custom-card custom-table-card table-card">
      <div class="card-body">
        <div class="table-container">
                  <table class="table" id="team-table">
                    <thead class="thead-light">
                        <tr>
                            <th>WorkID</th>
                            <th>Issue</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include("db2.php");
                        $sql = "SELECT * FROM disparency where wid='$id'";
                        if ($result = mysqli_query($con, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                $maxWidths = array(); // Array to store maximum width for each column

                                while ($row = $result->fetch_assoc()) {
                                    $wid = $row['wid'];
                                    $issue = $row['issue'];
                                    $state = $row['status'];
                                    // Update maximum width for each column
                                    if($wid != NULL){
                                      $maxWidths[0] = max(isset($maxWidths[0]) ? $maxWidths[0] : 0, strlen($wid));
                                      $maxWidths[1] = max(isset($maxWidths[2]) ? $maxWidths[2] : 0, strlen($issue));
                                      $maxWidths[2] = max(isset($maxWidths[1]) ? $maxWidths[1] : 0, strlen($state));
                                      echo "<tr>";
                                      echo "<td>$wid</td>";
                                      echo "<td>";
                                      echo "<p class='column'>";
                                      echo "$issue";
                                      echo "</td>";
                                      echo "<td>";
                                      if($state == null){
                                        echo "<span style='color:orange;'> Pending ..</span>";
                                      }elseif($state == 1){
                                        echo "<span style='color:green;'> Approved </span>";
                                      }else{
                                        echo "<span style='color:red;'> Rejected </span>";
                                      }
                                      echo "</td>";
                                      echo "</tr>";
                                    }
                                }
                                // Generate CSS style for column widths
                            } else {
                                echo "<tr><td colspan='5'>No rows found.</td></tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
}
?>
<?php

?>
<!------------------------------------------------------------------------------------------------------------------>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
   <!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="lib/js/jquery.min.js"></script>
<script src="lib/js/jquery-ui.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>
</body>
</html> 