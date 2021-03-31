<?php

class ConnectDataBase{
    public $databasename;
    public $connect;

    //Tao constructor
    function ConnectDataBase($databasename){
        $this->databasename= $databasename;
        $this->connect= mysqli_connect('localhost', 'root', '', $this->databasename);
    }

    //ham thuc thuc hien cau lenh truy van
    public function query($sql){
       
        $result = mysqli_query($this->connect, $sql);
        return $result;
    }

}
?>
    