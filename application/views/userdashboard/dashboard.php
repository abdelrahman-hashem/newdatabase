<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">

</head>

<body>
	<h1>welcome <?php echo $username ?> </h1>

	<div id="userlistbox">
		<h2>All Users</h2>
		<ul class="userlist">
			<?php foreach ($users as $user) {
				echo "<a href=" . base_url() . "index.php/welcome/edituser?id=$user->uid><li>$user->Username</li></a>";
			}
			?>
		</ul>
		<form name="adduseraction" action="<?php echo base_url(); ?>index.php/welcome/adduser" method="get">
			<input type="submit" value="Add new User">
			</form>
			<form action="http://localhost/awesoftdatabase/index.php/welcome/dashboardq">
			<input type="submit" value="view questions" >
			</form>
		
	</div>
</body>

</html>