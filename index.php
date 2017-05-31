<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Kalkulator Sederhana</title>
</head>

<body>
	<?php 
	if(isset($_POST['hitung'])){
		$NilaiA = $_POST['NilaiA'];
		$NilaiB = $_POST['NilaiB'];
		$operasi = $_POST['operasi_perhitungan'];
		switch ($operasi) {
			case 'penjumlahan':
				$hasil = $NilaiA+$NilaiB;
			break;
			case 'pengurangan':
				$hasil = $NilaiA-$NilaiB;
			break;
			case 'perkalian':
				$hasil = $NilaiA*$NilaiB;
			break;
			case 'pembagian':
				$hasil = $NilaiA/$NilaiB;
			break;			
		}
	}
	?>
	<form name="form" method="post" action="">
	<table width="417" border="0">
	  <tr>
	    <td width="59">Nilai A </td>
	    <td width="166"><input type="text" name="NilaiA"></td>
	  </tr>
	  <tr>
	    <td>Nilai B </td>
	    <td><input type="text" name="NilaiB"<td>
	  </tr>
	  <tr>
	    <td>Operasi</td>
	    <td><select name="operasi_perhitungan" size="1">
			<option>-- Pilih --</option>
			<option value="penjumlahan">+</option>
			<option value="pengurangan">-</option>
			<option value="perkalian">x</option>
			<option value="pembagian">:</option>
	    </select></td>
	  </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td><input type="submit" name="hitung" value="Hitung"></td>
	  </tr>
	  <tr>
	    <td>Hasil</td>
	    <?php if(isset($_POST['hitung'])){ ?>
	    	<td><input type="text" value="<?php echo $hasil; ?>"></td>
	    <?php }else{ ?>
	    	<td><input type="text" value="0"></td>
	    <?php } ?>
	  </tr>
	</table>
	</form>
</body>
</html>
