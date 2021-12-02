<div class="container-fluid">
    <?php $judul = "Ubah Anggota"?>
    <h3 class="text-dark mb-4"style="margin-bottom: 20px">Ubah Data Anggota</h3>
        <div class="card shadow" style="width:70%; margin: 0 auto">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold" style="text-align : center">Formulir Ubah Data Anggota</p>
            </div>
            <div class="card-body">
                <form method = "post" action="?p=anggota_saved">
                <?php 
                $id = $_GET['id'];
                $dataanggota = mysqli_query($conn, "select * from anggotaperpus where ID_anggota = $id");
                $baris = mysqli_fetch_assoc($dataanggota);?>
                <input type="hidden" name="id" value="<?php echo $baris['ID_anggota']?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Nama Anggota</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" " name="nama" value="<?php echo $baris['Nama']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Jurusan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" " name="jurusan" value= "<?php echo $baris['Jurusan']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Fakultas</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" " name="fakultas" value="<?php echo $baris['Fakultas']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >No Hp</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" " name="nohp" value="<?php echo $baris['Nohp']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Alamat</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" " name="alamat" value="<?php echo $baris['Alamat']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" " name="email" value="<?php echo $baris['Email']?>">
                </div>
                <div class="mb-3">
                    <a href="?p=anggota_read" class="btn btn-danger btn-lg">Kembali</a>
                    <input type="submit" class="btn btn-primary btn-lg" value="Ubah" name="update" style="float:right">
                </div>
                </form>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>

<!-- BUTUH UBAH -->