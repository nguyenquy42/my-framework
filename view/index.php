<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <?php 
       if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
           echo 'Click vào đây để <a href="index.php/login/logout">Đăng Xuất</a>';
       }
       else{
           echo 'Bạn chưa đăng nhập <br>';
           echo 'Click vào đây để <a href="index.php?module=login">Đăng Nhập</a>';
       }
       ?>
    </body>
</html>