<?php
include 'partials/header.php';
?>
<main>
  <div class="container">
    <h1 class="text-center">Danh sách hội đồng cấp cao của cty .........</h1>
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
          for ($i = 0; $i < count($this->users); $i++) {

            $stt = $i + 1;
            $id = $this->users[$i]['id'];
            echo '<tr><td scope-"row">' . $stt . '</td>';
            echo '<td>' . $this->users[$i]['fullname'] . '</td>';
            echo '<td>' . $this->users[$i]['email'] . '</td>';
            echo '<td> 
            <a class="btn btn-outline-success" href="index.php?module=login&view=detailItem&action=getdetail&id=' . $id . '">Xem</a>
            <a class="btn btn-outline-danger" href="index.php?module=login&view=detailItem&action=delete&id=' . $id . '">Xoá</a>
            </td></tr>';

          }
          ?>
        </tbody>
      </table>
</main>
<?php
include 'partials/footer.php'
?>