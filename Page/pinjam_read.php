<div class="container-fluid">
    <?php $judul = "Daftar Buku"?>
    <h3 class="text-dark mb-4">Peminjaman Buku</h3>  
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Peminjaman Buku</p>
            </div>
            <div class="card-body">
            <?php 
            $status = "not returned";
            $query = "select * from peminjaman 
            INNER JOIN buku on buku.ID_buku = peminjaman.ID_buku 
            inner join anggotaperpus on anggotaperpus.ID_anggota = peminjaman.ID_anggota  
            where Status = '$status' ";
            $datapinjam = mysqli_query($conn, $query);?>
                <table id="tabelpinjam" class="table table-striped">
                    <thead>
                        <tr>
                        <th>Nama</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status </th>
                        <?php if($_SESSION['role'] == 2){ ?>
                        <th>Aksi</th>
                        <?php } ?>
                        </tr>
                    </thead>
                    <tbody> 
                     <?php while($baris = mysqli_fetch_assoc($datapinjam)){?>
                        <tr>
                        <td><?php echo $baris["Nama"]?></td>
                        <td><?php echo $baris["Judul_Buku"]?></td>
                        <td><?php echo $baris["Tanggal_Pinjam"]?></td>
                        <td><?php echo $baris["Tanggal_Kembali"]?></td>
                        <td><?php echo $baris["Status"]?></td>
                        <?php if($_SESSION['role'] == 2){ ?>
                        <td>
                            <a class="btn btn-danger btn-sm" href='?p=pinjam_saved&id=<?php echo $baris['ID_buku']?>&idtr=<?php echo $baris['ID_trbuku']?>&ida=<?php echo $baris['ID_anggota']?>&f=2'>Tarik Buku</a>
                        </td>
                        <?php } ?>    
                        </tr>
                    <?php }?>   
                    </tbody>
                </table>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>            