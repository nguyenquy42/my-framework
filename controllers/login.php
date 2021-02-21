<?php
/**
 * @author phulv
 * @since 1.0
 * @todo Login Controller
 * @category Controller
 */

class Login
{
    public function __construct()
    {
        
    }

    public function notfound()
    {
        echo "đường dẫn sai! không thể vào login";
        die;
    }
    public function addData()
    {
        include './view/addData.php';
    }

    public function listData()
    {
        include './view' .DS. 'listData.php';
    }
    
    public function index()
    {
        include 'view' .DS. 'login.php';
    }
    // public function dx()
    // {
    //     include include './view/index.php';
    // }

    public function logout()
    {
        include './view/logout.php';
    }

    public function regis()
    {
        include './view/regis.php';
    }

    public function updata()
    {
        include './view/updata.php';
    }

    public function home()
    {
        include './view/index.php';
    }
    

    public function postLogin()
    {
        include "./model/masterData.php";
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $model = new masterData;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = md5($password);
            $sql = "SELECT username, password FROM user WHERE username='$username'";
            if (mysqli_num_rows($model->query($sql)) == 0) {
                $username_error = "Tên đăng nhập không tồn tại !";
                // echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                // exit;
            }
            
            //Lấy mật khẩu trong database ra
            $row = mysqli_fetch_array($model->query($sql));
            // ddd($row);
            //So sánh 2 mật khẩu có trùng khớp hay không
            if ($password != $row['password']) {
                $password_error = "Mật khẩu không đúng.";
        //         echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        // ddd($password_error);die;

                // exit;
            } else {
                //Lưu tên đăng nhập
            $_SESSION['username'] = $username;
            header('Location:index.php/login/listData');
            die();
            }
        }
    }
}

