<div class="container-fluid">
    <?php $judul = "Tambah Pengurus"?>
    <h3 class="text-dark mb-4"style="margin-bottom: 20px">Tambah Pengurus Perpustakaan</h3>
        <div class="card shadow" style="width:70%; margin: 0 auto">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold" style="text-align : center">Formulir Tambah Pengurus Perpustakaan</p>
            </div>
            <div class="card-body">
                <form method = "post" action="?p=admin_saved">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pengurus" name="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email Pengurus" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password" name="password">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Role</label>
                    <select name="id_role" class="form-select">
                        <?php 
                        $sql = "SELECT * FROM role";
                        $qry = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($qry)) { ?>
                            <option value="<?= $row['id_role'] ?>"><?= $row['nm_role'] ?></option>
                        <?php } ?>
				</select>
                </div>
                <div class="mb-3">
                    <a href="?p=admin_read" class="btn btn-danger btn-lg">Kembali</a>
                    <input type="submit" class="btn btn-primary btn-lg" value="Tambah" name="tambah" style="float:right">
                </div>
                </form>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>