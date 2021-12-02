<div class="container-fluid">
    <?php $judul = "Daftar Buku"?>
    <h3 class="text-dark mb-4">Riwayat Peminjaman Buku</h3>  
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Riwayat Peminjaman Buku</p>
            </div>
            <div class="card-body">
            <?php 
            $query = "select * from peminjaman 
            INNER JOIN buku on buku.ID_buku = peminjaman.ID_buku 
            inner join anggotaperpus on anggotaperpus.ID_anggota = peminjaman.ID_anggota 
            order by peminjaman.ID_trbuku ";
            $datapinjam = mysqli_query($conn, $query);?>
                <table id="tabeladminhistory" class="table table-striped">
                    <thead>
                        <tr>
                        <th>Nama</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status </th>
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
                        </tr>
                    <?php }?>   
                    </tbody>
                </table>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>            