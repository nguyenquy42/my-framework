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

  public function getallmenber()
  {
    $users = $this->query("SELECT * FROM `learn-php-lpt`.member;");
    return $users;
  }

  public function getmenber($id)
  {
    $user = $this->query("SELECT * FROM member WHERE id=$id");
    return $user;
  }

  public function addmember($username, $password, $email, $fullname, $birthday, $sex)
  {
    $this->add('member', 'username,password,email,fullname,birthday,sex', "'$username','$password','$email','$fullname','$birthday','$sex'");
  }

  public function upDataMember($username,$email,$fullname,$birthday,$sex,$permission, $id)
  {
    $this->up('member', "username='$username',email='$email',fullname='$fullname',birthday='$birthday',sex='$sex',permission='$permission'", $id);
    header("location:index.php?module=login&view=detailItem&action=getdetail&id=$id");
  }

  
    public function deleteData($id)
    {
        $this->delete('member',$id);
        header("location:index.php?module=login&view=listData");
    }
}
