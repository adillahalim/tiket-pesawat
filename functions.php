<?php

$conn = mysqli_connect("localhost", "root", "", "tiketkereta");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["name"]);
    $asal = htmlspecialchars($data["asal"]);
    $tujuan = htmlspecialchars($data["tujuan"]);
    $dewasa = htmlspecialchars($data["dewasa"]);
    $bayi = htmlspecialchars($data["bayi"]);
    $tgl_berangkat = htmlspecialchars($data["tglbrngkt"]);
    $tgl_pulang = htmlspecialchars($data["tglpulang"]);
    $pembayaran = htmlspecialchars($data["pembayaran"]);

    $query  = "INSERT INTO tiket
                VALUES
            ('', '$nama', '$asal', '$tujuan', '$dewasa', '$bayi', '$tgl_berangkat', '$tgl_pulang', '$pembayaran')
            ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tiket WHERE idTiket = $id");
    return mysqli_affected_rows($conn);
}


function edit($data) {
    global $conn;
    global $result;
    global $query;
    $id = $data["id"];
    $nama = htmlspecialchars($data["name"]);
    $asal = htmlspecialchars($data["asal"]);
    $tujuan = htmlspecialchars($data["tujuan"]);
    $dewasa = htmlspecialchars($data["dewasa"]);
    $bayi = htmlspecialchars($data["bayi"]);
    $tgl_berangkat = htmlspecialchars($data["tglbrngkt"]);
    $tgl_pulang = htmlspecialchars($data["tglpulang"]);
    $pembayaran = htmlspecialchars($data["pembayaran"]);

  
        $query = "UPDATE tiket SET
        nama = '$nama',
        asal = '$asal',
        tujuan = '$tujuan',
        dewasa = '$dewasa',
        bayi = '$bayi',
        tgl_berangkat = '$tgl_berangkat',
        tgl_pulang = '$tgl_pulang',
        pembayaran = '$pembayaran'
        WHERE idTiket = '$id'
    ";
       $result = mysqli_query($conn, $query);
        

       return mysqli_affected_rows($conn);
    
}


function cari($keywoard) {
    $query = "SELECT * FROM tiket
        WHERE
        nama LIKE '$keywoard%' OR
        asal LIKE '$keywoard' OR
        tujuan LIKE '$keywoard' OR
        pembayaran LIKE '$keywoard' 
        ";
        return query($query);
}



function registrasi($data) {
    global $conn;

    $username = strtolower (stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!')
            </script>";
        return false;
    }


    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }
    
    $password = password_hash($password, PASSWORD_DEFAULT);
    

    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);


}





















?>