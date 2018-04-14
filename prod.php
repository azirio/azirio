<?php
	session_start();
	$title=array("Yahari Ore no Seishun Love Comedy wa Machigatteiru","Sword Art Online","Ore no imouto ga konna ni kawaii wake ga nai","Accel World","Ano Hi Mita Hana no Namae o Bokutachi wa Mada Shiranai","Date A Live","Kore wa Zombie desu ka ?","Ookami to Koushinryou","Onii-chan Dakedo Ai Sae Areba Kankeinai yo ne","High School DxD","Fate/Zero","Monotogari: First Season","Monotogari: Second Season","Monotogari: Final Season","No Game No LIfe","Overlord","Kyoukai Senjou no Horizon","Baccano","Durarara","Kono Subarashii Sekai ni Shukufuku wo");
	$sub=array("OreGairu","S.A.O.","OreImo","Accel World","AnoHana","Date A Live","Is this a Zombie ?","Spice and Wolf","OniAi","High School DxD","Fate/Zero","Monotogari","Monotogari","Monotogari","No Game No Life","Overlord","Horizon in the Middle of Nowhere","Baccano","Durarara","KonoSuba");
	$price=array("3.50","3.30","2.75","3.80","4.00","4.70","3.00","3.00","3.20","3.80","3.10","4.30","4.30","4.30","4.00","4.90","3.00","3.00","3.20","3.80");
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
	if($a==21){
		$a=1;
	}else if($a==0){
		$a=20;
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
	<body><form action="prod.php" method="POST">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="button" value="Previous"><input type="submit" name="button" value="Next">
		<table><tr>
			<td><img src="<?php echo $a; ?>.jpg" width="200px" height="300px"></td>
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
							$_SESSION['image']=$a.'.jpg';
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