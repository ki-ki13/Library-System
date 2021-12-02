<?php

//data yang diinputkan 
$email    = filter_data($_POST['email']);
$password = filter_data($_POST['password']);
$password = sha1($password);

//ambil data dari db untuk dicocokkan dengan inputan
$login = mysqli_query($conn, "select * from admin where Email='$email' and Password='$password'");
$cek   = mysqli_num_rows($login);

if($cek > 0){

    $row = mysqli_fetch_assoc($login);

	$_SESSION['nama']    = $row["Nama"];
    $_SESSION['role']    = $row["id_role"];
    $_SESSION['id_admin']= $row["ID_admin"];
	$_SESSION['status']  = "login";
	
    redirect("?p=dashboard");
}else{
    redirect("?p=loginAdmin&err=1");
	// echo "<script>alert('salah');</script>";	
}