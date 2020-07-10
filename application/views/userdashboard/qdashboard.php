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
	<div id="userlistbox">
		<h1>All questions <?php echo $username ?></h1>
		<ul class="userlist">
			<?php foreach ($questions as $qu) {
				//echo "<a href=" . base_url() . "index.php/welcome/editqu?id=$qu->qid><li>$qu->question</li></a>";
				echo "<a><li>$qu->question</li></a>";
			}
			?>
		</ul>
		<form name="adduseraction" action="<?php echo base_url(); ?>index.php/welcome/addqu" method="get">
			<input type="submit" value="Add new question">
		</form>
		<form action="http://localhost/awesoftdatabase/index.php/welcome/dashboard">
			<input type="submit" value="Back to Dashboard" >
			</form>
	</div>
</body>

</html>