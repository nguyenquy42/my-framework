<?php
include 'partials/header.php';
?>
<main>
  <div class="container-fluid">
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
            <!-- <th scope="col">Mật khẩu</th> -->
            <th scope="col">Chỉnh sửa</th>
          </tr>
        </thead>
        <tbody>
          <form method="post">
            <td scope="col">
              <input class="form-control" type="text" name="fullname" value="<?= $this->user[0]["fullname"] ?>">
            </td>
            <td scope="col">
              <input class="form-control" type="date" data-date-format="dd-mm-yyy" name="birthday" value="<?= $this->user[0]["birthday"] ?>">
            </td>
            <td scope="col">
              <input class="form-control" type="text" name="email" value="<?= $this->user[0]["email"] ?>">
            </td>
            <td scope="col">
              <input class="form-control" type="text" name="sex" value="<?= $this->user[0]["sex"] ?>">
            </td>
            <td scope="col">
              <input class="form-control" type="text" name="username" value="<?= $this->user[0]["username"] ?>">
            </td>
            <!-- <td scope="col">
              <input class="form-control" type="password" name="password" value="" placeholder="Mật khẫu mới...">
            </td> -->
            <td scope="col">
              <button type="submit" class="btn btn-outline-primary">Sửa</button>
            </td>
          </form>
        </tbody>
      </table>
</main>
<?php
include 'partials/footer.php'
?>