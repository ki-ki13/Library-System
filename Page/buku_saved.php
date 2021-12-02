<?php
if($_GET['f'] == 1){
    if(isset($_POST['tambah'])){
        $Judul_Buku =  filter_data($_POST['judul']);
        $Penerbit   =  filter_data($_POST['penerbit']);
        $Total      =  filter_data($_POST['total']);
        $nama_gambar=  $_FILES['file']['name'];
        $file_tmp   =  $_FILES['file']['tmp_name'];
    
        $now  = date("Y-m-d H:i:s");
    
        move_uploaded_file($file_tmp, './assets/img/'.$nama_gambar);
    
        $data = [
            'Judul_Buku' => $Judul_Buku,
            'Penerbit'   => $Penerbit,
            'Gambar'     => $nama_gambar,
            'Total'      => $Total,
            'Tersedia'   => $Total,
            'created_at' => $now,
            'updated_at' => $now
        ]; 
    
    
        insert_data($conn,"buku",$data);
    
        redirect('?p=buku_read');
        
    }else{
        die('ga bisa');
    }
}elseif ($_GET['f'] == 2) {
    // cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

    // ambil data dari formulir
    $id         = filter_data($_POST['id']);
    $judul      = filter_data($_POST['judul']);
    $penerbit   = filter_data($_POST['penerbit']);
    $tersedia   = filter_data($_POST['tersedia']);
    $dipinjam   = filter_data($_POST['dipinjam']);
    $total      = filter_data($_POST['total']);

    $now  = date("Y-m-d H:i:s");

    $data = [
        'ID_buku'       => $id,
        'Judul_Buku'    => $judul,
        'Penerbit'      => $penerbit,
        'Tersedia'      => $tersedia,
        'Dipinjam'      => $dipinjam,
        'Total'         => $total,
        'updated_at'    => $now
    ];
    
    update_data($conn,"buku",$data,$id,'ID_buku');

    redirect("?p=buku_read");

} else {
    die("Akses dilarang...");
}
}
