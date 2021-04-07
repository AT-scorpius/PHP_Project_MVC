<?php
include '../../Models/product.php';
$pro = new Product();
$arr = "";
$b = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- display -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <?php
        $arr = $pro->GetListProduct();
        // $connect = mysqli_connect("localhost", "root", "", "php_project");
        // $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page']:4;
        // $current_page = !empty($_GET['page']) ? $_GET['page']:1;
        // $offset = ($current_page - 1)*$item_per_page;
        // $pro = mysqli_query($connect, 'SELECT * FROM product ORDER BY id_product ASC LiMIT ".$item_per_page." OFFSET ".$offset."');
        // $total = mysqli_query($connect, 'SELECT * FROM product');
        // $total = $total->nume_rows;
        // $totalPage = ceil($total/$item_per_page); 

    ?>
    <div class="container">
        <div class="product-items" >
            <?php
                while ($row = mysqli_fetch_assoc($arr)) {
                    ?>
                    <div  id='item' class='item  col-xs-3 col-lg-3' style="height: 400px">
                                <div class='thumbnail'> <img id='img' class='group list-group-image' src="<?=$row['image1']?>" width="300px"></div>
                                    <div class='caption' width="100px"> 
                                        <div class='row56' id='bottom1' >
                                            <h4 class='group inner list-group-item-heading' style="text-align:center "><?= $row['name_product']?></h4>
                                            <p class='group inner list-group-item-text' style='color:pink; text-align:center;font-size:22px'> <?=number_format($row['price'],0,",",".")?>đ</p>
                                        </div>
                                                <div class='row' id='bottom'>
                                                    <div class='col-xs-12 col-md-6' style="border: 2px solid white; border-radius: 2px; background: white; ">
                                                        <a class='btn btn-success'
                                                        href="cart.php?ma_id=<?=$row['id_product']?> ">Add to cart</a>
                                                        <!-- <p class='lead' style='text-align: center'> <?=$row['like_product']?><i class='fa fa-heart' style='color:pink'></i></p> -->
                                                    </div>                                                         
                                                    <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                                        href='detail.php?ma_id=<?=$row['id_product']?> style="border: 2px solid oranged" '>Detail</a>
                                                    </div>
                                                </div>
                                    </div>
                                
                    </div>
                                
               <?php 
               }
            ?>
        </div>
    </div>
</body>
</html>