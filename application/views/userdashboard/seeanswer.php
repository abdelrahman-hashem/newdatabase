<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title> Dashboard</title>

	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
</head>

<body>
	<div class="loginbox">
		<h1>add answer to this question</h1>
		<form id="adduserform" name="seeanswer" action="<?php echo base_url(); ?>index.php/welcome/doseeanswer" method="post">
		
		<label for="answer">answer</label><br>
			<input type="text" id="answer_id" name="answer" value=""><br>
			
			
			<input type="submit" value="Submit">
		</form>
	</div>
</body>

</html>