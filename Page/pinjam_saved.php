<?php

// cek apakah tombol simpan sudah diklik atau blum?
if($_GET['f']==1){
    if(isset($_POST['pinjam'])){

        $now  = date("Y-m-d H:i:s");
        $date = strtotime("+7 day");
    
        // ambil data dari formulir
        $id_buku            = filter_data($_POST['id_buku']);
        $id_anggota         = filter_data($_POST['id_anggota']);
        $tanggal_kembali    = date('Y-m-d H:i:s', $date);
    
        $buku = mysqli_query($conn, "select * from buku where ID_buku = $id_buku");
    
        while($baris = mysqli_fetch_assoc($buku)){
            $tersedia         = $baris['Tersedia'] -1;
            $dipinjam         = $baris['Dipinjam'] +1;
            // $_SESSION['buku'] = $baris['Judul_Buku']; 
        }
    
        $update_buku = [
            'Tersedia'  => $tersedia,
            'Dipinjam'  => $dipinjam,
            'updated_at'=> $now
        ];
    
        $data = [
            'ID_anggota'     => $id_anggota,
            'ID_buku'        => $id_buku,
            'Tanggal_Pinjam' => $now,
            'Tanggal_Kembali'=> $tanggal_kembali,
            'Status'         => "not returned",
            "created_at"     => $now
        ];
        
        // $_SESSION['id_buku']    = $id_buku;
        // $_SESSION['tgl_pinjam'] = $now;
        // $_SESSION['tgl_kembali']= $tanggal_kembali;
        
        insert_data($conn,"peminjaman",$data);
        update_data($conn,"buku",$update_buku,$id_buku,'ID_buku');
    
        redirect("?p=katalog_buku&a=1");
    
    } else {
        die("Akses dilarang...");
    }
}elseif($_GET['f']==2) {
    // cek apakah tombol simpan sudah diklik atau blum?
    if(isset($_GET['id']) && isset($_GET['idtr'])){

    $id   = $_GET['id'];

    $buku = mysqli_query($conn, "select * from buku where ID_buku = $id");

    while($baris = mysqli_fetch_assoc($buku)){
        $tersedia         = $baris['Tersedia'] +1;
        $dipinjam         = $baris['Dipinjam'] -1;
    }
    

    $now  = date("Y-m-d H:i:s");

    $data = [
        'ID_buku'       => $id,
        'Tersedia'      => $tersedia,
        'Dipinjam'      => $dipinjam,
        'updated_at'    => $now
    ];
    
    
    $idtr       = $_GET['idtr'];
    $id_anggota = $_GET['ida'];

    $kembali =[
        'ID_trbuku'      => $idtr,
        'ID_buku'        => $id,
        'ID_anggota'     => $id_anggota,
        'Status'         => "returned",
        'updated_at'     => $now

    ];

    update_data($conn,"buku",$data,$id,'ID_buku');
    update_data($conn,"peminjaman",$kembali,$idtr,'ID_trbuku');

    if($_GET['user']== 1){
        redirect("?p=user_history");
    }else{
        redirect("?p=pinjam_read");
    }

    

} else {
    die("Akses dilarang...");
}
}


?>