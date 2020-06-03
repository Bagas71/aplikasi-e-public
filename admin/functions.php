<?php 
$conn = mysqli_connect("localhost","root","","perumahan");

function query($query){
	global $conn;

	$result 		= mysqli_query($conn,$query);
	$rows 			= [];
	while ($row 	= mysqli_fetch_assoc($result)) {
	$rows [] 		= $row;
	}
	return $rows;
}

// registrasi
function registrasi($data){
	global $conn;

	$username 	= strtolower(stripcslashes($data["username"]));
	$password 	= mysqli_real_escape_string($conn,$data["password"]);
	$password1 	= mysqli_real_escape_string($conn,$data["password1"]);
	
			//cek username sdh ada at belum
	$result 	= mysqli_query($conn, "SELECT username FROM loginadmin WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!');
			</script>";
			return false;
	}

		// cek konfimasi password
	if($password !== $password1) {
			echo "
			<script>
				alert('konfimasi password tidak sesuai!');
			</script>";
			return false;
	}

		// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT); 

		// tambahkan username baru ke database
	mysqli_query($conn, "INSERT INTO loginadmin VALUES('','$username','$password')");

	return mysqli_affected_rows($conn);
}
//akhir registrasi

//tambah data deskripsi perumahan
function tambahDeskripsi($data){
	global $conn;

	$deskripsi 	= htmlspecialchars($data["deskripsi"]);

	$query 		= "INSERT INTO des_perumahan VALUES ('','$deskripsi')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir tambah data deskripsi perumahan

//ubah deskripsi
function ubah($data){
	global $conn;

 	$id 		= $data["id"];
	$deskripsi 	= htmlspecialchars($data["deskripsi"]);

	$query 		= "UPDATE des_perumahan SET 
				deskripsi = '$deskripsi'
				WHERE 
				id 		  = $id";
	$data 		= mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
//akhir ubah deskripsi

// hapus hasil deskripsi perumahan
function hapusDeskripsi($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM des_perumahan WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus deskripsi perumahan

//tambah data keterangan perumahan
function tambahKeterangan($data){
	global $conn;

	$sejarah 	= htmlspecialchars($data["sejarah"]);
	$rt 		= htmlspecialchars($data["rt"]);
	$fasilitas 	= htmlspecialchars($data["fasilitas"]);
	$penting 	= htmlspecialchars($data["penting"]);
	$iuran 		= htmlspecialchars($data["iuran"]);
	$hasil 		= htmlspecialchars($data["hasil"]);
	$sampah 	= htmlspecialchars($data["sampah"]);


	$query 		= "INSERT INTO tabel_keterangan VALUES ('','$sejarah', '$rt', '$fasilitas', '$penting', '$iuran', '$hasil', '$sampah')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir tambah data keterangan perumahan

//ubah keterangan perumahan
function ubahKeterangan($data){
	global $conn;

 	$id			= $data["id"];
	$sejarah 	= htmlspecialchars($data["sejarah"]);
	$rt 		= htmlspecialchars($data["rt"]);
	$fasilitas 	= htmlspecialchars($data["fasilitas"]);
	$penting 	= htmlspecialchars($data["penting"]);
	$iuran 		= htmlspecialchars($data["iuran"]);
	$hasil 		= htmlspecialchars($data["hasil"]);
	$sampah 	= htmlspecialchars($data["sampah"]);

	$query 		= "UPDATE tabel_keterangan SET 
				sejarah_perumahan 	= '$sejarah',
				tentang_rt 			= '$rt',
				fasilitas_perumahan = '$fasilitas',
				informasi_penting	= '$penting',
				iuran_keamanan		= '$iuran',
				hasil_rapat			= '$hasil',
				iuran_sampah		= '$sampah'
				WHERE 
				id 					= $id";
	$data = mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
//akhir ubah keterangan perumahan

// hapus hasil keterangan perumahan
function hapusKeterangan($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tabel_keterangan WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus keterangan perumahan

//tambah data sejarah perumahan
function tambahsejarah($data){
	global $conn;

	$sejarah = htmlspecialchars($data["sejarah"]);

	$query 	 = "INSERT INTO tabel_sejarah VALUES ('','$sejarah')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir tambah data sejarah perumahan

// ubah input data sejarah 
function ubahSejarah($data){
	global $conn;

	$id 		= $data["id"];
	$sejarah 	= htmlspecialchars($data["sejarah"]);

	$query 		= "UPDATE tabel_sejarah SET 
				sejarah 	= '$sejarah'
					WHERE 
				id 			= $id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir ubah input sejarah

// hapus hasil keterangan perumahan
function hapusSejarah($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tabel_sejarah WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus keterangan perumahan

//tambah data tentang rt
function tambahTentangrt($data){
	global $conn;

	$nama	= htmlspecialchars($data["nama"]);
	$nomor	= htmlspecialchars($data["nomor"]);
	$alamat	= htmlspecialchars($data["alamat"]);
	$jumlah	= htmlspecialchars($data["jumlah"]);

	$query 		= "INSERT INTO tabel_tentangrt VALUES ('','$nama','$nomor','$alamat','$jumlah')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir tambah data tentang rt

//ubah tentang rt
function ubahTentangrt($data){
	global $conn;

 	$id 		= $data["id"];
	$nama		= htmlspecialchars($data["nama"]);
	$nomor		= htmlspecialchars($data["nomor"]);
	$alamat		= htmlspecialchars($data["alamat"]);
	$jumlah		= htmlspecialchars($data["jumlah"]);

	$query 		= "UPDATE tabel_tentangrt SET 
				nama 	  	= '$nama',
				no_hp 	 	= '$nomor',
				alamat	 	= '$alamat',
				jumlah_blok = '$jumlah'
				WHERE 
				id  		  = $id";
	$data 		= mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
//akhir ubah tentang rt

// hapus hasil tentang rt
function hapusTentangrt($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tabel_tentangrt WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus tentang rt

//tambah data warga
function tambahWarga($data){
	global $conn;

	$nama		= htmlspecialchars($data["nama"]);
	$penyewa	= htmlspecialchars($data["penyewa"]);
	$blok	 	= htmlspecialchars($data["blok"]);
	

	$query 		= "INSERT INTO data_warga VALUES ('','$nama','$penyewa','$blok')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir tambah data warga

//ubah tentang rt
function ubahWarga($data){
	global $conn;

 	$id 		= $data["id"];
	$nama		= htmlspecialchars($data["nama"]);
	$penyewa	= htmlspecialchars($data["penyewa"]);
	$blok		= htmlspecialchars($data["blok"]);

	$query 		= "UPDATE data_warga SET 
				nama 	  	= '$nama',
				penyewa	 	= '$penyewa',
				blok	 	= '$blok'
				WHERE 
				id  		  = $id";
	$data 		= mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
//akhir ubah tentang rt

// hapus hasil tentang rt
function hapusWarga($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM data_warga WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus tentang rt

//tambah data fasilitas perumahan
function tambahFasilitas($data){
	global $conn;

	$judul = htmlspecialchars($data["judul"]);


	//upload gambar
	$gambar  = upload();
	if(!$gambar){
		return false;
	}

	$query 	 = "INSERT INTO tabel_fasilitas VALUES ('','$gambar','$judul')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

	function upload(){

		$namaFile 	= $_FILES["gambar"]["name"];
		$ukuranFile = $_FILES["gambar"]["size"];
		$error 		= $_FILES["gambar"]["error"];
		$tmpName 	= $_FILES["gambar"]["tmp_name"];

		//cek apakah tidak ada gambar di upload
		if( $error === 4){
			echo "<script>
				alert('pilih gambar terlebih dahulu!')
				</script>";
			return false; 
		}

		// cek apakah yang diupload adalah gambar
		$ekstensiGambarValid 	= ['jpg','jpeg','png'];
		$ekstensiGambar 		= explode('.', $namaFile);
		$ekstensiGambar 		= strtolower(end($ekstensiGambar));
		if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
			echo "<script>
				alert('yang di upload bukan gambar!')
				</script>";
				return false;
		}

		// cek jika ukuran yang di upload terlalu besar
		if( $ukuranFile > 100000000 ){
				echo "<script>
				alert('ukuran gambar terlalu besar!')
				</script>";
				return false;
		}

		// lolos pengecekkan, gambar siap di upload
		// generate nama gambar
		$namaFileBaru  = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;
		
		move_uploaded_file($tmpName, 'images/img/' . $namaFileBaru);

		return $namaFileBaru; 
}
//akhir tambah fasilitas perumahan

//ubah input data fasilitas perumahan
function ubahFasilitas($data){
	global $conn;

	$id 		= $data["id"];
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	$judul = htmlspecialchars($data["judul"]);

	// cek apakah user memilih gambar baru at tidak
	if ($_FILES['gambar']['error'] === 4){
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}

	$query 		= "UPDATE tabel_fasilitas SET 
				foto 		= '$gambar', 
				judul		= '$judul'
					WHERE 
				id 			= $id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir ubah input fasilitas perumahan

// hapus fasilitas perumahan
function delete($id){
	global $conn;
	$sql = mysqli_query($conn, "SELECT * FROM tabel_fasilitas WHERE id=$id");
	foreach ($sql as $key) {
		echo $key['foto'];
		unlink("images/img/".$key['foto']);
	}
	mysqli_query($conn, "DELETE FROM tabel_fasilitas WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus fasilitias perumahan

//tambah data iuran keamanan
function tambahKeamanan($data){
	global $conn;

	$keterangan 	= htmlspecialchars($data["keterangan"]);
	$tipeBesar	 	= htmlspecialchars($data["besar"]);
	$tipeKecil	 	= htmlspecialchars($data["kecil"]);
	$kantor 	 	= htmlspecialchars($data["kantor"]);

	$query 			= "INSERT INTO tabel_keamanan VALUES ('','$keterangan','$tipeBesar','$tipeKecil','$kantor')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir tambah data iuran keamanan

//ubah iuran keamanan
function ubahKeamanan($data){
	global $conn;

 	$id 			= $data["id"];
	$keterangan 	= htmlspecialchars($data["keterangan"]);
	$tipeBesar	 	= htmlspecialchars($data["besar"]);
	$tipeKecil	 	= htmlspecialchars($data["kecil"]);
	$kantor 	 	= htmlspecialchars($data["kantor"]);

	$query = "UPDATE tabel_keamanan SET 
			keterangan			= '$keterangan',
			tipe_besar			= '$tipeBesar',
			tipe_kecil			= '$tipeKecil',
			kantor 				= '$kantor'
			WHERE 
			id 					= $id";
	$data = mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
//akhir ubah iuran keamanan

// hapus hasil kritik dan saran
function hapusKeamanan($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tabel_keamanan WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus kritik dan saran

//tambah data hasil rapat warga
function tambahRapat($data){
	global $conn;

	$tanggal = htmlspecialchars($data["tanggal"]);
	$hasilRapat = htmlspecialchars($data["hasil"]);


	//upload gambar
	$gambar  = kirim();
	if(!$gambar){
		return false;
	}

	$query 	 = "INSERT INTO tabel_hasil_rapat VALUES ('','$tanggal','$gambar','$hasilRapat')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

	function kirim(){

		$namaFile 	= $_FILES["gambar"]["name"];
		$ukuranFile = $_FILES["gambar"]["size"];
		$error 		= $_FILES["gambar"]["error"];
		$tmpName 	= $_FILES["gambar"]["tmp_name"];

		//cek apakah tidak ada gambar di upload
		if( $error === 4){
			echo "<script>
				alert('pilih gambar terlebih dahulu!')
				</script>";
			return false; 
		}

		// cek apakah yang diupload adalah gambar
		$ekstensiGambarValid 	= ['jpg','jpeg','png','mp3', 'mpeg'];
		$ekstensiGambar 		= explode('.', $namaFile);
		$ekstensiGambar 		= strtolower(end($ekstensiGambar));
		if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
			echo "<script>
				alert('yang di upload bukan gambar!')
				</script>";
				return false;
		}

		// cek jika ukuran yang di upload terlalu besar
		if( $ukuranFile > 100000000 ){
				echo "<script>
				alert('ukuran gambar terlalu besar!')
				</script>";
				return false;
		}

		// lolos pengecekkan, gambar siap di upload
		// generate nama gambar
		$namaFileBaru  = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;
		
		move_uploaded_file($tmpName, 'images/' . $namaFileBaru);

		return $namaFileBaru; 
}
//akhir tambah data hasil rapat warga

// ubah input data hasil rapat warga
function ubahRapat($data){
	global $conn;

	$id 		= $data["id"];
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	$hasilRapat = htmlspecialchars($data["hasil"]);

	// cek apakah user memilih gambar baru at tidak
	if ($_FILES['gambar']['error'] === 4){
		$gambar = $gambarLama;
	}else{
		$gambar = kirim();
	}

	$query 		= "UPDATE tabel_hasil_rapat SET 
				tanggal  ='$tanggal',
				foto 		= '$gambar', 
				hasil_rapat = '$hasilRapat'
					WHERE 
				id 			= $id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir ubah input hasil rapat warga

// hapus hasil rapat warga
function hapus($id){
	global $conn;
	$sql = mysqli_query($conn, "SELECT * FROM tabel_hasil_rapat WHERE id=$id");
	foreach ($sql as $key) {
		echo $key['foto'];
		unlink("images/".$key['foto']);
	}
	mysqli_query($conn, "DELETE FROM tabel_hasil_rapat WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus hasil rapat warga

//tambah data deskripsi perumahan
function tambahSampah($data){
	global $conn;

	$keterangan = htmlspecialchars($data["keterangan"]);

	$query 		= "INSERT INTO tabel_sampah VALUES ('','$keterangan')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir tambah data deskripsi perumahan

//ubah Iuran Sampah
function ubahSampah($data){
	global $conn;

 	$id 		= $data["id"];
	$keterangan = htmlspecialchars($data["keterangan"]);

	$query 		= "UPDATE tabel_sampah SET 
				keterangan = '$keterangan'
				WHERE 
				id 		  = $id";
	$data 		= mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
//akhir ubah Iuran Sampah

// hapus hasil iuran sampah
function hapusSampah($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tabel_sampah WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus iuran sampah

//tambah data Saran dan Kritik
function kirimSaran($data){
	global $conn;

	$nama		= htmlspecialchars($data["nama"]);
	$saran		= htmlspecialchars($data["saran"]);
	$tanggal 	= date("y-m-d");
 
	$query 		= "INSERT INTO kritik_saran VALUES ('','$nama','$saran','$tanggal')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir tambah data Saran dan Kritik

// hapus hasil kritik dan saran
function clear($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM kritik_saran WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus kritik dan saran

//tambah data Dokumen
function tambahDokumen($data){
	global $conn;


	//upload gambar
	$dokumen = coba();
	if(!$dokumen){
		return false;
	}

	$query 	 = "INSERT INTO dokumen VALUES ('','$dokumen')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

	function coba(){

		$namaFile 	= $_FILES["dokumen"]["name"];
		$ukuranFile = $_FILES["dokumen"]["size"];
		$error 		= $_FILES["dokumen"]["error"];
		$tmpName 	= $_FILES["dokumen"]["tmp_name"];

		//cek apakah tidak ada dokumen di upload
		if( $error === 4){
			echo "<script>
				alert('pilih gambar terlebih dahulu!')
				</script>";
			return false; 
		}

		// cek apakah yang diupload adalah dokumen
		$ekstensiDokumenValid 	= ['docx','doc','pdf'];
		$ekstensiDokumen		= explode('.', $namaFile);
		$ekstensiDokumen 		= strtolower(end($ekstensiDokumen));
		if( !in_array($ekstensiDokumen, $ekstensiDokumenValid)){
			echo "<script>
				alert('yang di upload bukan gambar!')
				</script>";
				return false;
		}

		// cek jika ukuran yang di upload terlalu besar
		if( $ukuranFile > 100000000 ){
				echo "<script>
				alert('ukuran gambar terlalu besar!')
				</script>";
				return false;
		}

		// lolos pengecekkan, dokumen siap di upload
		
		move_uploaded_file($tmpName, 'dokumen/' . $namaFile);

		return $namaFile; 
}
//akhir tambah data Dokumen
//ubah input data dokumen
function ubahDokumen($data){
	global $conn;

	$id 		= $data["id"];
	$dokumenLama = htmlspecialchars($data["dokumenLama"]);

	// cek apakah user memilih dokumen baru at tidak
	if ($_FILES['dokumen']['error'] === 4){
		$dokumen = $dokumenLama;
	}else{
		$dokumen = coba();
	}

	$query 		= "UPDATE dokumen SET 
				nama		= '$dokumen'
					WHERE 
				id 			= $id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
//akhir ubah input dokumen
// hapus hasil rapat warga
function hapusDokumen($id){
	global $conn;
	$sql = mysqli_query($conn, "SELECT * FROM dokumen WHERE id=$id");
	foreach ($sql as $key) {
		echo $key['nama'];
		unlink("dokumen/".$key['nama']);
	}
	mysqli_query($conn, "DELETE FROM dokumen WHERE id=$id");
	return mysqli_affected_rows($conn);
}	
// akhir hapus hasil rapat warga

// pencarian
function cari($keyword){
	$query = "SELECT * FROM data_warga WHERE nama LIKE '%$keyword%'";
	return query($query);
// akhir pencarian 
}
 ?>