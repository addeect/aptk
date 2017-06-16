<?php
class M_update extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function hapus_kategori(){
		//$now = date('Y-m-d H:i:s');
		$id = $this->input->post('id_kategori1');
		 $simpan_data=array(
            
			'STATUS_KATEGORI'  => 'Tidak Aktif'
			
       );
       	$this->db->where('ID_KATEGORI', $id);
		$this->db->update('kategori', $simpan_data);
        //return $query;
	}
	function edit_kategori(){
		//$now = date('Y-m-d H:i:s');
		$id = $this->input->post('id_kategori');
		 $simpan_data=array(
            
			'NAMA_KATEGORI'  => $this->input->post('nama_kategori')
			
       );
       	$this->db->where('ID_KATEGORI', $id);
		$this->db->update('kategori', $simpan_data);
        //return $query;
	}
	function reporter_perbarui_berita(){
		//$now = date('Y-m-d H:i:s');
		$id = $this->input->post('id_berita');
		 $simpan_data=array(
            
			'JUDUL'  => $this->input->post('judul'),
			//'STATUS_REVISI'  => 'DIEDIT OLEH REPORTER',
			//'TANGGAL_EDIT'  => $now,
			'ISI'  => $this->input->post('isi')
       );
       	$this->db->where('ID_BERITA', $id);
		$this->db->update('berita', $simpan_data);
        //return $query;
	}
	function reporter_koreksi_berita(){
		$now = date('Y-m-d H:i:s');
		$id = $this->input->post('id_berita');
		 $simpan_data=array(
            
			'JUDUL'  => $this->input->post('judul'),
			'STATUS_REVISI'  => 'DIEDIT OLEH REPORTER',
			'TANGGAL_EDIT'  => $now,
			'ISI'  => $this->input->post('isi')
       );
       	$this->db->where('ID_BERITA', $id);
		$this->db->update('berita', $simpan_data);
        //return $query;
	}
	function koreksi_berita(){
		$now = date('Y-m-d H:i:s');
		$id = $this->input->post('id_berita');
		 $simpan_data=array(
            
			'JUDUL'  => $this->input->post('judul'),
			'STATUS_REVISI'  => 'DIEDIT OLEH REDAKSI',
			'TANGGAL_EDIT'  => $now,
			'ISI'  => $this->input->post('isi')
       );
       	$this->db->where('ID_BERITA', $id);
		$this->db->update('berita', $simpan_data);
        //return $query;
	}
	function approve_berita(){
		$now = date('Y-m-d H:i:s');
		$id = $this->input->post('id_order');
		 $simpan_data=array(
            'STATUS_REVISI' => 'DISETUJUI OLEH REDAKSI',
			'TANGGAL_DISETUJUI'  => $now
       );
       	$this->db->where('ID_BERITA', $id);
		$this->db->update('berita', $simpan_data);
        //return $query;
	}
	function approve_berita_with_hotnews(){
		$now = date('Y-m-d H:i:s');
		$id = $this->input->post('id_order');
		 $simpan_data=array(
            'STATUS_REVISI' => 'DISETUJUI OLEH REDAKSI',
			'TANGGAL_DISETUJUI'  => $now,
			'HOT_NEWS' => '1'
       );
       	$this->db->where('ID_BERITA', $id);
		$this->db->update('berita', $simpan_data);
        //return $query;
	}
}