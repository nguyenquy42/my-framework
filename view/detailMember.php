<?php
include 'partials/header.php';
?>
<main>
  <div class="container">
    <h1 class="text-center">Thông tin của <?= $this->user[0]["fullname"] ?></h1>
    <div class="row">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Họ và Tên</th>
            <th scope="col">Sinh Nhật</th>
            <th scope="col">Email</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Tên đăng nhập</th>
            <th scope="col">Quyềm</th>
            <!-- <th scope="col">Mật khẩu</th> -->
            <th scope="col">Chỉnh sửa</th>
          </tr>
        </thead>
        <tbody>
          <td scope="col"><?= $this->user[0]["fullname"] ?></td>
          <td scope="col"><?= dateMDY($this->user[0]["birthday"]) ?></td>
          <td scope="col"><?= $this->user[0]["email"] ?></td>
          <td scope="col"><?= $this->user[0]["sex"] ?></td>
          <td scope="col"><?= $this->user[0]["username"] ?></td>
          <td scope="col"><?= $this->user[0]["permission"] ?></td>
          <!-- <td scope="col">
            <input class="form-control" type="password" value="<?= $pass = $this->user[0]["password"] ?>" disabled >
          </td> -->
          <td scope="col"><?= '<a  class="btn btn-outline-info" href="index.php?module=login&view=updata&action=update&id=' . $id . '">' ?>Sửa</a></td>
        </tbody>
      </table>
</main>
<?php
include 'partials/footer.php'
?>