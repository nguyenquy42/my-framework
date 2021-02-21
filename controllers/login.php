<?php

/**
 * @author minhquys
 * @since 1.0
 * @todo Login Controller
 */

class Login
{
    public $model;

    public function Controller()
    {
        $this->model = new masterData();
    }

    public function index()
    {
        // $this->users = $this->model->login();
        if (!isset($_SESSION)) {
            session_start();
        }
        header('Content-Type: text/html; charset=UTF-8');
        $username_err = $password_error = "";
        if (isset($_POST['login'])) {
            include('./model/loginModel.php');
            $connect = new loginModel();
            $username = addslashes($_POST['txtUsername']);
            $password = addslashes($_POST['txtPassword']);
            $password = md5($password);
            $user = $connect->login($username, $password);
        }
        include 'view' . DS . 'login.php';
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
        include './view' . DS . 'listData.php';
    }


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
}
