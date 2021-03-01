<?php

/**
 * @author minhquys
 * @since 1.0
 * @todo Login Controller
 */

class Login
{
  public $model;

  public function __construct()
  {
    include('./model/loginModel.php');
    $this->model = new loginModel();
  }

  public function index()
  {
    if (!isset($_SESSION)) {
      session_start();
    }
    header('Content-Type: text/html; charset=UTF-8');
    $username_err = $password_error = "";
    if (isset($_POST['login'])) {
      $username = addslashes($_POST['txtUsername']);
      $password = addslashes($_POST['txtPassword']);
      $password = md5($password);
      $user = $this->model->login($username, $password);
    }
    include 'view' . DS . 'login.php';
  }

  public function notfound()
  {
    echo "đường dẫn sai! không thể vào login";
    die;
  }
  
  public function listData()
  {

    if (isset($_GET['action'])) {
      $id = $_GET['id'];
      $action =  $_GET['action'];
      if ($action == 'delete') {
        $this->model->deleteData($id);
      }
    }

    $this->users = $this->model->getallmenber();
    include './view' . DS . 'listData.php';
  }


  public  function detailItem($id = '')
  {
    if (isset($_GET['action'])) {
      $id = $_GET['id'];
      $action = $_GET['action'];
      if ($action == 'getdetail') {
        $this->user = $this->model->getmenber($id);
      }
    }
    include './view/detailMember.php';
    die;
  }

  public function addData()
  {
    include './view/addData.php';
  }


  public function logout()
  {
    include './view/logout.php';
  }

  public function regis()
  {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["username"])) {
        $username = $_POST['username'];
      }

      if (isset($_POST["password"])) {
        $password = $_POST['password'];
        $password = md5($password);
      }

      if (isset($_POST["email"])) {
        $email = $_POST['email'];
      }

      if (isset($_POST["fullname"])) {
        $fullname = $_POST['fullname'];
      }

      if (isset($_POST["birthday"])) {
        $birthday = $_POST['birthday'];
      }

      if (isset($_POST["sex"])) {
        $sex = $_POST['sex'];
      }
      $this->model->addmember($username, $password, $email, $fullname, $birthday, $sex);
    }
    include './view/regis.php';
  }

  public function updata($id = '')
  {
    if (isset($_GET['action'])) {
      $id = $_GET['id'];
      $action = $_GET['action'];
      if ($action == 'update') {
        $this->user = $this->model->getmenber($id);
      }
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (isset($_POST["username"])) {
        $username = $_POST['username'];
      }

      if (isset($_POST["email"])) {
        $email = $_POST['email'];
      }

      if (isset($_POST["fullname"])) {
        $fullname = $_POST['fullname'];
      }

      if (isset($_POST["birthday"])) {
        $birthday = $_POST['birthday'];
      }

      if (isset($_POST["sex"])) {
        $sex = $_POST['sex'];
      }

      if (isset($_POST["permission"])) {
        $permission = $_POST['permission'];
      }

      $this->model->upDataMember($username, $email, $fullname, $birthday, $sex, $permission, $id);
    }
    include './view/updataMember.php';
  }

  public function home()
  {

    include './view/index.php';
  }
}
