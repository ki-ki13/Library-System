<div class="container-fluid">
    <?php $judul = "List Admin"?>
    <h3 class="text-dark mb-4">Anggota Perpustakaan</h3> 
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Anggota Perpustakaan</p>
            </div>
            <div class="card-body">
                
            <?php $dataanggota = mysqli_query($conn, "select * from anggotaperpus where deleted_at is null;");?>
                <table id="tabelanggota" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Fakultas</th>
                            <th>No hp</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <?php if($_SESSION['role'] == 1){ ?>
                            <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody> 
                     <?php while($baris = mysqli_fetch_assoc($dataanggota)){?>
                        <tr>
                            <td><?php echo $baris["Nama"]?></td>
                            <td><?php echo $baris["Jurusan"]?></td>
                            <td><?php echo $baris["Fakultas"]?></td>
                            <td><?php echo $baris["Nohp"]?></td>
                            <td><?php echo $baris["Alamat"]?></td>
                            <td><?php echo $baris["Email"]?></td>
                            <?php if($_SESSION['role'] == 1){ ?>
                            <td><a class="btn btn-primary btn-sm" href='?p=anggota_edit&id=<?php echo $baris['ID_anggota']?>'>Ubah</a><a class="btn btn-danger btn-sm" href="?p=anggota_delete&id=<?php echo $baris['ID_anggota']?>">Hapus</a></td>
                            <?php } ?>
                        </tr>
                    <?php }?>   
                    </tbody>
                </table>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>            