<!doctype html>
<html lang="en">
  <head>
    <title>Xem Thông Tin Chi Tiết</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
        include '../model/masterData.php';
        $model = new masterData();
        if(!isset($id))
        {
            $id = Request::get(5);
        }
        $a = $model->getDetail($id);
        $in = mysql_fetch_row($a);
    ?>

<div calss="container">
        <div class="row">
            <div class="col-6 m-auto">
                <form method="post">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">SLUG</th>
                                <th scope="col">AUTHOR_ID</th>
                                <th scope="col">CREATED_AT</th>
                                <th scope="col">STATUS</th>
                            </tr>
                        </thead>
                        <?php
                            
                            echo '<tr><td scope="col">'. $in[0].'</td>';
                            echo '<td scope="col">'.$in[1].'</td>';
                            echo '<td scope="col">'.$in[2].'</td>';
                            echo '<td scope="col">'.$in[3].'</td>';
                            echo '<td scope="col">'.$in[4].'</td>';
                            echo '<td scope="col">'.$in[5].'</td>';
                            echo '<td scope="col">'.$in[6].'</td></tr>';
                        ?>
                    </table>
                </form>
            </div>                    
        </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>