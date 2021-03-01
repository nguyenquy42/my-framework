<!doctype html>
<html lang="en">

<head>
  <title>trang chur</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/View/assets/css/styles.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/View/assets/css/flaticon.css">

<body>
  </head>
  <!-- fixed-top mb-5 -->
  <header class="bg-black text-white mb-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2">
          <a href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>/View/assets/imgages/logo-lpbooks.png" alt="img-logo"></a>
        </div>
        <div class="col-lg-6 d-flex align-items-center">
          <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php?module=login&view=listData">danh sách</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link </a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-lg-4 nav-top-right">
          <div class="dropdown dropleft">
            <a class="dropdown-toggle search-top" data-toggle="dropdown"><i class="flaticon-loupe"></i></a>
            <div class="dropdown-menu p-0 box-search-top">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="tìm kiếm...">
                <div class="input-group-append">
                  <span class="input-group-text input-icon-search"><i class="flaticon-loupe"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="ml-2">
            <p class="m-0"> </p>

            <div class="navbar-nav">
              <div class="dropdown">
                <?php if (isset($_SESSION['author'])) {
                  echo  $_SESSION['author'];
                } else {
                  echo $_SESSION['none'];
                }
                ?>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= BASE_URL ?>/index.php?module=login&view=logout">đăng xuất</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>