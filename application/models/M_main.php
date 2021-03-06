<?php
class M_main extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function getAllSPT(){
		$this->db->select("MONTHNAME(spt.TGL_SPT) as bulan, spt.*");	
		$this->db->from("surat_perintah_tugas spt");
		$this->db->order_by("spt.ID_SPT ASC");
		$query = $this->db->get();
		return $query->result();
	}
	function getPerusahaan($id_spt){
		$this->db->select("tk.NAMA_PERUSAHAAN,tk.ALAMAT_PERUSAHAAN");
		$this->db->from("tenaga_kerja tk");
		$this->db->join("jenis_keluhan jk","tk.id_tk = jk.id_tk");
		$this->db->join("admin_pengawas ap","ap.id_keluhan=jk.id_jenis_keluhan");
		$this->db->where("ap.ID_SPT",$id_spt);
		$this->db->limit("1");
		
		$query = $this -> db -> get();
		$row = $query->result();
		foreach ($row as $key) {
			$data = array(
				"nama_perusahaan" => $key->NAMA_PERUSAHAAN,
				"alamat_perusahaan" => $key->ALAMAT_PERUSAHAAN,
			);
			return $data;
		}
		// return $row;
	}
	function getLastNota($id_spt){
		$this->db->select("IF(max(isi_nota_pemeriksaan) IS NULL,'-',max(isi_nota_pemeriksaan)) AS 'nota_terakhir'");
		$this->db->from("nota_pemeriksaan");
		$this->db->where("ID_SPT",$id_spt);
		
		$query = $this -> db -> get();
		$row = $query->result();
		foreach ($row as $key) {
			return $key->nota_terakhir;
		}
		// return $row;
	}
	function getPengawas($id_spt){
		$this->db->select("IF(k.NAMA_KARYAWAN IS NULL,'-',k.NAMA_KARYAWAN) AS 'NAMA_KARYAWAN'");
		$this->db->from("karyawan k");
		$this->db->join("kepala_bidang kb","k.ID_KABID = kb.ID_KABID");
		$this->db->join("admin_pengawas ap","ap.IDPENGGUNA = kb.IDPENGGUNA");
		$this->db->where("ap.ID_SPT",$id_spt);
		$this->db->order_by("ap.ID_ADMIN_PENGAWAS ASC");
		
		$query = $this -> db -> get();
		$row = $query->result();
		// foreach ($row as $key) {
		// 	return $key->jumlah;
		// }
		return $row;
	}
	function deleteTemuan($id_hasil_temuan){
		$this->db->where('id_hasil_temuan', $id_hasil_temuan);
		$this->db->delete('hasil_temuan');
	}
	function getEmailPerusahaan($id_jenis_keluhan){
		$this->db->select("tk.*");	
		$this->db->from("tenaga_kerja tk");	
		$this->db->join("jenis_keluhan jk","tk.id_tk = jk.id_tk");	
		$this->db->where("jk.id_jenis_keluhan",$id_jenis_keluhan);
		$this->db->limit("1");
		$query = $this -> db -> get();
		foreach ($query->result() as $row)
		{
		        $email = $row->EMAIL_PERUSAHAAN;
		}
	   	return $email;
	}
	function getNomorSPT($id_spt){
		$this->db->select("spt.*");	
		$this->db->from("surat_perintah_tugas spt");
		$this->db->where("spt.id_spt",$id_spt);
		$this->db->limit("1");
		$query = $this -> db -> get();
		foreach ($query->result() as $row)
		{
		        $nomor_spt = $row->NO_SPT;
		}
	   	return $nomor_spt;
	}
	function insert_pengguna_new(){
		$username = $this->input->post("username");
        $password = $this->input->post("password");
        $role = $this->input->post("role");
        $id_karyawan = $this->input->post("id_karyawan");
        $nama_karyawan = $this->input->post("nama_karyawan");
        $alamat_karyawan = $this->input->post("alamat_karyawan");
        $telp_karyawan = $this->input->post("telp_karyawan");
        $jenis_kelamin = $this->input->post("jenis_kelamin");
        $golongan = $this->input->post("jabatan");
        $last_id_kabid = $this->input->post("last_id_kabid");
		$data_pengguna=array(
            'IDPENGGUNA'  => $username,
            'PASSWORD'  => md5($password),
            'STATUS_PENGGUNA'  => "AKTIF"
       );
        $this->db->insert('pengguna', $data_pengguna);
        $data_kabid=array(
            'IDPENGGUNA'  => $username,
            'IS_CHILD'  => $role
       );
        $this->db->insert('kepala_bidang', $data_kabid);
        $data_karyawan=array(
            'ID_KARYAWAN'  => $id_karyawan,
            'NAMA_KARYAWAN'  => $nama_karyawan,
            'ID_KABID'  => ($last_id_kabid+1),
            'ALAMAT_KARYAWAN'  => $alamat_karyawan,
            'TELP_KARYAWAN'  => $telp_karyawan,
            'JENIS_KELAMIN'  => $jenis_kelamin,
            'GOLONGAN'  => $golongan
       );
        $this->db->insert('karyawan', $data_karyawan);
	}
	function getNotaSebelum($id_spt,$nota_sebelum){
		$this->db->select("np.*");
		$this->db->from("nota_pemeriksaan np");
		$this->db->where("np.ID_SPT",$id_spt);
		$this->db->where("np.ISI_NOTA_PEMERIKSAAN",$nota_sebelum);
		$this->db->limit("1");

		$query = $this->db->get();
		return $query->result();
	}
	function cekNotaPemeriksaan1($id_spt,$nota_ke){
		$this->db->select("np.*");
		$this->db->from("nota_pemeriksaan np");
		$this->db->where("np.ID_SPT",$id_spt);
		$this->db->where("np.ISI_NOTA_PEMERIKSAAN",$nota_ke);
		// $this->db->limit("1");

		$query = $this->db->get();
		return $query->num_rows();
	}
	function getNotaLaporanKejadian($id_spt){
		$this->db->select("np.*");
		$this->db->from("nota_pemeriksaan np");
		$this->db->where("np.ID_SPT",$id_spt);
		$this->db->limit("3");

		$query = $this->db->get();
		return $query->result();
	}
	function getNotaPemeriksaan3($id_spt){
		$this->db->select("ht.*,p.*");
		$this->db->from("hasil_temuan ht");
		$this->db->join("pasal p","ht.id_pasal=p.id_pasal");
		$this->db->where("ht.ID_SPT",$id_spt);
		// $this->db->limit("1");

		$query = $this->db->get();
		return $query->result();
	}
	function getNotaPemeriksaan2($id_spt){
		$this->db->select("ap.*,tk.*,jk.*,spt.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("surat_perintah_tugas spt","spt.ID_SPT = ap.ID_SPT");
		$this->db->where("ap.ID_SPT",$id_spt);
		$this->db->limit("1");

		$query = $this->db->get();
		return $query->result();
	}
	function getNotaPemeriksaan1($id_keluhan){
		$this->db->select("ap.*,tk.*,jk.*,kt.*,ks.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("keluhan_tk kt","kt.ID_KELUHAN_TK = jk.ID_KELUHAN_TK","left outer");
		$this->db->join("keluhan_serikat ks","ks.ID_KELUHAN_SERIKAT = jk.ID_KELUHAN_SERIKAT","left outer");
		$this->db->where("ap.ID_KELUHAN",$id_keluhan);
		$this->db->limit("1");

		$query = $this->db->get();
		return $query->result();
	}
	function insert_nota_pemeriksaan($id_spt,$nota_ke,$id_jenis_keluhan){
		if($nota_ke == 1){
			$simpan_data=array(
	        	'STATUS_PENYELESAIAN' => 70
	        );
	        $this->db->where('id_jenis_keluhan', $id_jenis_keluhan);
			$this->db->update('jenis_keluhan', $simpan_data);
		}
		else if($nota_ke == 2){
			$simpan_data=array(
	        	'STATUS_PENYELESAIAN' => 80
	        );
	        $this->db->where('id_jenis_keluhan', $id_jenis_keluhan);
			$this->db->update('jenis_keluhan', $simpan_data);
		}
		else if($nota_ke == 3){
			$simpan_data=array(
	        	'STATUS_PENYELESAIAN' => 90
	        );
	        $this->db->where('id_jenis_keluhan', $id_jenis_keluhan);
			$this->db->update('jenis_keluhan', $simpan_data);
		}
		else if($nota_ke == 4){
			$simpan_data=array(
	        	'STATUS_PENYELESAIAN' => 100
	        );
	        $this->db->where('id_jenis_keluhan', $id_jenis_keluhan);
			$this->db->update('jenis_keluhan', $simpan_data);
		}
		$data=array(
            'TGL_NOTA_PEMERIKSAAN'  => date('Y-m-d H:i:s'),
            'ISI_NOTA_PEMERIKSAAN'  => $nota_ke,
            'ID_SPT'  => $id_spt
       );
        $this->db->insert('nota_pemeriksaan', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
	}
	function insert_new_pasal($pasal,$jenis_pelanggaran){
		$data=array(
            'KETERANGAN_PASAL'  => $pasal,
            'JENIS_PASAL_PELANGGARAN' => $jenis_pelanggaran
       );
        $this->db->insert('pasal', $data);
	}
	function editPasal($id_pasal,$pasal,$jenis_pelanggaran){
		$data=array(
            'KETERANGAN_PASAL'  => $pasal,
            'JENIS_PASAL_PELANGGARAN' => $jenis_pelanggaran
       );
        $this->db->where('ID_PASAL', $id_pasal);
        $this->db->update('pasal', $data);
	}
	function closes_case($id_jenis_keluhan){
		$simpan_data=array(
        	'STATUS_PENYELESAIAN' => 100
        );
        $this->db->where('id_jenis_keluhan', $id_jenis_keluhan);
		$this->db->update('jenis_keluhan', $simpan_data);
	}
	function insert_hasil_temuan($id_spt,$id_jenis_keluhan,$status){
		if($status<50){
        	$simpan_data=array(
	        	'STATUS_PENYELESAIAN' => 50
	        );
	        $this->db->where('id_jenis_keluhan', $id_jenis_keluhan);
			$this->db->update('jenis_keluhan', $simpan_data);
        }
		$data=array(
            'TGL_TEMUAN'  => date('Y-m-d H:i:s'),
            'ISI_HASIL_TEMUAN'  => $this->input->post("pelanggaran"),
            'JENIS_PELANGGARAN'  => $this->input->post("jenis_pelanggaran"),
            'ID_SPT'  => $id_spt,
            'ID_PASAL'  => $this->input->post("id_pasal")
       );
        $this->db->insert('hasil_temuan', $data);

        
	}
	function getDataPengguna(){
		$this->db->select("k.*,p.*,kb.*");
		$this->db->from("pengguna p");
		$this->db->join("kepala_bidang kb","p.IDPENGGUNA=kb.IDPENGGUNA");
		$this->db->join("karyawan k","k.ID_KABID=kb.ID_KABID");
		$this->db->order_by("kb.ID_KABID DESC");
		// $this->db->where("ht.ID_SPT",$id_spt);
		$query = $this->db->get();
		return $query->result();
	}
	function getDataPasal(){
		$this->db->select("p.*");
		$this->db->from("pasal p");
		// $this->db->where("ht.ID_SPT",$id_spt);
		$query = $this->db->get();
		return $query->result();
	}
	function getSelectedPasal($id_pasal,$jenis){
		$this->db->select("p.*");
		$this->db->from("pasal p");
		$this->db->where("p.JENIS_PASAL_PELANGGARAN",$jenis);
		$this->db->where_not_in("p.id_pasal",$id_pasal);
		$query = $this->db->get();
		return $query->result();
	}
	function getDataPasal_p($id){
		$this->db->select("p.*");
		$this->db->from("pasal p");
		$this->db->where("p.ID_PASAL",$id);
		$query = $this->db->get();
		return $query->result();
	}
	function getDataPasal_t($jenis){
		$this->db->select("p.*");
		$this->db->from("pasal p");
		$this->db->where("p.JENIS_PASAL_PELANGGARAN",$jenis);
		$query = $this->db->get();
		return $query->result();
	}
	function getLastIDKabid(){
		$this->db->select("max(ID_KABID) 'ID_KABID'");
		$this->db->from("kepala_bidang");
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		foreach ($query->result() as $row)
		{
		        $SPT = $row->ID_KABID;
		}
	   	return $SPT;
	}
	function getDataTemuanAll(){
		$this->db->select("ht.*,p.*");
		$this->db->from("hasil_temuan ht");
		$this->db->join("pasal p","p.ID_PASAL = ht.ID_PASAL");
		// $this->db->where("ht.ID_SPT",$id_spt);
		$query = $this->db->get();
		return $query->result();
	}
	function getDataTemuan($id_spt){
		$this->db->select("ht.*,p.*");
		$this->db->from("hasil_temuan ht");
		$this->db->join("pasal p","p.ID_PASAL = ht.ID_PASAL");
		$this->db->where("ht.ID_SPT",$id_spt);
		$query = $this->db->get();
		return $query->result();
	}
	function getIDPasal($id_spt){
		$this->db->select("p.id_pasal");
		$this->db->from("hasil_temuan ht");
		$this->db->join("pasal p","p.ID_PASAL = ht.ID_PASAL");
		$this->db->where("ht.ID_SPT",$id_spt);
		$query = $this->db->get();
		// return $query->result();
		// $id_pasal[] = null;
		// $pasal[] = null;
		foreach ($query->result_array() as $row)
		{
		        $pasal[] = $row['id_pasal'];
		}
		return $pasal;
	}
	function getDataPengadu($id_tk){
		$this->db->select("ap.*,tk.*,k.*,jk.*,kt.*,ks.*,spt.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->join("surat_perintah_tugas spt","spt.ID_SPT = ap.ID_SPT");
		$this->db->join("keluhan_tk kt","kt.ID_KELUHAN_TK = jk.ID_KELUHAN_TK","left outer");
		$this->db->join("keluhan_serikat ks","ks.ID_KELUHAN_SERIKAT = jk.ID_KELUHAN_SERIKAT","left outer");
		$this->db->where("tk.ID_TK",$id_tk);
		$this->db->order_by("spt.ID_SPT Desc");
		$this->db->limit("1");
		
		$query = $this -> db -> get();
		return $query->result();
	}
	function getSPT_List_all(){
		$this->db->select("ap.*,tk.*,k.*,jk.*,spt.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->join("surat_perintah_tugas spt","spt.ID_SPT = ap.ID_SPT");
		$this->db->group_by("spt.ID_SPT");
		$this->db->order_by("spt.TGL_SPT DESC");
		// $this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_tidak_selesai_p_total($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(kt.TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK=jk.ID_KELUHAN_TK");
		$this->db->where('kt.TANGGAL_MASUK >=', $tgl_awal);
		$this->db->where('kt.TANGGAL_MASUK <=', $tgl_akhir);
		$this->db->where('kt.JENIS_KELUHAN', $jenis_pelanggaran);
		$this->db->where('jk.STATUS_PENYELESAIAN < ', $status);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_tidak_selesai_serikat_p_total($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(ks.TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT=jk.ID_KELUHAN_SERIKAT");
		$this->db->where('ks.TGL_MASUK >=', $tgl_awal);
		$this->db->where('ks.TGL_MASUK <=', $tgl_akhir);
		$this->db->where('ks.JENIS_KELUHAN_SERIKAT', $jenis_pelanggaran);
		$this->db->where('jk.STATUS_PENYELESAIAN < ', $status);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_tidak_selesai_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(kt.TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK=jk.ID_KELUHAN_TK");
		$this->db->where('kt.TANGGAL_MASUK >=', $tgl_awal);
		$this->db->where('kt.TANGGAL_MASUK <=', $tgl_akhir);
		$this->db->where('kt.JENIS_KELUHAN', $jenis_pelanggaran);
		$this->db->where('jk.STATUS_PENYELESAIAN < ', $status);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_serikat_tidak_selesai_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(ks.TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT=jk.ID_KELUHAN_SERIKAT");
		$this->db->where('ks.TGL_MASUK >=', $tgl_awal);
		$this->db->where('ks.TGL_MASUK <=', $tgl_akhir);
		$this->db->where('ks.JENIS_KELUHAN_SERIKAT', $jenis_pelanggaran);
		$this->db->where('jk.STATUS_PENYELESAIAN < ', $status);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_selesai_p_total($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(kt.TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK=jk.ID_KELUHAN_TK");
		$this->db->where('kt.TANGGAL_MASUK >=', $tgl_awal);
		$this->db->where('kt.TANGGAL_MASUK <=', $tgl_akhir);
		$this->db->where('kt.JENIS_KELUHAN', $jenis_pelanggaran);
		$this->db->where('jk.STATUS_PENYELESAIAN', $status);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_selesai_serikat_p_total($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(ks.TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT=jk.ID_KELUHAN_SERIKAT");
		$this->db->where('ks.TGL_MASUK >=', $tgl_awal);
		$this->db->where('ks.TGL_MASUK <=', $tgl_akhir);
		$this->db->where('ks.JENIS_KELUHAN_SERIKAT', $jenis_pelanggaran);
		$this->db->where('jk.STATUS_PENYELESAIAN', $status);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_selesai_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(kt.TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK=jk.ID_KELUHAN_TK");
		$this->db->where('kt.TANGGAL_MASUK >=', $tgl_awal);
		$this->db->where('kt.TANGGAL_MASUK <=', $tgl_akhir);
		$this->db->where('kt.JENIS_KELUHAN', $jenis_pelanggaran);
		$this->db->where('jk.STATUS_PENYELESAIAN', $status);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_serikat_selesai_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(ks.TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT=jk.ID_KELUHAN_SERIKAT");
		$this->db->where('ks.TGL_MASUK >=', $tgl_awal);
		$this->db->where('ks.TGL_MASUK <=', $tgl_akhir);
		$this->db->where('ks.JENIS_KELUHAN_SERIKAT', $jenis_pelanggaran);
		$this->db->where('jk.STATUS_PENYELESAIAN', $status);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_masuk_p_total($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$this->db->select("count(*) as jumlah, MONTHNAME(TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk");
		$this->db->where('TANGGAL_MASUK >=', $tgl_awal);
		$this->db->where('TANGGAL_MASUK <=', $tgl_akhir);
		$this->db->where('JENIS_KELUHAN', $jenis_pelanggaran);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_masuk_serikat_p_total($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$this->db->select("count(*) as jumlah, MONTHNAME(TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat");
		$this->db->where('TGL_MASUK >=', $tgl_awal);
		$this->db->where('TGL_MASUK <=', $tgl_akhir);
		$this->db->where('JENIS_KELUHAN_SERIKAT', $jenis_pelanggaran);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_masuk_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$this->db->select("count(*) as jumlah, MONTHNAME(TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk");
		$this->db->where('TANGGAL_MASUK >=', $tgl_awal);
		$this->db->where('TANGGAL_MASUK <=', $tgl_akhir);
		$this->db->where('JENIS_KELUHAN', $jenis_pelanggaran);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_masuk_serikat_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran){
		$this->db->select("count(*) as jumlah, MONTHNAME(TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat");
		$this->db->where('TGL_MASUK >=', $tgl_awal);
		$this->db->where('TGL_MASUK <=', $tgl_akhir);
		$this->db->where('JENIS_KELUHAN_SERIKAT', $jenis_pelanggaran);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_tidak_selesai(){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(kt.TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK = jk.ID_KELUHAN_TK");
		$this->db->where("jk.STATUS_PENYELESAIAN < ",$status);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_tidak_selesai_total(){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(kt.TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK = jk.ID_KELUHAN_TK");
		$this->db->where("jk.STATUS_PENYELESAIAN < ",$status);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_tidak_selesai_serikat_total(){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(ks.TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT = jk.ID_KELUHAN_SERIKAT");
		$this->db->where("jk.STATUS_PENYELESAIAN < ",$status);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_serikat_tidak_selesai(){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(ks.TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT = jk.ID_KELUHAN_SERIKAT");
		$this->db->where("jk.STATUS_PENYELESAIAN < ",$status);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_selesai_total(){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(kt.TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK = jk.ID_KELUHAN_TK");
		$this->db->where("jk.STATUS_PENYELESAIAN",$status);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_selesai_serikat_total(){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(ks.TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT = jk.ID_KELUHAN_SERIKAT");
		$this->db->where("jk.STATUS_PENYELESAIAN",$status);
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_selesai(){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(kt.TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK = jk.ID_KELUHAN_TK");
		$this->db->where("jk.STATUS_PENYELESAIAN",$status);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_serikat_selesai(){
		$status = 100;
		$this->db->select("count(*) as jumlah, MONTHNAME(ks.TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT = jk.ID_KELUHAN_SERIKAT");
		$this->db->where("jk.STATUS_PENYELESAIAN",$status);
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kecenderungan_perorangan_p($tgl_awal,$tgl_akhir){
		$this->db->select("count(*) as jumlah, kt.JENIS_KELUHAN as jenis");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK=jk.ID_KELUHAN_TK");
		$this->db->where('kt.TANGGAL_MASUK >=', $tgl_awal);
		$this->db->where('kt.TANGGAL_MASUK <=', $tgl_akhir);
		$this->db->group_by("jenis");
		$this->db->order_by("jenis DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kecenderungan_serikat_p($tgl_awal,$tgl_akhir){
		$this->db->select("count(*) as jumlah, ks.JENIS_KELUHAN_SERIKAT as jenis");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT=jk.ID_KELUHAN_SERIKAT");
		$this->db->where('ks.TGL_MASUK >=', $tgl_awal);
		$this->db->where('ks.TGL_MASUK <=', $tgl_akhir);
		$this->db->group_by("jenis");
		$this->db->order_by("jenis DESC");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kecenderungan_perorangan(){
		$this->db->select("count(*) as jumlah, JENIS_KELUHAN as jenis");
		$this->db->from("keluhan_tk");
		$this->db->group_by("jenis");
		$this->db->order_by("jenis DESC");
		// $this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kecenderungan_kasus(){
		$jenis = "Pelanggaran K3";
		$this->db->select("MONTHNAME(TANGGAL_MASUK) as bulan, count(*) as jumlah, JENIS_KELUHAN as jenis");
		$this->db->from("keluhan_tk");
		$this->db->where("jenis_keluhan",$jenis);
		$this->db->group_by("bulan");
		$this->db->order_by("bulan DESC");
		
		$query = $this -> db -> get();
		return $query->result();
	}
	function kecenderungan_kasus_normatif(){
		$jenis = "Pelanggaran Normatif";
		$this->db->select("MONTHNAME(TANGGAL_MASUK) as bulan, count(*) as jumlah, JENIS_KELUHAN as jenis");
		$this->db->from("keluhan_tk");
		$this->db->where("jenis_keluhan",$jenis);
		$this->db->group_by("bulan");
		$this->db->order_by("bulan DESC");
		
		$query = $this -> db -> get();
		return $query->result();
	}
	function getCounterK3($bulan,$jenis,$type){
		// $jenis = "Pelanggaran Normatif";
		if($type == 'tenaga_kerja'){
			$this->db->select("MONTHNAME(TANGGAL_MASUK) as bulan, JENIS_KELUHAN as jenis");
			$this->db->from("keluhan_tk");
			$this->db->where("jenis_keluhan",$jenis);
			$this->db->where("MONTH(TANGGAL_MASUK)",$bulan);
		}
		else if($type == 'serikat_kerja'){
			$this->db->select("MONTHNAME(TGL_MASUK) as bulan, JENIS_KELUHAN_SERIKAT as jenis");
			$this->db->from("keluhan_serikat");
			$this->db->where("jenis_keluhan_serikat",$jenis);
			$this->db->where("MONTH(TGL_MASUK)",$bulan);
		}
		$query = $this -> db -> get();
		$row = $query->num_rows();
		return $row;
	}
	function kecenderungan_serikat(){
		$this->db->select("count(*) as jumlah, JENIS_KELUHAN_SERIKAT as jenis");
		$this->db->from("keluhan_serikat");
		$this->db->group_by("jenis");
		$this->db->order_by("jenis DESC");
		// $this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_masuk(){
		$this->db->select("count(*) as jumlah, MONTHNAME(TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk");
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function getMonthNameTK($start_date = null,$end_date = null){
		$this->db->select("distinct MONTHNAME( tanggal_masuk ) as monthname, 
			month(tanggal_masuk) as month, 
			year(tanggal_masuk) as year");
		$this->db->from("keluhan_tk");
		if($start_date != null){
			$this->db->where("tanggal_masuk >=",$start_date);
		}
		if($end_date != null){
			$this->db->where("tanggal_masuk <=",$end_date);
		}
		$this->db->order_by("tanggal_masuk ASC");
		$query = $this -> db -> get();
		return $query->result();
		// return $start_date;
	}
	function getMonthNameSK($start_date = null,$end_date = null){
		$this->db->select("distinct MONTHNAME( tgl_masuk ) as monthname, 
			month(tgl_masuk) as month, 
			year(tgl_masuk) as year");
		$this->db->from("keluhan_serikat");
		if($start_date != null){
			$this->db->where("tgl_masuk >=",$start_date);
		}
		if($end_date != null){
			$this->db->where("tgl_masuk <=",$end_date);
		}
		$this->db->order_by("tgl_masuk ASC");
		$query = $this -> db -> get();
		return $query->result();
		// return $start_date;
	}
	function getCreatedTK($bulan, $tahun, $usage = null, $status = null){

		$this->db->select("*");
		$this->db->from("keluhan_tk kt");
		$this->db->join("jenis_keluhan jk","kt.ID_KELUHAN_TK = jk.ID_KELUHAN_TK");
		if ($status != null){
			if($usage != null){
				$this->db->where("jk.STATUS_PENYELESAIAN ".$usage, $status);
			}
			else{
				$this->db->where("jk.STATUS_PENYELESAIAN", $status);
			}
		}
		$this->db->where("MONTH(kt.TANGGAL_MASUK)",$bulan);
		$this->db->where("YEAR(kt.TANGGAL_MASUK)",$tahun);
		$query = $this -> db -> get();
		$row = $query->num_rows();
		return $row;
	}
	function getCreatedSK($bulan, $tahun, $usage = null, $status = null){

		$this->db->select("*");
		$this->db->from("keluhan_serikat ks");
		$this->db->join("jenis_keluhan jk","ks.ID_KELUHAN_SERIKAT = jk.ID_KELUHAN_SERIKAT");
		if ($status != null){
			if($usage != null){
				$this->db->where("jk.STATUS_PENYELESAIAN ".$usage, $status);
			}
			else{
				$this->db->where("jk.STATUS_PENYELESAIAN", $status);
			}
		}
		$this->db->where("MONTH(ks.TGL_MASUK)",$bulan);
		$this->db->where("YEAR(ks.TGL_MASUK)",$tahun);
		$query = $this -> db -> get();
		$row = $query->num_rows();
		return $row;
	}
	function kasus_masuk_total(){
		$this->db->select("count(*) as jumlah, MONTHNAME(TANGGAL_MASUK) as Bulan");
		$this->db->from("keluhan_tk");
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_masuk_serikat_total(){
		$this->db->select("count(*) as jumlah, MONTHNAME(TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat");
		// $this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function kasus_masuk_serikat(){
		$this->db->select("count(*) as jumlah, MONTHNAME(TGL_MASUK) as Bulan");
		$this->db->from("keluhan_serikat");
		$this->db->group_by("Bulan");
		$this->db->order_by("Bulan DESC");
		// $this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function total_pengaduan(){
		$this->db->select("ap.*,tk.*,k.*,jk.*,spt.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->join("surat_perintah_tugas spt","spt.ID_SPT = ap.ID_SPT");
		$this->db->group_by("spt.ID_SPT");
		// $this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->num_rows();
	}
	function pengaduanSelesai(){
		$status_penyelesaian = 100;
		$this->db->select("ap.*,tk.*,k.*,jk.*,spt.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->join("surat_perintah_tugas spt","spt.ID_SPT = ap.ID_SPT");
		$this->db->where("jk.STATUS_PENYELESAIAN",$status_penyelesaian);
		$this->db->group_by("spt.ID_SPT");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->num_rows();
	}
	function pengaduanBelumSelesai(){
		$status_penyelesaian = 100;
		$this->db->select("ap.*,tk.*,k.*,jk.*,spt.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->join("surat_perintah_tugas spt","spt.ID_SPT = ap.ID_SPT");
		$this->db->where("jk.STATUS_PENYELESAIAN < ".$status_penyelesaian);
		$this->db->group_by("spt.ID_SPT");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->num_rows();
	}
	function getSPT_List_count($id_karyawan){
		$status_penyelesaian= 30;
		$this->db->select("ap.*,tk.*,k.*,jk.*,spt.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->join("surat_perintah_tugas spt","spt.ID_SPT = ap.ID_SPT");
		$this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		$this->db->where("jk.STATUS_PENYELESAIAN",$status_penyelesaian);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->num_rows();
	}
	function getSPT_List($id_karyawan){
		$this->db->select("ap.*,tk.*,k.*,jk.*,spt.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->join("surat_perintah_tugas spt","spt.ID_SPT = ap.ID_SPT");
		$this->db->where("ap.ID_KARYAWAN",$id_karyawan);
		$this->db->order_by("spt.TGL_SPT DESC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function getLaporanPemeriksaan($id_spt){
		$this->db->select("k.ID_KARYAWAN,k.NAMA_KARYAWAN,spt.PEMERIKSAAN,tk.JENIS_USAHA,tk.TELP_HRD_SERIKAT,tk.TELP_PERUSAHAAN,tk.ALAMAT_PERUSAHAAN,spt.NO_SPT,spt.TGL_SPT,spt.TGL_PEMERIKSAAN,tk.NAMA_PERUSAHAAN, spt.JUMLAH_PEGAWAI");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->join("surat_perintah_tugas spt","spt.ID_SPT = ap.ID_SPT");
		$this->db->where("ap.ID_SPT",$id_spt);
		$this->db->limit("1");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
		
	}
	function getDataSPT($id_spt){
		$this->db->select("ap.*,tk.*,k.*,jk.*,kt.*,ks.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->join("keluhan_tk kt","kt.ID_KELUHAN_TK = jk.ID_KELUHAN_TK", 'left outer');
		$this->db->join("keluhan_serikat ks","ks.ID_KELUHAN_SERIKAT = jk.ID_KELUHAN_SERIKAT", 'left outer');
		$this->db->where("ap.ID_SPT",$id_spt);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function getDataSPT_PDF($id_spt){
    	// $id_spt = $this->input->post("no_spt");
		$this->db->select("ap.*,tk.*,k.ID_KARYAWAN,k.GOLONGAN,k.NAMA_KARYAWAN,jk.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.ID_KELUHAN = jk.ID_JENIS_KELUHAN");
		$this->db->join("tenaga_kerja tk","jk.ID_TK = tk.ID_TK");
		$this->db->join("karyawan k","k.ID_KARYAWAN = ap.ID_KARYAWAN");
		$this->db->where("ap.ID_SPT",$id_spt);
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function getIsiSPT($id_spt){
    	// $id_spt = $this->input->post("no_spt");
		$this->db->select("ISI_SPT");
		$this->db->from("surat_perintah_tugas");
		$this->db->where("ID_SPT","13");
		// $this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function getSPT_ID(){
		$this->db->select("*");
		$this->db->from("surat_perintah_tugas");
		$this->db->where("STATUS_SPT > 0");
		$this->db->where("IS_ACTIVE_SPT","0");
		$this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->result();
	}
	function getStatus($id_tk){
		$this->db->select("*");
		$this->db->from("jenis_keluhan");
		$this->db->where("ID_TK",$id_tk);
		$this->db->order_by("ID_JENIS_KELUHAN DESC");
		$this->db->limit("1");
		$query = $this -> db -> get();
		return $query->result();
	}
	function getReportYear(){

		$this -> db -> select(" u.NAMA_USER 'NAMA_USER', count(*) jumlah_berita, sum(b.HOT_NEWS) jumlah_reward");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		//$this->db->where("b.TANGGAL_DISETUJUI is null AND b.JUDUL LIKE '%".$keyword."%' OR b.ISI LIKE '%".$keyword."%' ",NULL);
		$this->db->group_by("b.ID_USER");
		$this->db->order_by("jumlah_reward DESC");
		$this -> db -> limit(5);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getDataKategoriAktif(){
		$this->db->select("ID_KATEGORI , NAMA_KATEGORI, STATUS_KATEGORI ");
		$this->db->from("kategori");
		$this->db->where("STATUS_KATEGORI","Aktif");
		$this->db->order_by("NAMA_KATEGORI ASC");

		$query = $this->db->get();
		return $query->result();
	}
	function getDataKategori(){
		$this->db->select("ID_KATEGORI , NAMA_KATEGORI, STATUS_KATEGORI ");
		$this->db->from("kategori");
		$this->db->order_by("NAMA_KATEGORI ASC");

		$query = $this->db->get();
		return $query->result();
	}
	function getDataPegawai(){
		$this->db->select(" NAMA_USER, JABATAN, STATUS_PEGAWAI ");
		$this->db->from(" user");
		$this->db->order_by("NAMA_USER ASC");

		$query = $this->db->get();
		return $query->result();
	}
	function getDataEvaluasi2(){
		$this -> db -> select(" sum(r.JUMLAH_REWARD) 'nominal_reward', u.NAMA_USER 'NAMA_USER', monthname(b.TANGGAL_DISETUJUI) 'NAMA_BULAN', year(b.TANGGAL_DISETUJUI) 'TAHUN' , count(*) jumlah_berita, sum(b.HOT_NEWS) jumlah_reward");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this -> db -> join('reward r','r.ID_REWARD=b.ID_REWARD');
		$this->db->where("b.TANGGAL_DISETUJUI is not null ",NULL);
		$this->db->group_by("b.ID_USER");
		$this->db->order_by("nominal_reward DESC");
		$this -> db -> limit(5);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getDataEvaluasi1(){
		$this -> db -> select(" u.NAMA_USER 'NAMA_USER', monthname(b.TANGGAL_DISETUJUI) 'NAMA_BULAN', year(b.TANGGAL_DISETUJUI) 'TAHUN' , count(*) jumlah_berita, sum(b.HOT_NEWS) jumlah_reward");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		//$this->db->where("b.TANGGAL_DISETUJUI is null AND b.JUDUL LIKE '%".$keyword."%' OR b.ISI LIKE '%".$keyword."%' ",NULL);
		$this->db->group_by("b.ID_USER");
		$this->db->order_by("jumlah_reward DESC");
		$this -> db -> limit(5);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getReportMonth(){

		$this -> db -> select(" u.NAMA_USER 'NAMA_USER', count(*) jumlah_berita, sum(b.HOT_NEWS) jumlah_reward");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		//$this->db->where("b.TANGGAL_DISETUJUI is null AND b.JUDUL LIKE '%".$keyword."%' OR b.ISI LIKE '%".$keyword."%' ",NULL);
		$this->db->group_by("b.ID_USER");
		$this->db->order_by("jumlah_reward DESC");
		$this -> db -> limit(5);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getSearchApproved(){
		$keyword = $this->input->post('keyword');
		$this -> db -> select("k.NAMA_KATEGORI, b.TANGGAL_EDIT 'TANGGAL_EDIT', b.STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this -> db -> join('kategori k','k.ID_KATEGORI=b.ID_KATEGORI');
		$this->db->where("b.TANGGAL_DISETUJUI is not null AND b.STATUS_REVISI = 'DISETUJUI OLEH REDAKSI' AND b.JUDUL LIKE '%".$keyword."%' OR b.ISI LIKE '%".$keyword."%' ",NULL);
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getSearch(){
		$keyword = $this->input->post('keyword');
		$this -> db -> select("k.NAMA_KATEGORI, b.TANGGAL_EDIT 'TANGGAL_EDIT', b.STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this -> db -> join('kategori k','k.ID_KATEGORI=b.ID_KATEGORI');
		$this->db->where("b.TANGGAL_DISETUJUI is null AND b.STATUS_REVISI != 'DISETUJUI OLEH REDAKSI' AND b.JUDUL LIKE '%".$keyword."%' OR b.ISI LIKE '%".$keyword."%' ",NULL);
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getData6(){
		$this->db->select(" ID_REWARD 'ID', JUMLAH_REWARD 'REWARD' ");
		$this->db->from("reward");
		$this->db->order_by("ID_REWARD DESC");
		$this->db-> limit(1);

		$query = $this->db->get();
		return $query->result();
	}
	function getData5(){
		$this->db->select(" MAX(ID_REWARD) 'ID'");
		$this->db->from("reward");

		$query = $this->db->get();
		return $query->result();
	}
	function getData4(){
		$this -> db -> select(" ID_KATEGORI 'ID' , NAMA_KATEGORI 'NAMA_KATEGORI' ");
		$this -> db -> from('kategori');
		// $this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this -> db -> where('STATUS_KATEGORI', 'Aktif');
		$this->db->order_by("NAMA_KATEGORI ASC");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getData3($user_id){
		$this -> db -> select(" k.NAMA_KATEGORI, TANGGAL_EDIT 'TANGGAL_EDIT',STATUS_REVISI 'STATUS_REVISI', PATH_REKAMAN 'PATH' , SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this -> db -> join('kategori k','k.ID_KATEGORI=b.ID_KATEGORI');
		$this -> db -> where('u.ID_USER', $user_id);
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getDataEmployee(){
		$this -> db -> select('k.ID_KARYAWAN, K.NAMA_KARYAWAN, k.TELP_KARYAWAN, p.IDPENGGUNA');
		$this -> db -> from('karyawan k');
		$this -> db -> join('kepala_bidang kb','kb.ID_KABID=k.ID_KABID');
		$this -> db -> join('pengguna p','p.IDPENGGUNA=kb.IDPENGGUNA');
		$this -> db -> order_by("k.NAMA_KARYAWAN ASC");
		// $this -> db -> where('ID_TK', $user_id);
		//$this -> db -> where('PASSWORD', $pass);
		// $this -> db -> limit(1);
							
		//$d = $this->db->get_where('user',$data);	
		$q = $this -> db -> get();
		// foreach ($q->result() as  $qrow) {
		// 	return $qrow->NAMA_USER;
		// }
		return $q->result();
	}
	function getDataPerEmployee($user_id){
		$this -> db -> select('kb.IS_CHILD, k.ID_KARYAWAN, K.NAMA_KARYAWAN, k.TELP_KARYAWAN, p.IDPENGGUNA');
		$this -> db -> from('karyawan k');
		$this -> db -> join('kepala_bidang kb','kb.ID_KABID=k.ID_KABID');
		$this -> db -> join('pengguna p','p.IDPENGGUNA=kb.IDPENGGUNA');
		$this -> db -> order_by("k.NAMA_KARYAWAN ASC");
		$this -> db -> where('p.IDPENGGUNA', $user_id);
		//$this -> db -> where('PASSWORD', $pass);
		// $this -> db -> limit(1);
							
		//$d = $this->db->get_where('user',$data);	
		$q = $this -> db -> get();
		// foreach ($q->result() as  $qrow) {
		// 	return $qrow->NAMA_USER;
		// }
		return $q->result();
	}
	function employeeCheck($user_id,$pass){
		$status="AKTIF";
		$this -> db -> select('k.ID_KARYAWAN, K.NAMA_KARYAWAN, k.TELP_KARYAWAN, p.IDPENGGUNA');
		$this -> db -> from('karyawan k');
		$this -> db -> join('kepala_bidang kb','kb.ID_KABID=k.ID_KABID');
		$this -> db -> join('pengguna p','p.IDPENGGUNA=kb.IDPENGGUNA');
		// $this -> db -> order_by("k.NAMA_KARYAWAN ASC");
		$this -> db -> where('p.IDPENGGUNA', $user_id);
		$this -> db -> where('p.PASSWORD', md5($pass));
		$this -> db -> where('p.STATUS_PENGGUNA', $status);
		//$this -> db -> where('PASSWORD', $pass);
		// $this -> db -> limit(1);
							
		//$d = $this->db->get_where('user',$data);	
		$q = $this -> db -> get();
		// foreach ($q->result() as  $qrow) {
		// 	return $qrow->NAMA_USER;
		// }
		return $q->num_rows();
	}
	function getDataKeluhanTK(){
		$this -> db -> select('jk.*, tk.*, kt.*,ks.*');
		$this -> db -> from('tenaga_kerja tk');
		$this -> db -> join('jenis_keluhan jk','jk.ID_TK=tk.ID_TK');
		$this -> db -> join('keluhan_tk kt','kt.ID_KELUHAN_TK=jk.ID_KELUHAN_TK','left outer');
		$this -> db -> join('keluhan_serikat ks','ks.ID_KELUHAN_SERIKAT=jk.ID_KELUHAN_SERIKAT','left outer');
		// $this -> db -> join('admin_pengawas ap','ap.ID_KELUHAN=jk.ID_JENIS_KELUHAN');
		// $this -> db -> join('surat_perintah_tugas spt','spt.ID_SPT=ap.ID_SPT');
		$this -> db -> order_by("jk.ID_JENIS_KELUHAN DESC");
		$this -> db -> where('jk.STATUS_PENYELESAIAN', 10);
		//$this -> db -> where('PASSWORD', $pass);
		// $this -> db -> limit(1);
							
		//$d = $this->db->get_where('user',$data);	
		$q = $this -> db -> get();
		// foreach ($q->result() as  $qrow) {
		// 	return $qrow->NAMA_USER;
		// }
		return $q->result();
	}
	function permintaan_petugas(){
		$this -> db -> select('jk.*, tk.*, kt.*,ks.*');
		$this -> db -> from('tenaga_kerja tk');
		$this -> db -> join('jenis_keluhan jk','jk.ID_TK=tk.ID_TK');
		$this -> db -> join('keluhan_tk kt','kt.ID_KELUHAN_TK=jk.ID_KELUHAN_TK','left outer');
		$this -> db -> join('keluhan_serikat ks','ks.ID_KELUHAN_SERIKAT=jk.ID_KELUHAN_SERIKAT','left outer');
		// $this -> db -> join('admin_pengawas ap','ap.ID_KELUHAN=jk.ID_JENIS_KELUHAN');
		// $this -> db -> join('surat_perintah_tugas spt','spt.ID_SPT=ap.ID_SPT');
		$this -> db -> order_by("jk.ID_JENIS_KELUHAN DESC");
		$this -> db -> where('jk.STATUS_PENYELESAIAN', 10);
		//$this -> db -> where('PASSWORD', $pass);
		// $this -> db -> limit(1);
							
		//$d = $this->db->get_where('user',$data);	
		$q = $this -> db -> get();
		// foreach ($q->result() as  $qrow) {
		// 	return $qrow->NAMA_USER;
		// }
		return $q->num_rows();
	}
	function getDataWorkload(){
		$this->db->select("count(*) as jumlah, ap.*,jk.*,k.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.id_keluhan = jk.id_jenis_keluhan");
		$this->db->join("kepala_bidang kb","ap.idpengguna = kb.idpengguna");
		$this->db->join("karyawan k","kb.id_kabid = k.id_kabid");
		$this->db->where("jk.status_penyelesaian < 100");
		$this->db->group_by("ap.idpengguna");
		$this->db->order_by("jumlah ASC");
		$q = $this->db->get();
		return $q->result();
	}
	function getDataWorkDone(){
		$status = 100;
		$this->db->select("count(*) as jumlah, ap.*,jk.*,k.*");
		$this->db->from("admin_pengawas ap");
		$this->db->join("jenis_keluhan jk","ap.id_keluhan = jk.id_jenis_keluhan");
		$this->db->join("kepala_bidang kb","ap.idpengguna = kb.idpengguna");
		$this->db->join("karyawan k","kb.id_kabid = k.id_kabid");
		$this->db->where("jk.status_penyelesaian", $status);
		$this->db->group_by("ap.idpengguna");
		$this->db->order_by("jumlah DESC");
		$q = $this->db->get();
		return $q->result();
	}
	function permintaan_spt(){
		$this->db->select("*");
		$this->db->from("surat_perintah_tugas");
		$this->db->where("STATUS_SPT > 0");
		$this->db->where("IS_ACTIVE_SPT","0");
		$this->db->order_by("ID_SPT ASC");
		$query = $this -> db -> get();
		return $query->num_rows();
	}
	function getUserPerseoranganInfo($user_id){
		$this -> db -> select('*');
		$this -> db -> from('tenaga_kerja');
		$this -> db -> where('ID_TK', $user_id);
		//$this -> db -> where('PASSWORD', $pass);
		$this -> db -> limit(1);
							
		//$d = $this->db->get_where('user',$data);	
		$q = $this -> db -> get();
		// foreach ($q->result() as  $qrow) {
		// 	return $qrow->NAMA_USER;
		// }
		return $q->result();
	}
	function getUserType($user_id){
		$this -> db -> select('USER_TYPE');
		$this -> db -> from('tenaga_kerja');
		$this -> db -> where('EMAIL', $user_id);
		//$this -> db -> where('PASSWORD', $pass);
		$this -> db -> limit(1);
							
		//$d = $this->db->get_where('user',$data);	
		$q = $this -> db -> get();
		foreach ($q->result() as  $qrow) {
			return $qrow->USER_TYPE;
		}
		// return $q->result();
	}
	function getUserInfo($user_id){
		$this -> db -> select('EMAIL, PASSWORD_TK, ID_TK, NAMA_TK, NAMA_SERIKAT, NO_KTP');
		$this -> db -> from('tenaga_kerja');
		$this -> db -> where('EMAIL', $user_id);
		//$this -> db -> where('PASSWORD', $pass);
		$this -> db -> limit(1);
							
		//$d = $this->db->get_where('user',$data);	
		$q = $this -> db -> get();
		// foreach ($q->result() as  $qrow) {
		// 	return $qrow->NAMA_USER;
		// }
		return $q->result();
	}
	function doLogin($user_id,$pass){
		$this -> db -> select('EMAIL, PASSWORD_TK, ID_TK, NAMA_TK, NAMA_SERIKAT');
		$this -> db -> from('tenaga_kerja');
		$this -> db -> where('EMAIL', $user_id);
		$this -> db -> where('USER_STS', '1');
		$this -> db -> where('PASSWORD_TK', md5($pass));
		$this -> db -> limit(1);
							
		//$d = $this->db->get_where('user',$data);	
		$d = $this -> db -> get();
		// foreach ($d->result() as  $row) {
		// 	return $row->JABATAN;
		// }
		$num = $d->num_rows();
		return $num;
		// return $d->num_rows();
	}
	function getData1_revisi_numrow(){
		$this -> db -> select(" TANGGAL_EDIT 'TANGGAL_EDIT', STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this->db->where('b.TANGGAL_EDIT IS NOT NULL AND b.TANGGAL_DISETUJUI IS NULL',null,false);
		
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
		$num = $query->num_rows();
		return $num;
	}
	function getData1_approved_numrow(){
		$this -> db -> select(" TANGGAL_EDIT 'TANGGAL_EDIT', STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this->db->where('b.TANGGAL_DISETUJUI IS NOT NULL',null,false);
		
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
		$num = $query->num_rows();
		return $num;
	}
	function getData1_baru_numrow_telah_direvisi(){
		$this -> db -> select(" b.TANGGAL_EDIT 'TANGGAL_EDIT', b.STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this->db->where("b.STATUS_REVISI = 'DIEDIT OLEH REPORTER' ", NULL);
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
	   $num = $query->num_rows();
		return $num;
	}
	function getData1_baru_numrow_telah_dicek($user_id){
		$this -> db -> select(" b.TANGGAL_EDIT 'TANGGAL_EDIT', b.STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this->db->where("b.STATUS_REVISI = 'DIEDIT OLEH REDAKSI' AND b.ID_USER='".$user_id."' ", NULL);
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
	   $num = $query->num_rows();
		return $num;
	}
	function getData1_baru_numrow(){
		$this -> db -> select(" b.TANGGAL_EDIT 'TANGGAL_EDIT', b.STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this->db->where("b.TANGGAL_EDIT is null and b.STATUS_REVISI is null", NULL);
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
	   $num = $query->num_rows();
		return $num;
	}
	function getData1_numrow(){
		$this -> db -> select(" b.TANGGAL_EDIT 'TANGGAL_EDIT', b.STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this->db->where(array('b.TANGGAL_DISETUJUI' => NULL));
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
	   $num = $query->num_rows();
		return $num;
	}
	function getData1_approved(){
		$this -> db -> select("k.NAMA_KATEGORI 'NAMA_KATEGORI' , b.TANGGAL_EDIT 'TANGGAL_EDIT', b.STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this -> db -> join('kategori k','k.ID_KATEGORI=b.ID_KATEGORI');
		$this->db->where('b.TANGGAL_DISETUJUI IS NOT NULL',null,false);
		
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getData1(){
		$this -> db -> select("k.NAMA_KATEGORI 'NAMA_KATEGORI' , b.TANGGAL_EDIT 'TANGGAL_EDIT', b.STATUS_REVISI 'STATUS_REVISI' ,SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this -> db -> join('kategori k','k.ID_KATEGORI=b.ID_KATEGORI');
		$this->db->where(array('b.TANGGAL_DISETUJUI' => NULL));
		$this->db->order_by("b.ID_BERITA");
		//$this -> db -> limit(1);

	   $query = $this -> db -> get();
		return $query->result();
	}
	function getData2($id_berita){
		$this -> db -> select(" b.PATH_REKAMAN 'PATH' ,b.JUDUL 'JUDUL_FULL',b.ISI 'ISI',SUBSTRING(b.JUDUL, 1, 30) 'JUDUL' ,u.NAMA_USER 'NAMA',b.ID_BERITA 'ID', b.ID_USER 'ID_USER', b.TANGGAL_PEMBUATAN 'TANGGAL_PEMBUATAN', b.HOT_NEWS 'REWARD', b.ID_KATEGORI 'TOPIK' ");
		$this -> db -> from('berita b');
		$this -> db -> join('user u','b.ID_USER=u.ID_USER');
		$this -> db -> where('b.ID_BERITA',$id_berita);
		
		//$this->db->order_by("b.ID_BERITA");
		$this -> db -> limit(1);

	   $query = $this -> db -> get();
		return $query->result();
	}
	/*function getDataRevenue(){
		$this -> db -> select("sum(dp.subtotal) as SUBTOTAL,sum(dp.jumlah) as JUMLAH,b.barang_name'NAME',b.barang_id'ID'");
		$this -> db -> from('order_list ol ');
		$this -> db -> join('detail_penjualan dp','ol.order_id=dp.order_id');
		$this -> db -> join('barang b','b.barang_id=dp.barang_id');
		$this -> db -> where('ol.is_confirmed', '1');
		$this->db->group_by("dp.BARANG_ID");
		$this->db->order_by("SUBTOTAL","desc");
		$this -> db -> limit(5);

	   $query = $this -> db -> get();
		return $query->result();
	}*/
	
	
	/*function m_addQty($barang_id,$jumlah,$subtotal,$order_id){
		$simpan_data=array(
			'jumlah' => $jumlah,
            'subtotal' => $subtotal
       );
		$this->db->set($simpan_data);
		$this->db->where('barang_id', $barang_id);
		$this->db->where('order_id', $order_id);
		$this->db->update('detail_penjualan', $simpan_data);
	}*/
	
}