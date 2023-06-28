<?php
    include("database.php");
    include("db2.php");
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
      margin: 0;
      padding: 0;
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
.info-box {
    border: 1px solid #ccc;
    padding: 12px;
    margin-bottom: 10px;
    background-color: #3CB043;
    border-radius: 4px;
    box-shadow: beige;
}
.out_box{
    padding: 12px;
    /* margin-bottom: 10px;
    border-radius: 4px;
    box-shadow: beige; */
}
.info-box-inner {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.info-box-item {
    flex: 0 0 auto;
    width: 150px; /* Adjust the width as per your preference */
    margin-right: 20px; /* Adjust the spacing between boxes */
    text-align: center;
    word-wrap: break-word;
}

.info-box h4 {
    font-size: 15px;
    margin-bottom: 5px;
}

.info-box p {
    margin: 0;
    font-size: 18px;
    font-weight: bold;
}

.cancelButton {
  margin-left: 10px;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: fit-content;
  margin-bottom: 4px;
  padding-bottom: 20px;
}

.form-container {
  width: 100%;
  background-color: #f7f7f7;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
select{
  width: 350px;
  padding: 10px;
  margin-bottom: 4px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: none;
}
button {
  padding:6px 15px;
  background-color: #3A5311;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  margin-left: 10px;
  margin-top: -6px; /* Adjust the margin to move the button slightly upward */
  transition: background-color 0.3s;
}
.subb{
  padding:6px 15px;
  background-color: #3A5311;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  margin-left: 10px;
  margin-left: auto;
  /* margin-top: -6px; Adjust the margin to move the button slightly upward */
  transition: background-color 0.3s;
}
.dis{
  padding:6px 15px;
  background-color: #3A5311;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  margin-right: auto;
  /* margin-top: -6px; Adjust the margin to move the button slightly upward */
  transition: background-color 0.3s;
}
button:hover {
  background-color: #45a049;
}
.navbar-nav .active {
  background-color: black;
  color: black;
}
.inputFieldWrapper {
  display: flex;
  align-items:center;
}

.inputFieldWrapper:not(:last-child) {
  margin-bottom: 10px;
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
.button-container {
  display: flex;
  justify-content: space-between;
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
    .pr {
  padding:6px 15px;
  background-color: #3A5311;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  margin-left: 10px;
  margin-top: -15px;
  transition: background-color 0.3s;
}
.pr:hover {
  background-color: #45a049;
}
.navbar-nav .active {
  background-color: black;
  color: black;
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
  color: black;
}
.table-card {
    border: none; /* Remove the card outline */
  }
.bt{
  display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
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
      <li class="nav-item ">
        <a class="nav-link text-white" href="assignwork.php">Assign work</a>
      </li>
      <li class="nav-item active" >
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
<!--  -->
<div class="bt">
 <strong> <p style="font-size:20px;">To fetch complete data form data base</p> </strong>
<form >
        <input type="button" onclick="redirect()" value="Fetch Full Data" class="pr" name="fdata">
</form>
</div>
<hr>
<div class="container">
  <div class="form-container">
    <form method="post" action="filter.php">
    <h5>Search by name</h5>
      <input type="text" name="fname" placeholder="Enter first name">
      <input type="text" name="lname" placeholder="Enter last name">
      <hr>
      <h5>Search by Email</h5>
      <input type="email" name="email1" placeholder="Enter primary email"    >
      <hr>
      <h5>Enter PG details</h5>
      <input type="text" name="puniversity" placeholder="Enter University/Collage Name">
      <select id="countryDropdown2" onchange="updateState2()" placeholder="Select country" name="pcountry">
      <option value="Select University country">Select University country</option></select>
      <select id="stateDropdown2" placeholder="Select state" name="pstate">
      <option value="Select University state">Select University state</option>
      </select>
      <input type="text" name="pprog" placeholder="Enter Program" style="width: 300px;" >
      <input type="text" name="pspec" placeholder="Enter Specialization" style="width: 300px;" >
      <input type="number" id="pyear" name="pyear" placeholder="Enter passing year" >
      <hr>
      <h5>Enter UG details</h5>
      <input type="text" name="university" placeholder="Enter University/Collage Name"    >
      <select id="countryDropdown" onchange="updateStates()" placeholder="Select country" name="ucountry"    >
      <option value="Select University country">Select University country</option></select>
      <select id="stateDropdown" placeholder="Select state" name="ustate"     >
      <option value="Select University state">Select University state</option>
      </select>
      <input type="text" name="uprog" placeholder="Enter Program" style="width: 300px;"    >
      <input type="text" name="uspec" placeholder="Enter Specialization" style="width: 300px;"   >
      <input type="number" id="year" name="uyear" placeholder="Enter passing year"    >
      <hr>
      <h5>Address</h5>
      <select id="countryDropdown1" onchange="updateState()" placeholder="Select country" name="rcountry"     >
      <option value="">Select resident country</option>
      </select>
      <select id="stateDropdown1" placeholder="Select state" name="rstate"    >
      <option value="Select resident state">Select resident state</option>
      </select>
      <hr>
      <h5>Role Selection</h5>
    <select  placeholder="Select Role" name="applied">
      <option value="--">Select Applied Role</option>
      <option value="PHP_Developer">PHP_Developer</option>
      <option value="Django_Developer">Django_Developer</option>
      <option value="Crossplatform_Developer">Crossplatform_Developer</option>
      <option value="Python_Developer">Python_Developer</option>
      <option value="FrontEnd_Developer">FrontEnd_Developer</option>
      </select>
      <hr>
      <h5>Fresher / Experienced</h5>
      <select id="experience" placeholder="Select Role" onchange="toggle()" name="ptype"     >
      <option value="-">Select Type</option>
      <option value="Fresher">Fresher</option  >
      <option value="Experienced">Experienced</option  >
      
      </select>
      <div id="selector" style="display: none;">
        <input type="text" id="field1" name="cname" placeholder="Enter Company Name">
        <input type="text" id="field2" name="role" placeholder="Enter Role"><br>
      </div>
      <hr>
      <h5>Skill Section</h5>
      <div id="skillcontainer">
        <div class="skillwrapper">
          <input type="text"  name="skill1" placeholder="Enter Skill" >
          <button id="addButton3">Add</button>
        </div>
      </div>
      <hr>
      <h5>Certificate Section</h5>
      <div id="ccontainer">
        <div class="cwrapper">
          <input type="text"  name="c1" placeholder="Enter Certification Name" >
          <button id="addButton4">Add</button>
        </div>
      </div>
      <hr>
      <div class="button-container">
      <button type="submit" value="Submit" onclick="validateDateRange()" name="submit" class="subb">Get Data</button>
      </div>
    </form>
  </div>
</div>
    <hr>
<!--  -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script>
    function redirect(){
        window.location.href = "printtable.php";
    }
   
  </script>
  <script src="djs.js"></script>
</body>
</html> 