<?php 
require 'connect.php';
class Product 
{
    public function product()
    {
    }
    //list hết sản phẩm
    public function GetListProduct()
    {
        $connect = new ConnectDataBase();
        $sql='SELECT * FROM product INNER JOIN product_size 
            ON product.id_product = product_size.id_product where product_size.id_size = 1';
        return $connect->query($sql);
    } 
    public function GetOneListProduct($sqlk)
    {
        $connect = new ConnectDataBase();
        $sql="select * from product WHERE id_product = '$sqlk'" ;
        return $connect->query($sql);
    } 
    //list hết Trâu bông
    public function GetListBuffalo()
    {
        $connect = new ConnectDataBase();
        $sql='SELECT * FROM product INNER JOIN product_size 
            ON product.id_product = product_size.id_product 
            WHERE id_type_product= 1';
        return $connect->query($sql);
    }
     //list hết Gấu bông
     public function GetListTeddy()
     {
         $connect = new ConnectDataBase();
            $sql='SELECT product.image1, product.like_product, product.name_product, product.id_product, product_size.price  
                FROM product INNER JOIN product_size 
                ON product.id_product = product_size.id_product 
                WHERE id_type_product= 2 and product_size.id_size = 1';
         return $connect->query($sql);
     }
     //list hết Mèo bông 
    public function GetListCat()
    {
        $connect = new ConnectDataBase();
        $sql='SELECT * FROM product INNER JOIN product_size 
            ON product.id_product = product_size.id_product 
            WHERE id_type_product= 3';
        return $connect->query($sql);
    }
     //list hết Doreamon bông
    public function GetListDoreamon()
    {
        $connect = new ConnectDataBase();
        $sql='SELECT * FROM product INNER JOIN product_size 
            ON product.id_product = product_size.id_product 
            WHERE id_type_product= 4';
        return $connect->query($sql);

    } 


    // list hết Gà bông
    public function GetListChicken()
    {
        $connect = new ConnectDataBase();
        $sql='select * from dish where id_type_product = ';
        return $connect->query($sql);
    }
    //  list hết các Chó bông
    public function GetListDog()
    {
        $connect = new ConnectDataBase();
        $sql='select * from dish where id_type_product= 6';
        return $connect->query($sql);
    }

     // tìm kiếm theo tên
     public function SearchListProduct($search)
     {
        $connect = new ConnectDataBase();
        $sql='SELECT * FROM product
             WHERE name_product LIKE '%$search%'';
        return $connect->query($sql);
     }
}
    ?>