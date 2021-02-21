<?php

class Alias
{
    public $model;
    public function __construct()
    {
        require_once 'model/masterData.php';
        $this->model = new MasterData();
    }
    public function getAlias($slug)
    {
        $slug_data = $this->model->getSlug($slug);
        return $slug_data;
    }
}