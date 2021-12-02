<?php
   session_start();

    
?>

<body id="page-top">
    <div id="wrapper">
        <?php  
        if(isset($_SESSION['nama'])){
            if($_SESSION['role'] == 3 ){
                include "navbar_user.php";    
            }else{
                include "navbar.php";
            }
        }
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php
                if(isset($_SESSION['nama'])){?>
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item">
                            
                                    <a id="navlink" class="nav-link px-3" href="?p=logout">Sign out</a>
                                
                            </li>
                        </ul>
                    </div>
                </nav>
                <?php } ?>
                <?php  

        
                //localhost/website/index.php?p=profil
                if(isset($_GET['p']) == false)
                {
                    // tidak ada "p" nya
                    if($_SESSION['role'] == 3 ){
                        $page = 'katalog_buku';
                    }else{
                        $page = 'dashboard';
                    }
                    
                   
                }else{
                    // ambil dari variabel GET
                    $page = $_GET['p'];
                }
                    
                $file_to_open = "Page/".$page.".php";

                if(file_exists($file_to_open) == false){
                    $file_to_open = "Page/404.php";
                }

                $unprotected_pages = ['loginAdmin','loginAdmin_proses','loginUser','loginUser_proses','404','daftar','anggota_create'];

                if(in_array($page, $unprotected_pages) == false)
                {
                //   kalau diproteksi auth
                //   cek apakah sudah login?
                  if(isset($_SESSION['nama']) == false)
                  {
                    //belum login
                    redirect("?p=loginUser&err=2");
                  }
                }



                include $file_to_open;
                ?>
            </div>
            <?php  
            if(isset($_SESSION['nama'])){
                include "footer.php";}
                ?>
        </div>
        
    </div>
</body>
