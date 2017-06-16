<?php
class M_insert extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function save_kategori(){
		$simpan_data=array(
            'NAMA_KATEGORI'  => $this->input->post('nama_kategori_baru'),
            'STATUS_KATEGORI'  => 'Aktif'
			//'PATH_REKAMAN'  => $name
       );
        $simpan = $this->db->insert('kategori', $simpan_data);
        return $simpan;
	}
	function simpan_pengguna(){
		$username = $this->input->post('username');
		$email = $username."@rri.id";
		$simpan_data=array(
            'ID_USER'  => $this->input->post('username'),
            'NAMA_USER'  => $this->input->post('nama'),
            'PASSWORD'  => $this->input->post('password'),
            'STATUS_PEGAWAI'  => $this->input->post('status'),
            'JABATAN'  => $this->input->post('jabatan'),
            'EMAIL'  => $email
			//'PATH_REKAMAN'  => $name
       );
        $simpan = $this->db->insert('user', $simpan_data);
        return $simpan;
	}
	function simpan_reward(){
		$now = date('Y-m-d H:i:s');
		 $simpan_data=array(
            'JUMLAH_REWARD'  => $this->input->post('reward'),
			'TIMESTAMP_REWARD'  => $now
			//'PATH_REKAMAN'  => $name
       );
        $simpan = $this->db->insert('reward', $simpan_data);
        return $simpan;
	}
	function simpan_berita_tanpa_rekaman(){
		$now = date('Y-m-d H:i:s');
		 $simpan_data=array(
            'ID_USER'  => $this->input->post('id_user'),
            'ID_REWARD'  => $this->input->post('id_reward'),
			'JUDUL'  => $this->input->post('judul'),
			'ISI'  => $this->input->post('isi'),
			'TANGGAL_PEMBUATAN'  => $now,
			'ID_KATEGORI'  => $this->input->post('kategori')
			//'PATH_REKAMAN'  => $name
       );
        $simpan = $this->db->insert('berita', $simpan_data);
        return $simpan;
	}
	function simpan_berita($name){
		$now = date('Y-m-d H:i:s');
		 $simpan_data=array(
            'ID_USER'  => $this->input->post('id_user'),
            'ID_REWARD'  => $this->input->post('id_reward'),
			'JUDUL'  => $this->input->post('judul'),
			'ISI'  => $this->input->post('isi'),
			'TANGGAL_PEMBUATAN'  => $now,
			'ID_KATEGORI'  => $this->input->post('kategori'),
			'PATH_REKAMAN'  => $name
       );
        $simpan = $this->db->insert('berita', $simpan_data);
        return $simpan;
	}
	
}