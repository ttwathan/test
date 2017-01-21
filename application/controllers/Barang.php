<?php
	/**
	* 
	*/
	class Barang extends CI_Controller 
	{
		
		function index ()
		{
			$this->load->model('model_barang');
			
			$judul = "Daftar Barang Free Ongkir";
			$data['judul'] = $judul;
			$data['barang'] = $this->model_barang->list_barang()->result();
			$this->load->view('list_barang',$data);
			//echo "hello worldsss";
		}

		function input (){
			$this->load->view('input_barang');
		}

		function simpan_input (){
			
			$databarang = array(
				'kode_barang' 	=> $this->input->post('kode_barang'),
				'nama_barang' 	=> $this->input->post('nama_barang'),
				'harga_barang' 	=> $this->input->post('harga_barang') );

			$this->db->insert('barang',$databarang);
			redirect('barang');
		}

		function edit ()
		{
			echo $this->uri->segment(2);
			//echo "Halaman EDIT";
		}
	}

?>