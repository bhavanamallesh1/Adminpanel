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


  <style>
     body {
      font-family:'Gill Sans','sans-serif';
  }
    .custom-card {
      margin-bottom: 20px;
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
  width: 100%;
}

.navbar-nav {
  margin-right: 0;
}
.navbar-nav .active {
  background-color: black;
  align-items: center;
  color: black;
}
.table-card {
    border: none; /* Remove the card outline */
  }
  .edit-button  {
  padding:5px 10px;
  background-color: #4caf50;
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
      <li class="nav-item active">
        <a class="nav-link text-white " href="admindashboard.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="addteam.php">Add Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="assignwork.php">Assign work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="data.php">Data Storage</a>
      </li>
      <li class="nav-item">
  <a class="nav-link text-white" href="adminissues.php">Issues </a>
      </li>
      <li class="nav-item">
  <a class="nav-link text-white" href="adminlogout.php">Logout</a>
      </li>

    </ul>
  </div>
</nav>
<!-- -------------------------------------------------------------------------------------------------------- -->
<div class="row justify-content-center">
  <div class="col-md-7">
    <div class="card custom-card custom-table-card table-card">
      <div class="card-body">
        <h5 class="card-title">Team Status</h5>
        <div class="table-container">
                  <table class="table" id="team-table">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>WorkID</th>
                            <th>Assign date</th>
                            <th>End date</th>
                            <th>DA</th>
                            <th>DC</th>
                            <th>PC</th>
                            <th>Work Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = 'UPDATE teamlogin
                                SET pc = (completed/datasetlength) * 100
                                WHERE completed IS NOT NULL AND datasetlength IS NOT NULL';
                        mysqli_query($conn, $sql);
                        $sql = 'SELECT * FROM teamlogin';
                        if ($result = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                $maxWidths = array(); // Array to store maximum width for each column

                                while ($row = $result->fetch_assoc()) {
                                    $name = $row['username'];
                                    $wid = $row['workid'];
                                    $a = date("d-m-Y", strtotime($row['assigndate']));
                                    $d = date("d-m-Y", strtotime($row['deadline']));
                                    $dl = $row['datasetlength'];
                                    $live = "Active";
                                    $c =  $row['completed'];
                                    $p =  $row['pc'];
                                    $x = "3456789056789";
                                    // Update maximum width for each column
                                    if($wid != NULL and $dl !== $c){
                                      $maxWidths[0] = max(isset($maxWidths[0]) ? $maxWidths[0] : 0, strlen($name));
                                      $maxWidths[7] = max(isset($maxWidths[7]) ? $maxWidths[7] : 0, strlen($live));
                                      $maxWidths[1] = max(isset($maxWidths[1]) ? $maxWidths[1] : 0, strlen($wid));
                                      $maxWidths[2] = max(isset($maxWidths[2]) ? $maxWidths[2] : 0, strlen($a));
                                      $maxWidths[3] = max(isset($maxWidths[3]) ? $maxWidths[3] : 0, strlen($d));
                                      $maxWidths[4] = max(isset($maxWidths[4]) ? $maxWidths[4] : 0, strlen($row['datasetlength']));
                                      $maxWidths[5] = max(isset($maxWidths[5]) ? $maxWidths[5] : 0, strlen($c));
                                      $maxWidths[6] = max(isset($maxWidths[6]) ? $maxWidths[6] : 0, strlen($p));
                                      $maxWidths[7] = max(isset($maxWidths[7]) ? $maxWidths[6] : 0, strlen($x));
                                      echo "<tr>";
                                      if($row['deadline']<date("Y-m-d")){
                                        echo "<td style='color:#FF0000;'>$name</td>";
                                      }
                                      else{
                                        echo "<td >$name</td>";
                                      }
                                      echo "<td>$wid</td>";
                                      echo "<td>$a</td>";
                                      echo "<td>$d</td>";
                                      echo "<td>$dl</td>";
                                      echo "<td>$c</td>";
                                      echo "<td>$p</td>";
                                      echo "<td>";
                                      echo "<button id='editButton' value='edit' class=' edit-button btn-primary ' onclick='update(\"$name\")'>update</button>";
                                      echo "</td>";
                                      echo "</tr>";
                                    }
                                }
                                
                                // Generate CSS style for column widths
                                echo "<style>";
                                for ($i = 0; $i < count($maxWidths); $i++) {
                                    $width = ($maxWidths[$i] + 1) . "ch";
                                    echo "#team-table td:nth-child(" . ($i + 1) . "), ";
                                    echo "#team-table th:nth-child(" . ($i + 1) . ") {";
                                    echo "  min-width: $width;";
                                    echo "}";
                                }
                                echo "</style>";
                            } else {
                                echo "<tr><td colspan='5'>No rows found.</td></tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <p><span style="color:red;">*</span> Persons marked in red are running out of deadline</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->
<hr>
<h3 style="text-align: center;">Work History</h3>
<div class="row justify-content-center">
  <div class="col-md-7">
    <div class="card custom-card custom-table-card table-card">
      <div class="card-body">
        <div class="table-container">
                  <table class="table" id="team-table">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>WorkID</th>
                            <th>Assign date</th>
                            <th>End date</th>
                            <th>DA</th>
                            <th>DC</th>
                            <th>PC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = 'UPDATE teamlogin
                                SET pc = (completed/datasetlength) * 100
                                WHERE completed IS NOT NULL AND datasetlength IS NOT NULL';
                        mysqli_query($conn, $sql);
                        $sql = 'SELECT * FROM teamlogin';
                        if ($result = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                $maxWidths = array(); // Array to store maximum width for each column

                                while ($row = $result->fetch_assoc()) {
                                    $name = $row['username'];
                                    $wid = $row['workid'];
                                    $a = date("d-m-Y", strtotime($row['assigndate']));
                                    $d = date("d-m-Y", strtotime($row['deadline']));
                                    $dl = $row['datasetlength'];
                                    $live = "Active";
                                    $c =  $row['completed'];
                                    $p =  $row['pc'];
                                    $x = "3456789056789";
                                    // Update maximum width for each column
                                    if($wid != NULL and $dl == $c){
                                      $maxWidths[0] = max(isset($maxWidths[0]) ? $maxWidths[0] : 0, strlen($name));
                                      $maxWidths[7] = max(isset($maxWidths[7]) ? $maxWidths[7] : 0, strlen($live));
                                      $maxWidths[1] = max(isset($maxWidths[1]) ? $maxWidths[1] : 0, strlen($wid));
                                      $maxWidths[2] = max(isset($maxWidths[2]) ? $maxWidths[2] : 0, strlen($a));
                                      $maxWidths[3] = max(isset($maxWidths[3]) ? $maxWidths[3] : 0, strlen($d));
                                      $maxWidths[4] = max(isset($maxWidths[4]) ? $maxWidths[4] : 0, strlen($row['datasetlength']));
                                      $maxWidths[5] = max(isset($maxWidths[5]) ? $maxWidths[5] : 0, strlen($c));
                                      $maxWidths[6] = max(isset($maxWidths[6]) ? $maxWidths[6] : 0, strlen($p));
                                      echo "<tr>";
                                      if($row['deadline']<date("Y-m-d")){
                                        echo "<td style='color:#FF0000;'>$name</td>";
                                      }
                                      else{
                                        echo "<td >$name</td>";
                                      }
                                      echo "<td>$wid</td>";
                                      echo "<td>$a</td>";
                                      echo "<td>$d</td>";
                                      echo "<td>$dl</td>";
                                      echo "<td>$c</td>";
                                      echo "<td>$p</td>";
                                      echo "</tr>";
                                    }
                                }
                                
                                // Generate CSS style for column widths
                                echo "<style>";
                                for ($i = 0; $i < count($maxWidths); $i++) {
                                    $width = ($maxWidths[$i] + 1) . "ch";
                                    echo "#team-table td:nth-child(" . ($i + 1) . "), ";
                                    echo "#team-table th:nth-child(" . ($i + 1) . ") {";
                                    echo "  min-width: $width;";
                                    echo "}";
                                }
                                echo "</style>";
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
<script>
  function update(id){
    window.location.href = `updatedata1.php?id=${id}`;
  }
</script>
</body>
</html> 