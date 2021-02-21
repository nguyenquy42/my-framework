<?php


include 'interface/model-interface.php';

class masterData extends Database implements ModelInterface
{
    public $connect;
    function masterData()
    {
        parent::__construct();
    }

    public function getDetail($id)
    {
        $article = $this->query("SELECT * FROM news WHERE id=$id");
        return $article;
    }

    public function getdata()
    {
        $users = $this->query("SELECT * FROM article");
        return $users;
    }

    public function getSlug($slug)
    {
        $slugs = $this->query("SELECT * FROM alias where module_slug LIKE '%$slug%'");
        // $slug = $slugs->fetch_row();
        return $slugs;
    }

    public function getArticle()
    {
        $users = $this->query("SELECT * FROM news");
        return $users;
    }
    
    public function getUser($id) 
    {
        $user = $this->query("SELECT * FROM article WHERE id=$id");
        return $user;
    }

    public function getAll()
    {

    }
    public function getOne()
    {

    }

    // function thêm dữ liệu vào DS.
    public function addData($name,$contact,$status)
    {  
        $this->add('article','name, contact, status',"'$name', '$contact','$status'");
         header("location:/learn-php-quy/index.php/login/listData");
    }

    public function addArticle($title,$content,$slug,$author_id,$created_at,$status)
    {  
        $this->add('news','title, content, slug, author_id, created_at, status',"'$title', '$content', '$slug','$author_id', '$created_at', '$status'");
         header("location:/learn-php-quy/index.php/article");
    }

    //Lưu thông tin thành viên vào bảng
    public function addmember($username,$password,$email,$fullname,$birthday,$sex)
    {
        $this->add('member','username,password,email,fullname,birthday,sex',"'$username','$password','$email','$fullname','$birthday','$sex'");
    }

    // public function deleteData($id)
    // {
    //     // $sql ="DELETE FROM article WHERE id=$id";
    //     $this->dalete('article',$id);
    //     header("location:/learn-php-quy/index.php/login/listData");
    // }

    public function upData($name,$contact,$status, $id)
    {
        $this->up('article', "name='$name',contact='$contact',status=$status",$id);
        header("location:/learn-php-quy/index.php/login/listData");
    }

    public function upArticle($title,$content,$author_id,$status, $id)
    {
        $this->up('news', "title='$title',content='$content', author_id='$author_id',status=$status",$id);
        header("location:/learn-php-quy/index.php/article");
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
                echo 'dang nhap thanh cong';
            }
            else {
                echo 'sai password';
            }
        }
        else {
            echo 'Sai teen dang bnhapj';
        }
    }

    public function menber($username)
    {
        $users = mysqli_query($this->connect, "SELECT username, password FROM member WHERE username='$username'");
        $user = $users->fetch_assoc();
        return $user;
    }

}
?>