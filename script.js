function togglePasswordVisibility() {
    const passwordField = document.getElementById('pass');
    const toggleIcon = document.querySelector('.toggle-password');
  
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      toggleIcon.classList.remove('fa-eye');
      toggleIcon.classList.add('fa-eye-slash');
    } else {
      passwordField.type = 'password';
      toggleIcon.classList.remove('fa-eye-slash');
      toggleIcon.classList.add('fa-eye');
    }
  }
  let captcha;
function generate() {
	captcha = document.getElementById("image");
	let uniquechar = "";
	const randomchar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	for (let i = 1; i < 5; i++) {
		uniquechar += randomchar.charAt(
			Math.random() * randomchar.length)
	}
	captcha.innerHTML = uniquechar;
}
