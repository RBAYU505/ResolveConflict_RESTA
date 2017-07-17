<form action="simpandata.php" method="post">
<fieldset>
<h2>SEWA BUKU</h2>
<hr/>
<table>
<tr>
	<td>Kode Sewa</td>
	<td><input type="text" name="kodengesek" size=10"/></td>
</tr>
<tr>
	<td>Kode Buku</td>
	<td><input type="text" name="kode" size="7"/></td>
</tr>
<tr>
	<td>Judul Buku</td>
	<td><input type="text" name="judul"/></td>
</tr>
<tr>
	<td>Tangal Sewa</td>
	<td><select name="hari">
	<?php
	for($hari=1; $hari<=31; $hari++){
		$htgl = str_pad($hari,2,"0",STR_PAD_LEFT);
		echo "<option value='$htgl'> $htgl </option>";
	}
	?>
	</select>
	<select name="bulan">
	<?php
	for($bulan=1; $bulan<=12; $bulan++){
		$bln = str_pad($bulan,2,"0",STR_PAD_LEFT);
		echo "<option value='$bln'> $bln </option>";
	}
	?>
	</select>
	<select name="tahun">
	<?php
	$tahun_sekarang = date("Y");
	$tahun_awal = $tahun_sekarang-10;
	$tahun_akhir = $tahun_sekarang+10;
	for($tahun=$tahun_akhir; $tahun>=$tahun_awal; $tahun--){
		echo "<option value='$tahun'>$tahun</option>";
	}
	?>
	</select></td>
</tr>
<tr>
	<td>Tanggal Kembali</td>
	<td><select name="tgl">
	<?php
	for($hari=1; $hari<=31; $hari++){
		$htgl = str_pad($hari,2,"0",STR_PAD_LEFT);
		echo "<option value='$htgl'> $htgl </option>";
	}
	?>
	</select>
	<select name="bln">
	<?php
	for($bulan=1; $bulan<=12; $bulan++){
		$bln = str_pad($bulan,2,"0",STR_PAD_LEFT);
		echo "<option value='$bln'> $bln </option>";
	}
	?>
	</select>
	<select name="thn">
	<?php
	$tahun_sekarang = date("Y");
	$tahun_awal = $tahun_sekarang-10;
	$tahun_akhir = $tahun_sekarang+10;
	for($tahun=$tahun_akhir; $tahun>=$tahun_awal; $tahun--){
		echo "<option value='$tahun'>$tahun</option>";
	}
	?>
	</select></td>
</tr>
</table>
<hr/>
<input type="submit" value="Simpan"/>
<input type="reset" value="Reset"/>
</fieldset>
</form>
