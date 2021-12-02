<div class="container-fluid">
    <?php $judul = "Daftar Buku"?>
    <h3 class="text-dark mb-4">Riwayat Peminjaman Buku</h3>  
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Riwayat Peminjaman Buku</p>
            </div>
            <div class="card-body">
            <?php 
            $anggota = $_SESSION['id_user']; 
            $status = "not returned";
            $query = "select * from peminjaman 
            INNER JOIN buku on buku.ID_buku = peminjaman.ID_buku 
            inner join anggotaperpus on anggotaperpus.ID_anggota = peminjaman.ID_anggota  
            where peminjaman.Status = '$status' and peminjaman.ID_anggota = '$anggota'";
            $datapinjam = mysqli_query($conn, $query);?>
                <table id="tabelriwayat" class="table table-striped">
                    <thead>
                        <tr>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody> 
                     <?php while($baris = mysqli_fetch_assoc($datapinjam)){?>
                        <tr>
                        <td><?php echo $baris["Judul_Buku"]?></td>
                        <td><?php echo $baris["Tanggal_Pinjam"]?></td>
                        <td><?php echo $baris["Tanggal_Kembali"]?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href='?p=pinjam_saved&id=<?php echo $baris['ID_buku']?>&idtr=<?php echo $baris['ID_trbuku']?>&ida=<?php echo $baris['ID_anggota']?>&f=2&user=1'>Kembalikan</a>
                        </td>    
                        </tr>
                    <?php }?>   
                    </tbody>
                </table>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>            