<?php

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

    // ambil data dari formulir
    $id         = filter_data($_POST['id']);
    $nama       = filter_data($_POST['nama']);
    $jurusan    = filter_data($_POST['jurusan']);
    $fakultas   = filter_data($_POST['fakultas']);
    $nohp       = filter_data($_POST['nohp']);
    $alamat     = filter_data($_POST['alamat']);
    $email      = filter_data($_POST['email']);

    $now  = date("Y-m-d H:i:s");

    $data = [
        'ID_anggota'    => $id,
        'Nama'          => $nama,
        'Jurusan'       => $jurusan,
        'Fakultas'      => $fakultas,
        'Nohp'          => $nohp,
        'Alamat'        => $alamat,
        'Email'         => $email,
        'updated_at'    => $now
    ];
    
    update_data($conn,"anggotaperpus",$data,$id,'ID_anggota');

    redirect("?p=anggota_read");

} else {
    die("Akses dilarang...");
}

?>