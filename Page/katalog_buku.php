<?php if(isset($_GET['a']))
    {
        $success = $_GET['a'];
        if($success == 1)
        {
            echo "<div class='alert alert-success m-4'>Proses peminjaman berhasil!</div>";
            
        }
    } 
?>

<div class="container m-4">
    <div class="row">
    <?php
    $buku = mysqli_query($conn, "select * from buku where deleted_at is null");
    while($baris = mysqli_fetch_assoc($buku)){ ?>
    <div class="col-3">
        <div class="card me-md-5 mr-2 ml-2" style="width: 15rem;">
            <div class="card-body bg-light">
            <img src="./assets/img/<?php echo $baris["Gambar"];?>" class="card-img-top" alt="...">
                <h5 class="card-title"><?php echo $baris["Judul_Buku"];?> </h5>
                <h6 class="card-subtitle mb-2 text-muted">Penerbit : <?php echo $baris["Penerbit"];?></h6>
                <a href="?p=pinjam_create&id=<?php echo $baris["ID_buku"]?>" class="btn btn-primary">Pinjam</a>
            </div>
        </div>
    </div>
    <?php } ?>  
    </div>
</div>