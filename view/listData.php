<?php
include 'partials/header.php';
?>
<main>
  <div class="container">
    <h1>Danh sách hội đồng cấp cao của cty .........</h1>
    <div class="row">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // ddd($this->users);
          for ($i = 0; $i < count($this->users); $i++) {

            $stt = $i + 1;
            $id = $this->users[$i]['id'];
            echo '<tr><td scope-"row">' . $stt . '</td>';
            echo '<td>' . $this->users[$i]['fullname'] . '</td>';
            echo '<td>' . $this->users[$i]['email'] . '</td>';
            echo '<td> 
            <a href="/lpbooks.tk/view/view.php/' . $id . '">Xem</a>
            <a href="/learn-php-quy/index.php/article/uparticle/' . $id . '">Sửa</a>
            </td></tr>';
          }
          ?>
        </tbody>
      </table>
</main>
<?php
include 'partials/footer.php'
?>