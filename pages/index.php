<?php
session_start();
if (isset ($_GET['page'])){
        $page=$_GET['page'];
}else{

    $page="";

}

switch($page){

        default:
            if ($page == ""){
          //    $title="Halaman Admin";
          //    include "header.php";
          //    include "navbar.php";
          //    include "sidebar.php";
          //    include "home/home.php";
          //    include "footer.php";
          $title="Halaman Admin";
          include "header.php";
          include "navbar.php";
          include "sidebar.php";
          include "buku/form_buku.php";
          include "footer.php";

            }
            else{
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "blank.php";
             include "footer.php";   
            }
        break; 

        case "home":
          //    $title="Halaman Admin";
          //    include "header.php";
          //    include "navbar.php";
          //    include "sidebar.php";
          //    include "home/home.php";
          //    include "footer.php";
          $title="Halaman Admin";
          include "header.php";
          include "navbar.php";
          include "sidebar.php";
          include "user/form_user.php";
          include "footer.php";
        break; 

        case "user":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "user/user.php";
             include "footer.php";
        
        break; 

        case "formuser":
          $title="Halaman Admin";
          include "header.php";
          include "navbar.php";
          include "sidebar.php";
          include "user/form_user.php";
          include "footer.php";

        break; 

        case "pbuku":
          $title="Halaman Admin";
          include "header.php";
          include "navbar.php";
          include "sidebar.php";
          include "list_blob.php";
          include "footer.php";
    
        break; 

        case "pformbuku":
          $title="Halaman Admin";
          include "header.php";
          include "navbar.php";
          include "sidebar.php";
          include "buku_blob.php";
          include "footer.php";

        break; 

        case "panalyze":
          $title="Halaman Admin";
          include "header.php";
          include "navbar.php";
          include "sidebar.php";
          include "image_analyze.php";
          include "footer.php";

        break; 

    }

?>



