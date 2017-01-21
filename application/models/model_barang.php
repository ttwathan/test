<?php
	
	/**
	* 
	*/
	class Model_barang extends CI_Model
	{
		
		function list_barang()
		{
			//ambil data barang
			$barang = $this->db->get('barang');
			//$barang = array('topi','kemeja','boxer')\;
			return $barang;
		}
	}


?>