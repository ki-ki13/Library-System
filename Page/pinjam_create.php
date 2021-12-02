<div class="container-fluid m-4">
        <div class="card shadow" style="width:70%; margin: 0 auto">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold" style="text-align : center">Peminjaman Buku</p>
            </div>
            <div class="card-body">
                <form method = "post" action="?p=pinjam_saved&f=1">
                <?php 
                $id = $_GET['id'];
                $databuku = mysqli_query($conn, "select * from buku where ID_buku = $id");
                $baris = mysqli_fetch_assoc($databuku);
                $date = strtotime("+7 day");
                $date = date('M d, Y', $date);
                ?>
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="exampleFormControlInput1" value ="<?php echo $baris['ID_buku']?>" name="id_buku">
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="exampleFormControlInput1" value = "<?php echo $_SESSION["id_user"]?>" name="id_anggota">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Nama</label>
                    <input class="form-control" type="text" value = "<?php echo $_SESSION["nama"]?>" name="nama" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Judul Buku</label>
                    <input class="form-control" type="text" value = "<?php echo $baris["Judul_Buku"]?>" name="judul" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Tanggal Pengembalian</label>
                    <input class="form-control" type="text" value = "<?php echo $date;?>" name="tanggal" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <a href="?p=katalog_buku" class="btn btn-danger btn-lg">Kembali</a>
                    <input type="submit" class="btn btn-primary btn-lg" value="Pinjam" name="pinjam" style="float:right">
                </div>
                </form>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>