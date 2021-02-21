<?php

class loginModel extends Database
{
    public $connect;
    function loginModel()
    {
        parent::__construct();
    }

    /**
     * xử lý đăng nhập.
     * truyền vào 2 tham số username và password.
     */
    public function login($username, $password)
    {
        $user_tontai = $this->menber($username);
        if ($user_tontai) {
            if ($password == $user_tontai['password']) {
                $_SESSION['username'] = $username;
                header('Location: index.php?module=login&view=listData');
                die();
            } else {
                echo 'sai password';
                $password_error = "Mật khẩu không đúng.";
            }
        } else {
            echo 'Sai teen dang bnhapj';
            $username_err = "Tên đăng nhập không tồn tại !";
        }
        return $user_tontai;
    }
    
    public function menber($username)
    {
        $users = mysqli_query($this->connect, "SELECT username, password FROM member WHERE username='$username'");
        $user = $users->fetch_assoc();
        return $user;
    }

}
