<?php
	if (isset($_POST['submit'])) {
		$fullname = $_POST['fullname'];
		 	// <script>alert("xss??")</script>
		// phon9 chon9: transform special charactors into safety ones before showin9 them
		$fullname = htmlspecialchars($fullname);
		echo "Your name: $fullname";	
		}			
?>

<form action="" method="Post">
	<label for="">Nhap ten:</label>
	<input type="text" name="fullname" id="">
	<input type="submit" value="hien thi ten" name="submit">
</form>	