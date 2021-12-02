<div class="container-fluid">
    <?php $judul = "Daftar Buku"?>
    <h3 class="text-dark mb-4">Koleksi Buku</h3>
    <?php if($_SESSION['role'] == 2){ ?>
    <div class="row">
        <div class="tombol"><a class="btn btn-primary btn-lg" id="btn-tambah" href="?p=buku_create"> Tambah </a></div>
    </div>  
    <?php } ?>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Koleksi Buku</p>
            </div>
            <div class="card-body">
            <?php $databuku = mysqli_query($conn, "select * from buku where deleted_at is null");?>
                <table id="tabelbuku" class="table table-striped">
                    <thead>
                        <tr>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Tersedia</th>
                        <th>Dipinjam</th>
                        <th>Total</th>
                        <?php if($_SESSION['role'] == 2){ ?>
                        <th>Aksi</th>
                        <?php } ?>
                        </tr>
                    </thead>
                    <tbody> 
                     <?php while($baris = mysqli_fetch_assoc($databuku)){?>
                        <tr>
                        <td><?php echo $baris["Judul_Buku"]?></td>
                        <td><?php echo $baris["Penerbit"]?></td>
                        <td><?php echo $baris["Tersedia"]?></td>
                        <td><?php echo $baris["Dipinjam"]?></td>
                        <td><?php echo $baris["Total"]?></td>
                        <?php if($_SESSION['role'] == 2){ ?>
                            <td><a class="btn btn-primary btn-sm" href='?p=buku_edit&id=<?php echo $baris['ID_buku']?>'>Ubah</a><a class="btn btn-danger btn-sm" href="?p=buku_delete&id=<?php echo $baris['ID_buku']?>">Hapus</a></td>
                        <?php } ?>
                        </tr>
                    <?php }?>   
                    </tbody>
                </table>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>            