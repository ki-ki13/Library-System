<?php

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    $now = date("Y-m-d H:i:s");

    $data = [
        'deleted_at' => $now,
        'updated_at' => $now
    ];

    update_data($conn, "admin", $data, $id, "ID_admin");
    
    redirect("?p=admin_read");
} else {
    die("akses dilarang...");
}

?>