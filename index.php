<?php 
	
	require_once 'Dangdut/penyanyi.php';
	require_once 'Dangdut/drummer.php';
	require_once 'Dangdut/bassis.php';
	require_once 'Dangdut/gitaris.php';
	require_once 'Dangdut/pianis.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hiburan</title>
	<style>
		table {
			border-radius: 10px;
			position: responsive;
		}
		th {
			border-radius: 10px;
			background-color: purple;
			border-color: gold;
			font-family: algerian;
			color: black;
		}
		td {
			border-radius: 10px;
			background-color: black;
			border-color: gold;
			font-family: algerian;
			color: white;
		}
		
	</style>
</head>
<body>
	<table border="2" align="center" cellspacing="15" cellpadding="15" style="background-color: silver; border-color: blue">
		<thead>
			<tr>
				<th colspan="2">CLASS PERSONIL</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="2" align="center">
					<hr>
					<?php echo $penyanyi->MinumAir(); ?></br>
					<?php echo $penyanyi2->Bergoyang(); ?></br>
					<?php echo $penyanyi3->Melompat(); ?></br>
					<?php echo $penyanyi4->Berteriak(); ?></br>
					<?php echo $penyanyi5->MengangkatTangan(); ?></br>
					<hr>
					<?php echo $bassis->SerongKiri(); ?></br>
					<?php echo $bassis2->SerongKanan(); ?></br>
					<?php echo $bassis3->Maju(); ?></br>
					<?php echo $bassis4->Mundur(); ?></br>
					<?php echo $bassis5->Duduk(); ?></br>
					<hr>
					<?php echo $drummer->MenggerakanKaki(); ?></br>
					<?php echo $drummer2->Berdiri(); ?></br>
					<?php echo $drummer3->MemutarStick(); ?></br>
					<?php echo $drummer4->Berteriak(); ?></br>
					<?php echo $drummer5->MengangkatTangan(); ?></br>
					<hr>
					<?php echo $pianisi->MengangkatTangan(); ?></br>
					<?php echo $pianisi2->Mengangguk(); ?></br>
					<?php echo $pianisi3->MenggerakanKaki(); ?></br>
					<?php echo $pianisi4->MenggerakanBadan(); ?></br>
					<?php echo $pianisi5->Bernyanyi(); ?></br>
					<hr>
					<?php echo $gitaris->SteamGitar(); ?></br>
					<?php echo $gitaris2->MengangkatTangan(); ?></br>
					<?php echo $gitaris3->Melompat(); ?></br>
					<?php echo $gitaris4->Bernyanyi(); ?></br>
					<?php echo $gitaris5->MuterinGitar(); ?></br>
				</td>
			</tr>
		</tbody>
			<tr>
				<th colspan="2">
					<button type="submit"><a href="games.php">Next</a></button>
				</th>
			</tr>
		</tbody>						
	</table>
</body>
</html>