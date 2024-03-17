<?php

   include "../dao/pdo.php";
   include "../dao/danhmuc.php";
   include "../dao/user.php";

   include "view/header.php";

   if(isset($_GET['pg'])){
      switch ($_GET['pg']) {
         case 'orders':
            include "view/orders.php";
            break;
         case 'caterogies':
            include "view/caterogies.php";
            break;
         case 'caterogies_add':
            if(isset($_POST['btnadd'])){
               $name=$_POST['name'];
               danhmuc_insert($name);
               $tb="Bạn đã thêm thành công!";
            }
            include "view/caterogies_add.php";
            break;
         case 'products':
            include "view/products.php";
            break;
         case 'users':
            include "view/users.php";
            break;
         case 'users_add':
            if(isset($_POST['btnadd'])){
               $username=$_POST['username'];
               $password=$_POST['password'];
               $ten=$_POST['ten'];
               $diachi=$_POST['diachi'];
               $email=$_POST['email'];
               $dienthoai=$_POST['dienthoai'];

               // users_insert($username,$password,$ten,$diachi,$email,$dienthoai);
               users_insert($username,$password);
               $tb="Bạn đã thêm thành công!";
            }
            include "view/users_add.php";
            break;
         case 'banners':
            include "view/banners.php";
            break;
         case 'binhluan':
            include "view/binhluan.php";
            break;
         
         default:
            include "view/home.php";
            break;
      }
   }else{
      include "view/home.php";
   }

   include "view/footer.php";
?>