<?php
    include("database.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
      font-family: Georgia, serif;
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
      background-color: #f2f2f2;
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
  background-color: #4caf50;
}
.remove-button:hover{
  background-color: #FF0000;
}
.options-buttons {
  display: inline-block;
}

.options-buttons button {
  margin-right: 4px;
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
  max-width: 500px;
}

.close {
  float: right;
  font-size: 24px;
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
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
      <li class="nav-item active">
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
        <a class="nav-link text-white" href="adminlogin.php">Logout</a>
      </li>

    </ul>
  </div>
</nav>
  <div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card custom-card custom-form-card" id="formCard">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Add a team member</h5>
        <form id="registrationForm" method="post" action="addteam.php">
        <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <input type="password"  class="form-control" id="password" name="pass" placeholder="Enter a password" required>
              </div>
              <div class="form-group">
                <input type="password"  class="form-control" id="rpassword" placeholder="Re-enter password" required>
              </div>
              <div class="form-group">
                <input type="number"  class="form-control" name = "contact" id="num" placeholder="Enter contact number" required>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="im" id="imageUpload" accept="image/*" required>
                  <label class="custom-file-label" for="imageUpload">Choose file</label>
                </div>
              </div>
              <button type="submit" id="myButton" name = "btn" class="btn btn-primary custom-button">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--  -->
<br>
<div class="row justify-content-center">
  <div class="col-md-7">
    <div class="card custom-card custom-table-card table-card">
      <div class="card-body">
        <h5 class="card-title " >Team Details</h5>
        <table class="table" id="team-table">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = 'SELECT * FROM teamlogin';
                        if ($result = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                $maxWidths = array(0,0,0,0,0); // Array to store maximum width for each column

                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $name = $row['username'];
                                    $email = $row['email'];
                                    $contact = $row['contact'];
                                    $live = "Activegdgsjghjc";
                                    // Update maximum width for each column
                                    $maxWidths[0] = max(isset($maxWidths[0]) ? $maxWidths[0] : 0, strlen($id));
                                    $maxWidths[1] = max(isset($maxWidths[1]) ? $maxWidths[1] : 0, strlen($name));
                                    $maxWidths[2] = max(isset($maxWidths[2]) ? $maxWidths[2] : 0, strlen($email));
                                    $maxWidths[3] = max(isset($maxWidths[3]) ? $maxWidths[3] : 0, strlen($contact));
                                    $maxWidths[4] = max(isset($maxWidths[4]) ? $maxWidths[4] : 0, strlen($live));
                                    echo "<tr>";
                                    echo "<td>$id</td>";
                                    echo "<td>$name</td>";
                                    echo "<td>$email</td>";
                                    echo "<td>$contact</td>";
                                    echo "<td>";
                                    echo "<button id='editButton' value='edit' class=' edit-button btn-primary ' onclick='editForm(\"$name\")'>Edit</button>";
                                    echo "<button class='remove-button' style='background-color: #FF0000;' onclick='removeRow(\"$name\")'>Remove</button>";
                                    echo "</td>";
                                    echo "</tr>";
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script>
    document.getElementById('imageUpload').addEventListener('change', function (e) {
        var fileName = e.target.files[0].name;
        var label = document.querySelector('.custom-file-label');
        label.textContent = "File uploaded";
    });
     const button = document.getElementById('myButton');
     button.addEventListener('click', function() {
      var a = document.getElementById('password').value;
      var b = document.getElementById('rpassword').value;
      if (a !== b) {
                alert('re-entered password is not matching with entered password');
                event.preventDefault();
        }
    });
    // Get the edit button, form container, close button, and form inputs
  function editForm(id) {
    window.location.href = `updatedata.php?id=${id}`;
}
  function removeRow(id){
    window.location.href = `remove.php?id=${id}`;
  }

  </script>
</body>
</html>
<?php 
    if(isset($_POST["btn"])){
      $username = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
      $pass = filter_input(INPUT_POST,"pass",FILTER_SANITIZE_SPECIAL_CHARS);
      $mail =  $_POST["email"];
      $con  =  filter_input(INPUT_POST,"contact",FILTER_SANITIZE_SPECIAL_CHARS);
      $img = filter_input(INPUT_POST,"im",FILTER_SANITIZE_SPECIAL_CHARS);
      $sql = "INSERT INTO teamlogin(username,password,email,contact,image)
              VALUES ('$username','$pass','$mail','$con','$img')";
      try{
        mysqli_query($conn, $sql);
        echo '<script> 
          window.location.href = "addteam.php";
          alert("user successfully added");
          </script>';
      }
      catch(mysqli_sql_exception){
        echo '<script> 
        window.location.href = "addteam.php";
        alert("found multiple users with same name");
        </script>';
      }
    }

?>