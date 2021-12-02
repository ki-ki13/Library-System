<div class="container-fluid m-4">
        <div class="card shadow" style="width:70%; margin: 0 auto">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold" style="text-align : center">Pendaftaran Anggota Perpustakaan</p>
            </div>
            <div class="card-body">
                <form method = "post" action="?p=anggota_add">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Anda" name="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Jurusan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Jurusan Anda" name="jurusan">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Fakultas</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Fakultas Anda" name="fakultas">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >No Hp</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomor Hp yang bisa dihubungi" name="nohp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Alamat</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Anda" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email Anda" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password" name="password">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="id_role" value= 3 >
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary btn-lg" value="Daftar" name="daftar" style="float:right">
                </div>
                </form>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>