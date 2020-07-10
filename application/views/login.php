<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Page</title>
	<script type="text/javascript">
		function validateForm() {
			if (document.forms['login']['username'].value == "") {
				alert("enter a username");
				return false;
			}
			if (document.forms['login']['password'].value == "") {
				alert("enter a password");
				return false;
			}
		}
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
</head>

<body>
	<div class="loginbox">
		<h1>Awesoft Company</h1>
		<form id="loginform" name="login" action="<?php echo base_url(); ?>index.php/welcome/dashboardq" method="post" onsubmit="return validateForm()">
			<label for="uname">Username</label><br>
			<input type="text" id="usernameid" name="username" value=""><br>
			<label for="lname">Password</label><br>
			<input type="password" id="passwordid" name="password" value=""><br><br>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>

<body>
	<div>
		<a href="http://localhost/awesoftdatabase/index.php/welcome/adduser" class="button">Register</a>
		
		</form>
	</div>
</body>

</form>
	</div>
</body>


</html>