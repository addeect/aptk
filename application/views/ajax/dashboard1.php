<?php
	// $nilai[] ='';
	// $nama[] ='';
	foreach ($dataLaporan as $row){
		// $nama = $row[0];
  //       $witel_mttr_array[] = '"'.$witel_mttr.'"';
		// SET NILAI
		$nilai = $row->jumlah_berita;
		//$nilai_array[] = $nilai;
		// SET NAMA
		$nama = $row->NAMA_USER;
		echo $nama;
		echo ";";
		//$nama_array[] = '"'.$nama.'"';
	}
	foreach ($dataLaporan as $row){
		// $nama = $row[0];
  //       $witel_mttr_array[] = '"'.$witel_mttr.'"';
		// SET NILAI
		$nilai = $row->jumlah_berita;
		//$nilai_array[] = $nilai;
		// SET NAMA
		$nama = $row->NAMA_USER;
		echo $nilai;
		echo ";";
		//$nama_array[] = '"'.$nama.'"';
	}
	//echo implode(',', $dataset_witel_title1);
	// echo $nilai;
	//echo "[102,90,41,22,13]";
	//echo implode(',',$nilai_array);
	// echo "";
	// echo ";";
	// echo "[";
	// // echo $nama;
	// echo implode(',',$nama_array);
	// echo "]";
?>