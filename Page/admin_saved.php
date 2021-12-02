<?php
if(isset($_POST['tambah'])){
    $nama       =  filter_data($_POST['nama']);
    $email      =  filter_data($_POST['email']);
    $password   =  filter_data($_POST['password']);
    $id_role    =  $_POST['id_role'];

    $password = sha1($password);

    $now  = date("Y-m-d H:i:s");

    $data = [
        'Nama'       => $nama,
        'Email'      => $email,
        'Password'   => $password,
        'id_role'    => $id_role,
        'created_at' => $now,
        'updated_at' => $now
    ]; 

    insert_data($conn,"admin",$data);

    redirect('?p=tabeladmin');
    
}else{
    die('ga bisa');
}