<!doctype html>
<html lang="en">
  <head>
    <title>Thêm Bài Viết</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>


  <body>
      <div calss="container">
        <div class="row">
            <div class="col-6 m-auto">
                <form method="post">
                    <div class="form-group">
                        <label>TITLE</label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    <div class="form-group">
                        <label>CONTENT</label>
                        <input type="text" class="form-control" name="content" />
                    </div>
                    <div class="form-group">
                        <label>AUTHOR_ID</label>
                        <input type="text" class="form-control" name="author_id" />
                    </div>
                    <div class="form-group">
                        <label>STATUS</label>
                        <input type="text" class="form-control" name="status" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>                    
        </div>
        </div>
      </div>

    <?php

        include 'model/masterData.php';
        $model = new masterData();
        
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            // kiểm tra sự tồn tại của biến và khởi tạo biến.
            if(isset($_POST["title"])) 
            { 
                $title = $_POST['title']; 
            }

            // kiểm tra sự tồn tại của biến và khởi tạo biến.
            if(isset($_POST["content"])) 
            { 
                $content = $_POST['content']; 
            }

            // kiểm tra sự tồn tại của biến và khởi tạo biến.
            if(isset($_POST["author_id"])) 
            { 
                $author_id = $_POST['author_id']; 
            }

            // kiểm tra sự tồn tại của biến và khởi tạo biến.
            if(isset($_POST["status"])) {
                $status = $_POST['status'];
            }
            // Sau khi tất cả dữ liệu đã tồn tại thì gọi function addUser để thêm dữ liệu vào DB.
            $slug = $model->make_slug($title);
            $model->addArticle($title,$content,$slug,$author_id,$status);

        }

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>