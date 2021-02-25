<?php
class loginModel extends Database
{
  public $connect;
  function loginModel()
  {
    parent::__construct();
  }

  public function login($username, $password)
  {
    $user_tontai = $this->menber($username);

    if ($user_tontai) {
      if ($password == $user_tontai['password']) {
        $_SESSION['username'] = $user_tontai['fullname'];
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
    $users = mysqli_query($this->connect, "SELECT username, password, fullname FROM member WHERE username='$username'");
    $user = $users->fetch_assoc();
    return $user;
  }


  //Lưu thông tin thành viên vào bảng
  public function addmember($username, $password, $email, $fullname, $birthday, $sex)
  {
    $this->add('member', 'username,password,email,fullname,birthday,sex', "'$username','$password','$email','$fullname','$birthday','$sex'");
  }
}
