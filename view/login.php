<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Đăng Nhập</title>
</head>

<body>
    <?php
    //Khai báo sử dụng session
    if (!isset($_SESSION)) {
        session_start();
    }

    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    // khai báo biến cho lỗi đăng nhập.
    $nameErr = $passwordErr = "";

    //Xử lý đăng nhập
    if (isset($_POST['view/login.php'])) {

        //Kết nối tới database
        include('model/masterData.php');
        $connect = new masterData();
        //Lấy dữ liệu nhập vào
        $username = addslashes($_POST['txtUsername']);
        $password = addslashes($_POST['txtPassword']);

        // mã hóa pasword
        $password = md5($password);

        //Kiểm tra tên đăng nhập có tồn tại không
        $user = $connect->login($username, $password);
    }
    ?>

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Đăng nhập tài khoản</div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Đăng Nhập</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="txtUsername" value="<?php echo (isset($username) ? $username : '') ?>" required autofocus>
                                        <!-- <span class="text-danger"><?php echo  $nameErr; ?></span> -->
                                        <?php
                                        if (isset($a)) {
                                            echo $a;
                                        }
                                        ?>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="txtPassword" required>
                                        <?php
                                        if (isset($b)) {
                                            echo $b;
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Ghi nhớ
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" name="login">
                                        Đăng Nhập
                                    </button>
                                    <input onclick="location.href='/learn-php-quy/index.php/login/regis'" class="btn btn-primary" value="Đăng ký">
                                    <a href="#" class="btn btn-link">
                                        Quên mật khẩu?
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main>


</body>

</html>