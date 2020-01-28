<?php
    // koneksi ke database
   $conn = mysqli_connect("localhost","root", "", "phpbasic");
  
   function query($query){
       global $conn;
       $result = mysqli_query($conn, $query);
       $rows = [];
       while($row = mysqli_fetch_assoc($result)){
           $rows[] = $row;
       }

       return $rows;
   }

   function tambah($data){
        global $conn;
        $nrp  = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        //$gambar = htmlspecialchars($data["gambar"]);
        // upload gambar
        $gambar = upload();
        if (!$gambar) {
            return false;
        }

          // query insert data
        $query = "INSERT INTO siswa VALUES ('','$nrp','$nama','$email','$jurusan','$gambar')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
   }

   function upload(){
       $nama_file = $_FILES['gambar']['name'];
       $ukuran_file = $_FILES['gambar']['size'];
       $error = $_FILES['gambar']['error'];
       $tmp_name = $_FILES['gambar']['tmp_name'];

       // cek apakah ada gambar yg di upload / tdk?
       if ($error === 4) {
           echo "<script>
                    alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
       }

       // cek apakah yg di upload gambar?
       $ekstensi_gambar_valid = ['jpg','jpeg','png'];
       $ekstensi_gambar       = explode('.',$nama_file);
       $ekstensi_gambar       = strtolower(end($ekstensi_gambar));
       if (!in_array($ekstensi_gambar, $ekstensi_gambar_valid)) {
           echo "<script>
                    alert('yang anda upload bukan gambar');
                </script>";
            return false;
       }

       // cek jika ukuran terlalu besar
       if ($ukuran_file > 1000000) {
            echo "<script>
                    alert('ukuran gambar terlalu besar!');
                </script>";
            return false;
       }

       // lolos pengecekan, gambar siap di upload
       // generate nama gambar baru
       $nama_file_baru = uniqid();
       $nama_file_baru .= '.';
       $nama_file_baru .= $ekstensi_gambar;

       move_uploaded_file($tmp_name,'img/' . $nama_file_baru);
       return $nama_file_baru;

   }

   function hapus($id){
       global $conn;
       $query = "DELETE FROM siswa WHERE id = $id";
       mysqli_query($conn, $query);
       return mysqli_affected_rows($conn);
   }

   function ubah($data){
       global $conn;
       $id = $data["id"];
       $nrp  = htmlspecialchars($data["nrp"]);
       $nama = htmlspecialchars($data["nama"]);
       $email = htmlspecialchars($data["email"]);
       $jurusan = htmlspecialchars($data["jurusan"]);
       $gambar_lama = $data['gambarlama'];

       // cek apakah user pilih gambar baru atau tidak
       if ($_FILES['gambar']['error'] === 4) {
           $gambar = $gambar_lama;
       } else {
           $gambar = upload();
       }

       $query = "UPDATE siswa SET 
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
            ";

       mysqli_query($conn, $query);

       return mysqli_affected_rows($conn);
   }

   function cari($keyword){
        $query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR
        nrp LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' ";
        return query($query);
   }

?>