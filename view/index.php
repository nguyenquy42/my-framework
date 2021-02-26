<?php
include 'partials/header.php';
?>
<main>
    <?php
    if (isset($_SESSION['username']) && $_SESSION['username']) {
        echo 'Bạn đã đăng nhập với tên là ' . $_SESSION['username'] . "<br/>";
        echo 'Click vào đây để <a href="index.php?module=login&view=logout">Đăng Xuất</a>';
    } else {
        echo 'Bạn chưa đăng nhập <br>';
        echo 'Click vào đây để <a href="index.php?module=login">Đăng Nhập</a>';
    }
    ?>
</main>
<?php
include 'partials/footer.php'
?>