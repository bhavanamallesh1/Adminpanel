<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <style>
        body{
    background-color:whitesmoke;
        }
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.box {
  width: 400px;
  height: 200px;
  background-color: white;
  box-shadow: 0px 0px 10px black ;
  border-radius: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.centered-buttons {
  display: flex;
}

button {
  margin: 10px;
  color: white;
    background-color: black;
    padding: 10px;
    border-radius: 10px;
}
button:hover {
  background-color: #dcdcdc;
  cursor: pointer;
  color: black;
}

    </style>
</head>
<body>
<div class="container">
  <div class="box">
    <div class="centered-buttons">
      <button onclick="redirectToPage1()">Admin Login</button>
      <button onclick="redirectToPage2()">Team Login</button>
    </div>
  </div>
</div>
<script>
    function redirectToPage1() {
    window.location.href = "adminlogin.php";
  }

  function redirectToPage2() {
    window.location.href = "teamlogin.php";
  }
</script>
</body>
</html>