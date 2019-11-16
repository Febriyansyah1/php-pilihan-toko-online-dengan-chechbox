<!DOCTYPE html>
<html>
<head>
	<title>672017093</title>
</head>
<body>

	<form method="POST" action="">
		<br>Toko Online<br>
		<table border="1">
				<tr>
					<th>No</th>
					<th>&nbsp&nbsp Nama Barang &nbsp&nbsp</td>
					<th>&nbsp&nbsp Harga &nbsp&nbsp</th>
					<th>Beli</th>
				</tr>
				<tr>
					<td>1</td>
					<td>&nbsp Baju</td>
					<td>100000</td>
					<td><input type="checkbox" name="centang[]" value="0"> </td>
				</tr>
				<tr>
					<td>2</td>
					<td>&nbsp Celana</td>
					<td>120000</td>
					<td><input type="checkbox" name="centang[]" value="1"></td>
				</tr>
				<tr>
					<td>3</td>
					<td>&nbsp Sepatu</td>
					<td>300000</td>
					<td><input type="checkbox" name="centang[]" value="2"></td>
				</tr>
				<tr>
					<td>4</td>
					<td>&nbsp Sandal</td>
					<td>75000</td>
					<td><input type="checkbox" name="centang[]" value="3"></td>
				</tr>
				<tr>
					<td>5</td>
					<td>&nbsp Topi</td>
					<td>50000</td>
					<td><input type="checkbox" name="centang[]" value="4"></td>
				</tr>
			<br>
		</table>
			</h1><input type="submit" name="submit" value="Beli">
	</form>
		
			<br>
			<br>Keranjang<br> <br>

		<table border ="1">
			<tr>
				<th>&nbsp&nbsp Nama Barang &nbsp&nbsp</th>
				<th>&nbsp&nbsp Harga &nbsp&nbsp </th>
			</tr>
			<?php
		
		if (isset($_POST['centang'])) {

			$data1 = ["Baju","Celana","Sepatu","Sandal","Topi"];
			$data2 = [100000, 120000, 300000, 75000, 50000];

			$index =0;
			
			$ctg = $_POST['centang'];
		
			$jumlah1 = count($ctg);
			for($i=0; $i<$jumlah1; $i++){
				$x = $ctg[$i];

				

				echo "<tr>";
				echo "<td>".$data1[$x];
				echo "</td>";
				echo "<td>".$data2[$x];
				echo "</td>";
				echo "</tr>";
				
			}
			for($i=0; $i<$jumlah1; $i++){
				$x = $ctg[$i];
				$dat[ ] = $data2[$x]; 
			}
				$jum1 =  array_sum($dat);
				$jum2=  $jum1;
				$jum3 = $jum2;

				echo "<tr>";
				echo "<th>";
				echo "TOTAL";
				echo "</th>";
				echo "<td>";
				echo $jum2;
				echo "</td>";
				echo "</tr>";

			
				
}
				?>
	</table>
</body>
</html>
	