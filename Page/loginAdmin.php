<?php
    if(isset($_GET['err']))
    {
        $err = $_GET['err'];
        if($err == 1)
        {
            echo "<div class='alert alert-danger m-4'>Username atau password Anda salah!</div>";
            
        }
        else if($err == 2)
        {
            echo "<div class='alert alert-danger m-4'>Silahkan login terlebih dahulu</div>";
        }
    }

    if(isset($_GET['msg']))
    {
        $err = $_GET['msg'];
        if($err == 1)
        {
            echo "<div class='alert alert-success m-4'>Proses logout berhasil!</div>";
            
        }
    } 
?>

<div class="text-center" id="body">
    
    <div class="form-signin">
    <form method="post" action="?p=loginAdmin_proses">
        <i class="fas fa-book-reader"></i>
        <h1 class="h3 mb-3 fw-normal">Perpustakaan MariBaca</h1>
        <h3 class="h5 mb-3 fw-normal">Admin Silahkan Login</h3>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <input type="submit" class="w-100 btn btn-lg btn-primary" type="submit" value="Masuk"></input>
    </form>
</div>
</div>