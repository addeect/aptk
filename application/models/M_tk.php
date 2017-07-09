<?php
class M_tk extends CI_Model{
	// function __construct(){
	// 	$this->load->database();
	// }
	function insertCaseSPT($id_spt,$id_jenis_keluhan){
		$status_penyelesaian = 30;
		$data_spt=array(
			'ISI_SPT' => $this->input->post('kasus'),
			'IS_ACTIVE_SPT' => '1',
			'STATUS_SPT' => '0'
		);
		$this->db->where('ID_SPT', $id_spt);
		$this->db->update('surat_perintah_tugas',$data_spt);
		$data_status=array(
			'STATUS_PENYELESAIAN' => $status_penyelesaian
		);
		$this->db->where('ID_JENIS_KELUHAN', $id_jenis_keluhan);
		$this->db->update('jenis_keluhan',$data_status);
	}
	function getSPT(){
		$this->db->select("max(ID_SPT) 'ID_SPT'");
		$this->db->from("surat_perintah_tugas");
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		foreach ($query->result() as $row)
		{
		        $SPT = $row->ID_SPT;
		}
	   	return $SPT;
	}
	function generateSPT(){
		$data_spt=array(
            'TGL_SPT'  => date('Y-m-d H:i:s')
       );
        $this->db->insert('surat_perintah_tugas', $data_spt);
	}
	function insertPengawas($id_spt){

		$d1 = $this->input->post('id_petugas_1');
		$data_petugas_1 = explode('-', $d1);
		$d2 = $this->input->post('id_petugas_2');
		$data_petugas_2 = explode('-', $d2);
		$d3 = $this->input->post('id_petugas_3');
		$data_petugas_3 = explode('-', $d3);

		$data_pengawas1=array(
            'IDPENGGUNA'  => $data_petugas_1[1],
            'ID_SPT'  => $id_spt,
            'ID_KARYAWAN' => $data_petugas_1[0],
            'ID_KELUHAN' => $this->input->post('id_pengadu')
       );
		$data_pengawas2=array(
            'IDPENGGUNA'  => $data_petugas_2[1],
            'ID_SPT'  => $id_spt,
            'ID_KARYAWAN' => $data_petugas_2[0],
            'ID_KELUHAN' => $this->input->post('id_pengadu')
       );
		$data_pengawas3=array(
            'IDPENGGUNA'  => $data_petugas_3[1],
            'ID_SPT'  => $id_spt,
            'ID_KARYAWAN' => $data_petugas_3[0],
            'ID_KELUHAN' => $this->input->post('id_pengadu')
       );
		$this->db->insert('admin_pengawas', $data_pengawas1);
        $this->db->insert('admin_pengawas', $data_pengawas2);
        $this->db->insert('admin_pengawas', $data_pengawas3);
	}
	function getIdKeluhanTK(){
		$this->db->select("max(ID_KELUHAN_TK) 'ID_KELUHAN_TK'");
		$this->db->from("keluhan_tk");
		$this -> db -> limit(1);
		$query = $this -> db -> get();
	   	return $query->result();
	}
	function insertPengaduan1(){
		$status_penyelesaian = 10;
		$simpan_data=array(
            'JENIS_KELUHAN'  => $this->input->post('jenis_keluhan'),
            'TANGGAL_MASUK'  => date('Y-m-d H:i:s'),
            'ISI_KELUHAN'  => $this->input->post('keluhan')
       );
		$id_keluhan_tk_max = $this->input->post('id_keluhan_tk_max');
		$id_keluhan_tk = ((floatval($id_keluhan_tk_max)) + 1);
		$data_keluhan=array(
            'ID_TK'  => $this->input->post('id'),
            'ID_KELUHAN_TK'  => $id_keluhan_tk,
            'STATUS_PENYELESAIAN'  => $status_penyelesaian
       );
        $this->db->insert('keluhan_tk', $simpan_data);
        $this->db->insert('jenis_keluhan', $data_keluhan);
        
	}
	function editPengadu($key){
		//$now = date('Y-m-d H:i:s');
		// $id = $this->input->post('id_kategori1');
		$tgl = $this->input->post('tanggal_lahir');
		 $simpan_data=array(
			'NO_KTP'  => $this->input->post('nik'),
            'NAMA_TK'  => $this->input->post('nama'),
            'ALAMAT_TK'  => $this->input->post('alamat'),
            'TEMPAT_LAHIR' => $this->input->post("tempat_lahir"),
			'TANGGAL_LAHIR' => date('Y-m-d H:i:s',strtotime($tgl)),
			'JENIS_KEL' => $this->input->post("gender"),
			'AGAMA' => $this->input->post("agama"),
			'STATUS_KAWIN' => $this->input->post("status_kawin"),
			'PEKERJAAN' => $this->input->post("pekerjaan"),
			'KEWARGANEGARAAN' => $this->input->post("kwn"),
			'JABATAN' => $this->input->post("jabatan"),
			'LAMA_KERJA' => $this->input->post("lama_kerja"),
			'NAMA_PERUSAHAAN' => $this->input->post("nama_perusahaan"),
			'ALAMAT_PERUSAHAAN' => $this->input->post("alamat_perusahaan"),
			'JENIS_USAHA' => $this->input->post("jenis_usaha"),
			'TELP_PERUSAHAAN' => $this->input->post("telp_perusahaan"),
			'TELP_HRD_SERIKAT' => $this->input->post("telp_hrd")
			
       );
       	$this->db->where('ID_TK', $key);
		$this->db->update('tenaga_kerja', $simpan_data);
        //return $query;
	}
	function activateUser($key){
		//$now = date('Y-m-d H:i:s');
		// $id = $this->input->post('id_kategori1');
		 $simpan_data=array(
            
			'USER_STS'  => '1',
			'TOKEN_REG'  => null
			
       );
       	$this->db->where('TOKEN_REG', $key);
		$this->db->update('tenaga_kerja', $simpan_data);
        //return $query;
	}
	function getTokenReg($key){

		$this -> db -> select("EMAIL");
		$this -> db -> from('tenaga_kerja');
		$this -> db -> where('TOKEN_REG', $key);
		
		// $this->db->order_by("id_general");
		$this -> db -> limit(1);

	   $query = $this -> db -> get();
	   return $query->num_rows();
		// return $query->result();
	}
	function getUserID1($email){

		$this -> db -> select("EMAIL");
		$this -> db -> from('tenaga_kerja');
		$this -> db -> where('EMAIL', $email);
		
		// $this->db->order_by("id_general");
		$this -> db -> limit(1);

	   $query = $this -> db -> get();
	   return $query->num_rows();
		// return $query->result();
	}

	function regUserTK($token){
		//$password_conf = $this->input->post("password_conf");
		$tgl = $this->input->post("tgl_lahir_tk");
		$simpan_data=array(
            'NO_KTP'  => $this->input->post('no_ktp'),
            'EMAIL'  => $this->input->post('username'),
            'NAMA_TK'  => $this->input->post('nama_tk'),
            'ALAMAT_TK'  => $this->input->post('alamat_tk'),
            'TEMPAT_LAHIR' => $this->input->post("tempat_lahir_tk"),
			'TANGGAL_LAHIR' => date('Y-m-d H:i:s',strtotime($tgl)),
			'JENIS_KEL' => $this->input->post("jenis_kelamin_tk"),
			'AGAMA' => $this->input->post("agama_tk"),
			'STATUS_KAWIN' => $this->input->post("status_kawin_tk"),
			'PEKERJAAN' => $this->input->post("pekerjaan_tk"),
			'KEWARGANEGARAAN' => $this->input->post("kwn_tk"),
			'USER_STS' => '0',
			'USER_TYPE' => 'perseorangan',
			'PASSWORD_TK' => md5($this->input->post("password_conf")),
			'TOKEN_REG' => $token
            // 'STATUS_KATEGORI'  => 'Aktif'
			//'PATH_REKAMAN'  => $name
       );
        $simpan = $this->db->insert('tenaga_kerja', $simpan_data);
        return $simpan;
	}
	function regUserSK($token){
		//$password_conf = $this->input->post("password_conf");
		// $tgl = $this->input->post("tgl_lahir_tk");
		$simpan_data=array(
            'NAMA_SERIKAT'  => $this->input->post('nama_sk'),
            'ALAMAT_SERIKAT'  => $this->input->post('alamat_sk'),
            'TELP_SERIKAT'  => $this->input->post('telepon_sk'),
            'NAMA_PERUSAHAAN'  => $this->input->post('nama_perusahaan'),
            'ALAMAT_PERUSAHAAN' => $this->input->post("alamat_perusahaan"),
			'TELP_PERUSAHAAN' => $this->input->post("telp_perusahaan"),
			'TELP_HRD_SERIKAT' => $this->input->post("telp_hrd_serikat"),
			'EMAIL'  => $this->input->post('username'),
			'PASSWORD_TK' => md5($this->input->post("password_conf")),
			'USER_STS' => '0',
			'USER_TYPE' => 'perserikatan',
			'TOKEN_REG' => $token
            // 'STATUS_KATEGORI'  => 'Aktif'
			//'PATH_REKAMAN'  => $name
       );
        $simpan = $this->db->insert('tenaga_kerja', $simpan_data);
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