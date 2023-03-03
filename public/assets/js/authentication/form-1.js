var togglePassword = document.getElementById("toggle-password");
var toggleConfirmPassword = document.getElementById("toggle-confirm-password");

if (togglePassword) {
	togglePassword.addEventListener('click', function() {
	  var x = document.getElementById("password");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }

	});
}

if (toggleConfirmPassword) {
	toggleConfirmPassword.addEventListener('click', function() {
        console.log('clicked');
	  var y = document.getElementById("confirm-password");

	  if (y.type === "password") {
	    y.type = "text";
	  } else {
	    y.type = "password";
	  }
	});
}
