<?php

/**
 * @author minhquys
 * @since 1.0
 * @todo Admin Controller
 */
class admin
{
  public $model;
  public function __construct()
  {
    include('./model/AdminModel.php');
    $this->model = new AdminModel();
  }

  public  function index()
  {
    include './view/admin/index.php';
    die;
  }
}
