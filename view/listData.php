<!doctype html>
<html lang="en">
  <head>
    <title>Bảng danh sách data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      
<div class="container">
    <h1>Danh sách hội đồng cấp cao của cty .........</h1>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $request = $_SERVER['REQUEST_URI'];
                    $parse_request = explode("/", $request);
                    // get Request to parse module
                    // $modules = isset($_GET['module']) ? $_GET['module'] : NULL;
                    // $view = isset($_GET['view']) ? $_GET['view'] : 'index';
                    // $modules = $parse_request[3];
                    // $view = $parse_request[4];

                    include 'model/masterData.php';
                    $data = new masterData();
                    $user = $data->getdata();
                    while($in = mysqli_fetch_row($user)) 
                    {
                        $id=$in[0];
                        echo '<tr><td scope-"row">'. $in[0].'</td>';
                        echo '<td>'.$in[1].'</td>';
                        echo '<td>'.$in[2].'</td>';
                        echo '<td>'.$in[3].'</td>';
                        echo '<td> 
                        <a href="/learn-php-quy/index.php/login/updata/'.$id.'">Sửa</a>
                        <a href="/learn-php-quy/index.php/login/listData/delete/'.$id.'">Xóa</a>
                        </td></tr>';
                    }
                    if (isset($parse_request[4])) 
                    {
                        // qqq($_GET['action']);
                        $id =  $parse_request[5];
                        $action =  $parse_request[4];
                        if ($action=='delete')
                        {
                            $data->deleteData($id);   
                        }
                    }
                ?>
            </tbody>
        </table>

        <?php   echo $username_author; ?>
        <!-- <a href="addUser.php"><i class="fa fa-plus-circle"></i> </a> -->
        <button onclick="location.href='/learn-php-quy/index.php/login/addData'" name="button" class="btn btn-success pull-right addmember">
        <i class="fa fa-plus-circle"></i>
        </button>
        <button onclick="location.href='/learn-php-quy/index.php/login/login'" name="button" class="btn btn-success pull-right addmember">
        <i class="fa fa-sign-in" aria-hidden="true"></i>
        </button>
        <button onclick="location.href='/learn-php-quy/index.php/login/regis'" name="button" class="btn btn-success pull-right addmember">
        <i class="fa fa-id-card-o" aria-hidden="true"></i>
        </button>
        <button onclick="location.href='/my-framework/index.php?module=login&view=logout'" name="button" class="btn btn-success pull-right addmember">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
        </button>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>