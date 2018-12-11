<?php 
	
	require_once 'Games/gta.php';
	require_once 'Games/black.php';
	require_once 'Games/balap_sepeda.php';
	require_once 'Games/clashofclans.php';
	require_once 'Games/free_fire.php';

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
				<th colspan="2">CLASS GAMES</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="2" align="center">
					<hr>
					<?php echo $black->Melompat(); ?></br>
					<?php echo $black2->MembukaPerasut(); ?></br>
					<?php echo $black3->MencariSenjata(); ?></br>
					<?php echo $black4->MendapatkanSenjata(); ?></br>
					<?php echo $black5->Menembak(); ?></br>
					<hr>
					<?php echo $gta->MenjalankanMissi(); ?></br>
					<?php echo $gta2->Mengapung(); ?></br>
					<?php echo $gta3->MencariPenumpang(); ?></br>
					<?php echo $gta4->Berperang(); ?></br>
					<?php echo $gta5->MemodifMobil(); ?></br>
					<hr>
					<?php echo $balap_sepeda->MulaiBalapan(); ?></br>
					<?php echo $balap_sepeda2->TambahKecepatan(); ?></br>
					<?php echo $balap_sepeda3->KurangiKecepatan(); ?></br>
					<?php echo $balap_sepeda4->Melompat(); ?></br>
					<?php echo $balap_sepeda5->BalapanSelesai(); ?></br>
					<hr>
					<?php echo $free_fire->Melompat(); ?></br>
					<?php echo $free_fire2->MembukaPerasut(); ?></br>
					<?php echo $free_fire3->Berkumpul(); ?></br>
					<?php echo $free_fire4->Berlari(); ?></br>
					<?php echo $free_fire5->MenggunakanSquad(); ?></br>
					<hr>
					<?php echo $clash_of_clans->MembangunPertahanan(); ?></br>
					<?php echo $clash_of_clans2->MenaikiPerahu(); ?></br>
					<?php echo $clash_of_clans3->MenyusunStrategi(); ?></br>
					<?php echo $clash_of_clans4->MenggunakanRamuan(); ?></br>
					<?php echo $clash_of_clans5->MenghapusTanaman(); ?></br>
				
				</td>
			</tr>
		</tbody>
			<tr>
				<th colspan="2">
					<button type="submit"><a href="index.php">Back</a></button>
				</th>
			</tr>
		</tbody>						
	</table>
</body>
</html>