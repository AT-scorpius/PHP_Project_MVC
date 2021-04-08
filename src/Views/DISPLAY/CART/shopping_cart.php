<?php
include '../../../Models/connet.php';
if(isset($_REQUEST['id_product']) and $_REQUEST['id_product']!=""){
$id=$_GET['id_product'];
$connect = new ConnectDataBase();
$sql= "SELECT * FROM product where id_product = $id";
$result = $connect->query($sql);
    while($row = $result->fetch_array()){      
       $add="INSERT INTO `shopping_cart`(id_cart, Cart_name, Cart_img, Cart_price, Cart_material, Cart_role) SELECT * FROM `dish` where D_id=$id";
       $connect->query($add);
    }
    header("Location: http://localhost/shopping_cart/menu_new.php");
}
?>