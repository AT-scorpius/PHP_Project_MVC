<?php

class ConnectDataBase{
    public  $server='localhost';
    public  $user='root';
    public  $pass = '';
    public  $dbname='php_project';
    
    public  $connect;

    //Tao constructor
    public function ConnectDataBase()
    {
        $this->cn= mysqli_connect($this->server, $this->user, $this->pass, $this->dbname);
    }

    //ham thuc thuc hien cau lenh truy van
    public function query($sql)
    {
        $result = mysqli_query($this->connect,$sql);
        return $result;
        
    }}
?>
    