<?php
	session_start();
	$title=array("Kirito Action Figure","Kirito's Blade Key Chain","Sinon Figurine","Megumin T's","Darkness T's");
	$sub=array("Sword Art Online","Sword Art Online","Sword Art Online","Kono Subarashii Sekai ni Shukufuku wo","Kono Subarashii Sekai ni Shukufuku wo");
	$price=array("22.50","12.50","22.00","10.00","10.00");
	if(isset($_GET['a'])){
		$a=$_GET['a'];
	}elseif(isset($_POST['a'])){
		$a=$_POST['a'];
	}
	if(isset($_POST['button'])){
		if($_POST['button']=="Next"){
			$a++;
		}elseif($_POST['button']=="Previous"){
			$a--;
		}
	}
	if($a==6){
		$a=1;
	}else if($a==0){
		$a=5;
	}
?>
<html>
	<head><style>
		div{
			 width: 150px;
			 height: 75px;
			 border-color: red;
			 border-radius:  25px;
			 text-align:center;
			 vertical-align:middle; 
			 line-height: 75px;
			 font-family:Forte;
			 font-size:30px;
			color:red;
		}	
	</style></head>
	<body><form action="prom.php" method="POST">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="button" value="Previous"><input type="submit" name="button" value="Next">
		<table><tr>
			<td><img src="a<?php echo $a; ?>.jpg" width="200px" height="300px"></td>
			<td width="400px">
				<?php
					echo '<p style="font-size:20px;font-family:Constantia;text-align:center">' . $a . '<br>' . $title[$a-1] . '<br>' . $sub[$a-1] . '<br>PRICE : $ ' . $price[$a-1] . '</p>'
				?>
				<input type="hidden" name="a" value="<?php echo $a; ?>">
			</td>
			<td>
				<a href="buy.php" style="text-decoration:none;">
					<div >
						Buy this
						<?php
							$_SESSION['image']='a' . $a .'.jpg';
							$_SESSION['title']=$title[$a-1];
							$_SESSION['sub']=$sub[$a-1];
							$_SESSION['price']=$price[$a-1];
						?>
					</div>
				</a>
			</td>
		</tr></table>
		</form></body>
</html>