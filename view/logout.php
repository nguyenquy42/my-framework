<?php 
if (!isset($_SESSION)) {
    session_start();
}
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
    header('Location: index.php');
}
?>
<a href="index.php">Quay về trang HOME</a>