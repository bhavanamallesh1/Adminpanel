<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>team login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</head>
<body onload="generate()">
<h1 style="text-align: center;">Team login</h1>
<div id="form">
        <form name="form" id="myForm" method="post" action="tlogin.php">
            <label><input type="mail" id = "user" name="mail" class="custom-input" placeholder="Enter Email" required></label><br>
            <label><input type="password" id = "pass" name="pass" class="custom-input-pass" placeholder="Enter Password" required> &nbsp;<i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i><br></label>
            <label><input type="text" id = "chapta" name="chapta" class="custom-input-Captcha" placeholder="Enter Captcha" required> </label>
            <div class="inline" onclick="generate()">
            <i class="fas fa-sync"></i>
            </div>
            <div id="image" class="inline" selectable="False"></div><br>
            <div class="button-container">
            <input type="submit" id = "btn" value="Login" name = "submit">
            </div>
            <br>
            <div class="button-container">
            <button id = "btn" onclick="switchToTeamLogin()">Switch to Admin Login</button>
        </div>
        </form>
       
    </div>
    <script>
                function switchToTeamLogin() {
    window.location.href = "adminlogin.php";
}
        var form = document.getElementById('myForm');
        var submitButton = document.getElementById('btn');
        form.addEventListener('submit', function(event) {
        var enteredCaptcha = document.getElementById('chapta').value;
        var generatedCaptcha = document.getElementById('image').innerText;
        if (enteredCaptcha !== generatedCaptcha) {
                alert('CAPTCHA verification failed. Please try again.');
                location.reload();
                event.preventDefault();
        }
        });
    </script>
</body>
</html>