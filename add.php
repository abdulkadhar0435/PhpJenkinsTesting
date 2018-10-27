<html>
<head>
</head>
<body>
	<form method="post" action="">
		<input type="number" name="firstval">
		<input type="number" name="secondval">
		<input type="submit" name="SubmitButton">
		Result : <?php if(isset($message)){ echo $message; } ?>
	</form>
</body>
</html>

<?php
if(isset($_POST['SubmitButton'])){ 
  $firstval = $_POST['firstval1']; 
  $secondval = $_POST['secondval']; 
 echo $total = $firstval + $secondval;
  $message = "Success! Total: ".$total;
}  

?>