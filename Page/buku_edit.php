<div class="container-fluid">
    <?php $judul = "Ubah Buku"?>
    <h3 class="text-dark mb-4"style="margin-bottom: 20px">Ubah Koleksi Buku</h3>
        <div class="card shadow" style="width:70%; margin: 0 auto">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold" style="text-align : center">Formulir Ubah Koleksi Buku</p>
            </div>
            <div class="card-body">
                <form method = "post" action="?p=buku_saved&f=2">
                <?php 
                $id = $_GET['id'];
                $databuku = mysqli_query($conn, "select * from buku where ID_buku = $id");
                $baris = mysqli_fetch_assoc($databuku);?>
                <input type="hidden" name="id" value="<?php echo $baris['ID_buku']?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Judul Buku</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Buku" name="judul" value="<?php echo $baris['Judul_Buku']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Penerbit</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Penerbit" name="penerbit" value= "<?php echo $baris['Penerbit']?>">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Gambar</label>
                    <input type="file" class="form-control" id="inputGroupFile01" name="file" value="<?php echo $baris['Gambar']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Tersedia</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tersedia" name="tersedia" value="<?php echo $baris['Tersedia']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Dipinjam</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Dipinjam" name="dipinjam" value="<?php echo $baris['Dipinjam']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Total</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Total" name="total" value="<?php echo $baris['Total']?>">
                </div>
                <div class="mb-3">
                    <a href="?p=buku_read" class="btn btn-danger btn-lg">Kembali</a>
                    <input type="submit" class="btn btn-primary btn-lg" value="Ubah" name="update" style="float:right">
                </div>
                </form>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>

<!-- BUTUH UBAH -->