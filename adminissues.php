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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    table {
      width: 80%;
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
.column {
      width: 500px;
      word-wrap: break-word; /* Allow the paragraph to wrap within the column */
    }
    .edit-button , .remove-button {
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
.remove-button:hover{
  background-color: #FF0000;
}
.options-buttons {
  display: inline-block;
}

.options-buttons button {
  margin-right: 5px;
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
      <li class="nav-item ">
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
      <li class="nav-item active">
  <a class="nav-link text-white" href="adminissues.php">Issues </a>
      </li>
      <li class="nav-item">
  <a class="nav-link text-white" href="adminlogout.php">Logout</a>
      </li>

    </ul>
  </div>
</nav>
<!--  -->
<div class="row justify-content-center">
  <div class="col-md-7">
    <div class="card custom-card custom-table-card table-card">
      <div class="card-body">
        <h4>Issues that are to be resolved</h4>
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
                        $sql = 'SELECT * FROM disparency';
                        if ($result = mysqli_query($con, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                $maxWidths = array(); // Array to store maximum width for each column

                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $wid = $row['wid'];
                                    $issue = $row['issue'];
                                    $state = $row['status'];
                                    // Update maximum width for each column
                                    if($wid != NULL and ($state != "1" ) and ( $state != "0")){
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
                                    echo "<a href='approve.php?id=" . $id . "'><button id='editButton' value='edit' class='send-row edit-button btn-primary '>approve</button></a>";
                                    echo "<a href='reject.php?id=" . $id . "'><button class='remove-button' style='background-color: #FF0000;' >reject</button></a>";
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
<hr>
<div class="row justify-content-center">
  <div class="col-md-7">
    <div class="card custom-card custom-table-card table-card">
      <div class="card-body">
        <h4>Issues already resolved</h4>
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
                        $sql = 'SELECT * FROM disparency';
                        if ($result = mysqli_query($con, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                $maxWidths = array(); // Array to store maximum width for each column

                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $wid = $row['wid'];
                                    $issue = $row['issue'];
                                    $state = $row['status'];
                                    // Update maximum width for each column
                                    if($wid != NULL and ($state === "1"  or $state === "0")){
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
<!--  -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<!--  -->
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
  $(document).ready(function() {
  $('.send-row').click(function() {
    var rowData = $(this).closest('tr').find('td').map(function() {
      return $(this).text();
    }).get();

    $.ajax({
      type: 'POST',
      url: 'approve.php',
      data: { row: rowData },
      success: function(response) {
        console.log('Data sent successfully.');
        // Handle the response from the PHP script if needed
      },
      error: function(xhr, status, error) {
        console.log('An error occurred while sending data: ' + error);
      }
    });
  });
});

</script>
</body>
</html> 