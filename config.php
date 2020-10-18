<?php
	// koneksi
	$conn = mysqli_connect("localhost", "root", "", "ce");

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [] ;
		while ($row = mysqli_fetch_assoc($result)) {

			$rows [] =  $row;
		}
		return $rows;
	}

	function tambah($data){
		global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$nim = $data["nim"];
	$prodi = htmlspecialchars($data["prodi"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$email = htmlspecialchars($data["email"]);
	$nohp = htmlspecialchars($data["nohp"]);
	$angkatan = htmlspecialchars($data["angkatan"]);
	$peminatan = htmlspecialchars($data["peminatan"]);
	
    
    
 
    //upload gambar
    $gambar = upload();
    if (!$gambar) {
    	return false;
    }

    $query = "INSERT INTO akademik
                VALUES
                ('','$nama', '$nim', '$prodi', '$jurusan', '$alamat', '$email', '$nohp', '$angkatan', '$peminatan', '$gambar')
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

	}

	function upload(){
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

// cek apakah tidak ada gambar yang diupload
if ($error === 4) {
 	echo "
            <script>
            alert('Pilih Gambar Terlebih Dahulu!');
            </script>
        ";
    return false;
 	} 

 	// cek apakah yang di upload itu gambar atau tidak

	 	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	 	$ekstensiGambar = explode('.', $namaFile);
	 	$ekstensiGambar = strtolower(end($ekstensiGambar));
		 	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		 		echo "
		            <script>
		            alert('Yang anda Upload Bukan Gambar!');
		            </script>
		        ";
		    return false;
		 	}

		 // cek ukuran file
		 	if ($ukuranFile > 1000000) {
		 		echo "
		            <script>
		            alert('Ukuran Gambar Terlalu Besar!');
		            </script>
			        ";
			    return false;
			 	}

		// lolos cek, mari upload
			 	move_uploaded_file($tmpName, 'img/' . $namaFile);

			 	return $namaFile; 
		}

	function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM akademik WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

function ubah($data){
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nim = $data["nim"];
	$prodi = htmlspecialchars($data["prodi"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$email = htmlspecialchars($data["email"]);
	$nohp = htmlspecialchars($data["nohp"]);
	$angkatan = htmlspecialchars($data["angkatan"]);
	$peminatan = htmlspecialchars($data["peminatan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	

    $query = "UPDATE akademik SET
				nama = '$nama',
    			nim = '$nim',
				prodi = '$prodi',
    			jurusan = '$jurusan',
				alamat = '$alamat',
    			email = '$email',
				nohp = '$nohp',
    			angkatan = '$angkatan',
				peminatan = '$peminatan',
    			gambar = '$gambar'
    			WHERE id = $id
    			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword){
	$query = "SELECT * FROM akademik
				WHERE
				nama LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%' OR
				nim LIKE '%$keyword%' 
				";
	return query($query);
}

?>