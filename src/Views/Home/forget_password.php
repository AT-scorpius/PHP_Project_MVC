<?php

 class ketnoi{
     public  $server='localhost';
     public  $user='root';
     public  $pass = '';
     public  $dbname='php_project';
     //public $cn=mysqli_connect('localhost','root','','test');
     public  $cn;
     public function ketnoi()
     {
         $this->cn= mysqli_connect($this->server, $this->user, $this->pass, $this->dbname);
     }
     public function ExcuteQuery($sql)
     {
         $ketqua = mysqli_query($this->cn,$sql);
         return $ketqua;
         
     }}
    
    ?> 