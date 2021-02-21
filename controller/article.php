<?php
/**
 * @author phulv
 * @since 1.0
 * @todo Login Controller
 * @category Controller
 */
    class Article
    {
        public function __construct()
        {
            # code...
        }
        public  function index()
        {
            include './view' .DS. 'article.php';
            die;
        }
        public  function detail($id = '')
        {
            include './view/detail.php';
            die;
        }
        public function addarticle()
        {
            include './view/addarticle.php';
            die;
        }
        public function uparticle()
        {
            include './view/uparticle.php';
            die;
        }

    }


?>