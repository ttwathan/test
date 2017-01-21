<?php 
 echo $judul;
?> 
<?php echo anchor('barang/input','INPUT DATA BARANG BARU'); ?>
<hr>
<table border="1">
	<tr><th>Kode Barang</th><th>Nama Barang</th><th>Harga Barang</th><th>Update</th></tr>
<?php 
	foreach ($barang as $b) {
		echo "<tr>
				<td>$b->kode_barang</td>
				<td>$b->nama_barang</td>
				<td>$b->harga_barang</td>
			</tr>";
}
?>
</table>