<?php
	session_start();
?>

<html>
	<head><style>
	
	</style></head>
	<body><form action="red.php" method="post"><table>
	<tr>
		<td>
			<img src="<?php echo $_SESSION['image']; ?>" width="200px" height="300px"><br>
		</td>
		<td width="300px;">
			<?php
					echo '<p style="font-size:20px;font-family:Constantia"<br>' . $_SESSION['title'] . '<br>' . $_SESSION['sub'] . '<br>PRICE : $ ' . $_SESSION['price'] . '</p>'
			?>
			<input type="text" name="fname" placeholder="First Name" required><br>
			<input type="text" name="lname" placeholder="Last Name" required><br>
			<input type="text" name="address" placeholder="Address" required><br>
			<input type="text" name="num" placeholder="Contact number" required><br>
			<input type="submit" value="ORDER">
	</table></form></body>
</html>