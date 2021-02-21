<!doctype html>
<html lang="en">
  <head>
    <title>Danh Sách Bảng tin tức </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div style="text-align: center;"><h1>Danh sách các bài viết</h1></div>
    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                <table class="table">
                    <thead>
                        <td scope="col">stt</td>
                        <td scope="col">nội dung</td>
                        <td scope="col">xem chi tiết</td>
                    </thead>
                    <tbody>
                        <?php
                            qqq($id);
                            $request = $_SERVER['REQUEST_URI'];
                            $parse_request = explode("/", $request);

                            include 'model/masterData.php';
                            $data = new masterData();
                            $user = $data->getArticle();
                            while($in = mysql_fetch_row($user)) 
                            {
                                $id=$in[0];
                                echo '<tr><td scope-"row">'. $in[0].'</td>';
                                echo '<td>'.$in[1].'</td>';
                                echo '<td> 
                                <a href="/learn-php-quy/index.php/article/detail/'.$id.'">Xem</a>
                                <a href="/learn-php-quy/index.php/article/uparticle/'.$id.'">Sửa</a>
                                </td></tr>';
                            }
                        ?>
                    </tbody>    
                </table>
                <button onclick="location.href='/learn-php-quy/index.php/article/addarticle'" name="button" class="btn btn-info pull-right addmember">Thêm bài viết</button>
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