<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
    <script src="lib/js/jquery.min.js"></script>
<script src="lib/js/jquery-ui.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>
</head>
<body onload="generate()">
    <h1 style="text-align: center;">Admin login</h1>
    <div id="form">
        <form name="form" id="myForm" method="post" action="admindashboard.php">
            <label><input type="text" id = "user" name="username" class="custom-input" placeholder="Enter Email" required></label><br>
            <label><input type="password" id = "pass" name="pass" class="custom-input-pass" placeholder="Enter Password" required> &nbsp;<i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i><br></label>
            <label><input type="text" id = "chapta" name="chapta" placeholder="Enter Captcha" class="custom-input-Captcha" required> </label>
            <div class="inline" onclick="generate()">
            <i class="fas fa-sync"></i>
            </div>
            <div id="image" class="inline" selectable="False"></div><br>
            <div class="button-container">
            <input type="submit" id = "btn" value="Login" name = "submit">
            </div><br>
            <div class="button-container">
            <button id = "btn" onclick="switchToTeamLogin()">Switch to Team Login</button>
        </div>
        </form>

    </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script>
        function switchToTeamLogin() {
    window.location.href = "teamlogin.php";
}
        var form = document.getElementById('myForm');
        var submitButton = document.getElementById('btn');
        form.addEventListener('submit', function(event) {
        var enteredCaptcha = document.getElementById('chapta').value;
        var user = document.getElementById('user').value;
        var pass = document.getElementById('pass').value;
        var generatedCaptcha = document.getElementById('image').innerText
        if (enteredCaptcha !== generatedCaptcha) {
                alert('CAPTCHA verification failed. Please try again.');
                location.reload();
                event.preventDefault();
        }else if (user !== "Mallesh" || pass !== "mallesh93"){
                alert("Login failed . Invalid username or password !!!!");
                location.reload();
                event.preventDefault();
        }
        });
    </script>
</body>
</html>