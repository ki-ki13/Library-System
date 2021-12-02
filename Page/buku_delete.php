<?php

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    $now = date("Y-m-d H:i:s");

    $data = [
        'deleted_at' => $now,
        'updated_at' => $now
    ];

    update_data($conn, "buku", $data, $id, "ID_buku");
    
    redirect("?p=buku_read");
} else {
    die("akses dilarang...");
}

?>