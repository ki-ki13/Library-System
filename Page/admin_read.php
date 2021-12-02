<div class="container-fluid">
    <?php $judul = "List Admin"?>
    <h3 class="text-dark mb-4">Pengurus Perpustakaan</h3> 
    <?php 
        if($_SESSION['role'] == 1){ 
    ?>
    <div class="row">
        <div class="tombol"><a class="btn btn-primary btn-lg" id="btn-tambah" href="?p=admin_create"> Tambah </a></div>
    </div> 
    <?php } ?>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Admin Perpustakaan</p>
            </div>
            <div class="card-body">
                
            <?php $dataadmin = mysqli_query($conn, "select * from admin 
            INNER JOIN role ON role.id_role=admin.id_role
            where admin.deleted_at is null;
            ");?>
                <table id="tabeladmin" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <?php 
                                if($_SESSION['role'] == 1){ 
                                    echo '<th>Aksi</th>';
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody> 
                     <?php while($baris = mysqli_fetch_assoc($dataadmin)){?>
                        <tr>
                            <td><?php echo $baris["Nama"]?></td>
                            <td><?php echo $baris["Email"]?></td>
                            <td><?php echo $baris["nm_role"]?></td>
                            <?php 
                                if($_SESSION['role'] == 1){ ?>
                                    <td><a class="btn btn-danger btn-sm" href="?p=admin_delete&id=<?php echo $baris['ID_admin']?>">Hapus</a></td>
                                <?php }?>
                        </tr>
                    <?php }?>   
                    </tbody>
                </table>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>            