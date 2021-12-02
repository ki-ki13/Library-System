<div class="container-fluid">
    <?php $judul = "Tambah Buku"?>
    <h3 class="text-dark mb-4"style="margin-bottom: 20px">Tambah Koleksi Buku</h3>
        <div class="card shadow" style="width:70%; margin: 0 auto">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold" style="text-align : center">Formulir Tambah Koleksi Buku</p>
            </div>
            <div class="card-body">
                <form method = "post" action="?p=buku_saved&f=1" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Judul Buku</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Buku" name="judul">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Penerbit</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Penerbit" name="penerbit">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Gambar</label>
                    <input type="file" class="form-control" id="inputGroupFile01" name="file">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Total</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Total" name="total">
                </div>
                <div class="mb-3">
                    <a href="?p=buku_read" class="btn btn-danger btn-lg">Kembali</a>
                    <input type="submit" class="btn btn-primary btn-lg" value="Tambah" name="tambah" style="float:right">
                </div>
                </form>
                <!-- <h2>isi</h2> -->
            </div>
        </div>
</div>