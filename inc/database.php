<?php
class Database 
{
    public $hostname = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = "learn-php-lpt";
    public $connect;
    public function __construct()
    {
        $connect = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if (!$connect) {
            die('Không thể kết nối: ' . mysqli_error($connect));
            exit();
        }
        $this->connect = $connect;
        return $this;
    }

    
    // function get 
    public function get($result)
    {
        $data = [];
        while ($item = mysqli_fetch_assoc($result)) {
        $data[] = $item;
    }
        return $data;
    }
    
    // hàm query
    public function query($sql)
    {
        $result = mysqli_query($this->connect, $sql);

        if (is_object($result)) {
           return $this->get($result);
        }
        return $result;
    }

    // hàm add dữ liệu
    public function add($nametable,$namecol,$namevalue)
    {
         $this->query("INSERT INTO {$nametable} ($namecol) VALUES ($namevalue)");
    }

    // hàm delete
    public function delete($nameTable,$nameid)
    {
        $this->query("DELETE FROM {$nameTable} WHERE id={$nameid}");
    // $sql ="DELETE FROM article WHERE id=$id";
    }

    // hàm sửa đổi thông tin 
    public function up($tablename,$setname,$idname)
    {
        $this->query("UPDATE {$tablename} SET {$setname} WHERE id={$idname}");
    // $sql = "UPDATE article SET name='$name',contact='$contact',status=$status WHERE id=$id";
    }
}
$b = new Database();