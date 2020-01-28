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
        $gambar = htmlspecialchars($data["gambar"]);

          // query insert data
        $query = "INSERT INTO siswa VALUES ('','$nrp','$nama','$email','$jurusan','$gambar')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
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
       $gambar = htmlspecialchars($data["gambar"]);

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

?>