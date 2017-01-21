<?php echo form_open('barang/simpan_input');	?>
<table border="1" align="center">
	<tr><td>KODE BARANG</td><td><?php echo form_input('kode_barang', '',array('placeholder' => 'kode barang')); ?></td></tr>
	<tr><td>NAMA BARANG</td><td><?php echo form_input('nama_barang', '',array('placeholder' => 'nama barang')); ?></td></tr>
	<tr><td>HARGA BARANG</td><td><?php echo form_input('harga_barang', '',array('placeholder' => 'harga barang')); ?></td></tr>
	<tr><td colspan="4" align="center">
	<?php echo form_submit('Submit','Simpan Barang');?>
	<?php echo anchor('barang','KEMBALI'); ?>		
	</td></tr>

</table>
<?php echo form_close(); ?>