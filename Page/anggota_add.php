<?php
if(isset($_POST['daftar'])){
    $nama       =  filter_data($_POST['nama']);
    $jurusan    =  filter_data($_POST['jurusan']);
    $fakultas   =  filter_data($_POST['fakultas']);
    $nohp       =  filter_data($_POST['nohp']);
    $alamat     =  filter_data($_POST['alamat']);
    $email      =  filter_data($_POST['email']);
    $password   =  filter_data($_POST['password']);
    $id_role    =  $_POST['id_role'];

    $password = sha1($password);

    $now  = date("Y-m-d H:i:s");

    $data = [
        'Nama'       => $nama,
        'Jurusan'    => $jurusan,
        'Fakultas'   => $fakultas,
        'Nohp'       => $nohp,
        'Alamat'     => $alamat,
        'Email'      => $email,
        'Password'   => $password,
        'id_role'    => $id_role,
        'created_at' => $now,
        'updated_at' => $now
    ]; 

    $masuk = insert_data($conn,"anggotaperpus",$data);
    redirect('?p=loginUser');
    
}else{
    die('ga bisa');
}