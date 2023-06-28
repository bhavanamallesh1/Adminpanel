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
    background-color: #f8f8f8;
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
  background-color: #3CB043;
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
  background-color: #3CB043;
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
  background-color: #3CB043;
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
      <li class="nav-item active">
        <a class="nav-link text-white " href="#">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link text-white" href="issues.php?user=<?php echo urlencode($name); ?>">Issues</a>
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
      <li class="nav-item active">
        <a class="nav-link text-white " href="#">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link text-white" href="issues.php?user=<?php echo urlencode($name); ?>">Issues</a>
      </li>
      <li>
        <a class="nav-link text-white" href="teamlogin.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<!------------------------------------------------------------------------------------------------------------------>

<div class="out_box">
    <div class="info-box-inner">
        <div class="info-box-item">
            <div class="info-box">
                <h4 >Work Id</h4>
                <p><?php echo $row['workid']?></p>
            </div>
        </div>
        <div class="info-box-item">
            <div class="info-box">
                <h4>Assigned date</h4>
                <p><?php echo date("d-m-Y", strtotime($row['assigndate']))?></p>
            </div>
        </div>
        <div class="info-box-item">
            <div class="info-box">
                <h4>Deadline</h4>
                <p><?php echo date("d-m-Y", strtotime($row['deadline']))?></p>
            </div>
        </div>
        <div class="info-box-item">
            <div class="info-box">
                <h4>Dataset length</h4>
                <p><?php echo $row['datasetlength']?></p>
            </div>
        </div>
        <div class="info-box-item">
            <div class="info-box">
                <h4>Entries Completed</h4>
                <p><?php echo $count ?></p>
            </div>
        </div>
    </div>
</div>
<h4 style="text-align: center; font-weight: bold;">
  <?php
        if ($row['datasetlength'] > $row['completed']){
            echo "Work yet to complete";
        }else{
            echo "Work Done";
        }
        if($row['deadline'] < date("Y-m-d")){
          echo "<br><span style='color:#FF0000;padding:100px;'>Deadline has passed!</span>";
        }elseif($row['deadline'] == date("Y-m-d")){
          echo "<br><span style='color:#FFA500;'>Today is last date for submittion!</span>";
        }
  ?>  
</h4>
<h3  style="text-align: center; font-weight: bold;">Phase 1</h3>
<div class="container">
  <div class="form-container">
    <form action="tdata.php?user=<?php echo urlencode($name); ?>" method="post">
    <h5>Identifier</h5>
      <input type="text" name="fname" placeholder="Enter first name" required >
      <input type="text" name="lname" placeholder="Enter last name" required >
      <hr>
      <h5>Enter Email</h5>
      <input type="email" name="email1" placeholder="Enter primary email" required >
      <input type="email" name="email2" placeholder="Enter secondary email (optional)" style="width: 300px;"  >
      <hr>
      <h5>Add Contact Details</h5>
      <div id="inputContainer">
        <div class="inputFieldWrapper">
          <input type="number" min="999999999" max="9999999999" name="num1" placeholder="Enter contact number" class="inputField" required >
          <button id="addButton1">Add</button>
        </div>
      </div>
      <hr>
      <h5>Enter PG details</h5>
      <input type="text" name="puniversity" placeholder="Enter University/Collage Name">
      <select id="countryDropdown2" onchange="updateState2()" placeholder="Select country" name="pcountry">
      <option value="">Select University country</option></select>
      <select id="stateDropdown2" placeholder="Select state" name="pstate">
      <option value="">Select University state</option>
      </select>
      <input type="text" name="pprog" placeholder="Enter Program" style="width: 300px;" >
      <input type="text" name="pspec" placeholder="Enter Specialization" style="width: 300px;" >
      <input type="number" id="pyear" name="pyear" placeholder="Enter passing year" >
      <hr>
      <h5>Enter UG details</h5>
      <input type="text" name="university" placeholder="Enter University/Collage Name" required >
      <select id="countryDropdown" onchange="updateStates()" placeholder="Select country" name="ucountry" required >
      <option value="">Select University country</option></select>
      <select id="stateDropdown" placeholder="Select state" name="ustate" required  >
      <option value="">Select University state</option>
      </select>
      <input type="text" name="uprog" placeholder="Enter Program" style="width: 300px;" required >
      <input type="text" name="uspec" placeholder="Enter Specialization" style="width: 300px;" required>
      <input type="number" id="year" name="uyear" placeholder="Enter passing year" required >
      <hr>
      <h5>Portfolio Links</h5>
      <input type="url" id="linkInput" name="glink" placeholder="Paste Github link">
      <input type="url" id="linkInput1" name="blink" placeholder="Paste Behance link">
      <input type="url" id="linkInput2" name="dlink" placeholder="Paste Driddle link">
      <input type="url" id="linkInput3" name="plink" placeholder="Paste Portfolio link">
      <hr>
      <h5>Project URLS</h5>
      <div id="pr">
        <div class="prw">
          <input type="url" name="url1" placeholder="Paste Project URL"  style="width: 350px;">
          <button id="addButton2">Add</button>
        </div>
      </div>
      <hr>
      <h5>Address</h5>
      <select id="countryDropdown1" onchange="updateState()" placeholder="Select country" name="rcountry" required  >
      <option value="">Select resident country</option>
      </select>
      <select id="stateDropdown1" placeholder="Select state" name="rstate" required >
      <option value="">Select resident state</option>
      </select>
      <input type="text" name="radd" placeholder="Enter Resident Address" style="width: 300px;" required  >
      <hr>
      <h3  style="text-align: center; font-weight: bold;">Phase 2</h3>
      <h5>Role Selection</h5>
    <select  placeholder="Select Role" name="applied" required >
      <option value="--">Select Applied Role</option>
      <option value="PHP_Developer">PHP_Developer</option>
      <option value="Django_Developer">Django_Developer</option>
      <option value="Crossplatform_Developer">Crossplatform_Developer</option>
      <option value="Python_Developer">Python_Developer</option>
      <option value="FrontEnd_Developer">FrontEnd_Developer</option>
      </select>
      <hr>
      <h5>Fresher / Experienced</h5>
      <select id="experience" placeholder="Select Role" onchange="toggle()" name="ptype" required  >
      <option>Select Type</option>
      <option value="Fresher">Fresher</option  >
      <option value="Experienced">Experienced</option  >
      
      </select>
      <div id="selector" style="display: none;">
        <input type="text" id="field1" name="cname" placeholder="Enter Company Name">
        <input type="text" id="field2" name="role" placeholder="Enter Role"><br>
        <h5>Select from date</h5>
        <input type="date" id="fromDate"  name="fdate" placeholder="Select a from date" onchange="validateDateRange()" >
        <h5>Select to date</h5>
        <input type="date" id="toDate" name="tdate" placeholder="Select a to date" onchange="validateDateRange()" >
        <p id="dateError" style="color: red;text-align:center"></p>
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
          <input type="url"  name="clink1" placeholder="Paste Certificate link ( if any )">
          <button id="addButton4">Add</button>
        </div>
      </div>
      <hr>
      <div class="button-container">
      <button type="submit" value="Submit" onclick="validateDateRange()" name="submit" class="subb">Submit</button>
      </div>
    </form>
  </div>
</div>
<script src="tjs.js"></script>
<?php 
}?>
<!------------------------------------------------phase 1--------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------------------------>

<!-- --------------------------------------------------------------------------------------------------------------->
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
