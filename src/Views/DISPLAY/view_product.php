<?php
// require '../Views/HienThi/view_product.php';
include '../../Models/product.php';
// include '../Hienthi/Models/product.php';
$pro = new Product();
$arr = "";
$b = ''; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Bán gấu bông</title>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="menu.css"> -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"> -->

    <!-- slide -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->

    <!-- display -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>


<body>
    <!-- menu -->
    <div class="header" id="header-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-content">
            <div class="container">
                <!-- <div class="logo-shop">
                    <a href="#">
                        <div><img src="../image/logo.png" /></div>
                        <div><span>Ôm là yêu</span></div>
                    </a>
                </div> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#title-All-Pr">Product</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                Other
                            </a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="../../Service/dichvu-tintuc/dichvu.html">Service</a>
                                <a class="dropdown-item" href="../../Service/dichvu-tintuc/tintuc.html">News</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <div class="form-inline my-2 my-lg-0">
                        <form action="" method="post">
                            <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" >
                            <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="Ok"></input>
                        </form>
                           
                        </div>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        &nbsp;
                        <li class="button-account">
                            <a href="" style="font-size: 100%;color: rgb(100, 100, 216);"> <i class="fa fa-home" style="color: orangered;padding-right: 5px;"></i>Đăng kí</a>
                        </li>
                        &nbsp; &nbsp;&nbsp;
                        <li class="button-account">
                            <a href="" style="font-size: 100%;color: rgb(100, 100, 216);"><i class="fa fa-user" style="color: orangered;padding-right: 5px;"></i>Đăng nhập</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- end menu -->


    <hr style="background-color: #e68376;height: 2px;">


    <!-- display products -->
    <form action="" method="post">
        <div class="container-fluid ">
            <div id="menu-ngag">
                <ul class="nav nav-pills justify-content-center flex-column flex-md-row center" id="myPill" role="tablist">
                    <li class="nav-item active ">
                        <button type="submit" class=" btn btn-secondary btn-block" name="buffalo"> Buffalo</button>
                    </li>

                    <li class="nav-item nav-link">

                        <button type="submit" class="  btn btn-secondary btn-block" name="cat"> Cat</button>


                    </li>
                    <li class="nav-item nav-link ">

                        <button type="submit" class="nav-link  btn btn-secondary btn-block " name="tabteddy2"> Teddy </button>

                    </li>
                    <li class="nav-item nav-link">
                        <button type="submit" class="  btn btn-secondary btn-block" name="doreamon"> Doreamon</button>
                    </li>
                    <li class="nav-item nav-link">
                        <button type="submit" class="  btn btn-secondary btn-block" name="chicken"> Chicken </button>
                    </li>
                    <li class="nav-item nav-link">
                        <button type="submit" class="  btn btn-secondary btn-block" name="dog">Dog</button>
                    </li>

                </ul>

                
            </div>
            <!-- hiển thị -->
            <?php
            if (isset($_POST['buffalo'])) {
                $arr = $pro->GetListBuffalo();
            } else {
                if (isset($_POST['teddy'])) {
                    $arr = $pro->GetListTeddy();
                } else {
                    if (isset($_POST['cat'])) {
                        $arr = $pro->GetListCat();
                    } else {
                        if (isset($_POST['doreamon'])) {
                            $arr = $pro->GetListDoreamon();
                        } else {
                            if (isset($_POST['chicken'])) {
                                $arr = $pro->GetListChicken();
                            } else {
                                if (isset($_POST['dog'])) {
                                    $arr = $pro->GetListDog();
                                }
                            }
                        }
                    }
                }
            }

            if ($arr != "") {
                $item = "<div class='container-fluid'><div id='products' class='row list-group'>";
                foreach ($arr as $key => $row) {
                    $item = "<div class='container-fluid'><div id='products' class='row list-group'>";
                    foreach ($arr as $key => $row) {
                        $show = (string) "<div  id='item' class='item  col-xs-3 col-lg-3'>
                                <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['image1']}' width='300'>
                                <div class='caption'> 
                                    <div class='row56' id='bottom1'>
                                        <h4 class='group inner list-group-item-heading' style='text-align:center'>{$row['name_product']}</h4>
                                        <p class='group inner list-group-item-text' style='color:pink; text-align:center;font-size:22px'> {$row['price']}đ</p>
                                        </div>
                                        <div class='row' id='bottom'>
                                            <div class='col-xs-12 col-md-6'>
                                                <p class='lead' style='text-align: center'> {$row['like_product']}<i class='fa fa-heart' style='color:pink'></i></p>
                                            </div>                                                         
                                            <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                                href='edit.php?ma_id={$row['id_product']}' style='background:pink; border: 2px solid pink'>Xem chi tiết</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>";

                        $item .= $show;
                    }
                    $item .= "</div></div>";
                    echo $item;
                }
            } else {
                $arr = $pro->GetListBuffalo();
                $item = "<div class='container-fluid'><div id='products' class='row list-group'>";
                foreach ($arr as $key => $row) {
                    $show = (string)  "<div  id='item' class='item  col-xs-3 col-lg-3'>
                                                        <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['image1']}' width='300'>
                                                            <div class='caption'> 
                                                                <div class='row56' id='bottom1'>
                                                                    <h4 class='group inner list-group-item-heading' style='text-align:center'>{$row['name_product']}</h4>
                                                                    <p class='group inner list-group-item-text' style='color:black; text-align:center;font-size:22px'> {$row['price']}đ</p>
                                                                    </div>
                                                                    <div class='row' id='bottom'>
                                                                        <div class='col-xs-12 col-md-6'>
                                                                            <p class='lead' style='text-align: center'> {$row['like_product']}<i class='fa fa-heart' style='color:#f7544a'></i></p>
                                                                        </div>                                                         
                                                                        <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                                                            href='edit.php?ma_id={$row['id_product']}' style='background:#f7544a'>Xem chi tiết</a>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>";

                    $item .= $show;
                }
                $item .= "</div></div>";
                echo $item;
            }
            ?>

        <!-- tìm kiếm theo tên -->
        <?php
                if (isset($_POST(['Ok']))) {
                    $search = $_POST['search'];
                    // if (empty($search)) {
                    //     echo "<p style='color:blue'>Hãy nhập thông tin bạn muốn tìm vào ô 'search' nhé !</p>";
                    // } else {
                        $arr = $pro->SearchListProduct($search);
                        // $num = mysql_num_rows($arr);
                        if (mysqli_num_rows($arr) > 0 ) {

                            // Dùng $num để đếm số dòng trả về.
                            // echo "Có $num sản phẩm <b>$search</b> trong gian hàng @@";

                            $item = "<div class='container-fluid'><div id='products' class='row list-group'>";
                            foreach ($arr as $key => $row) {
                                $show = (string) "<div  id='item' class='item  col-xs-3 col-lg-3'>
                                                <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['image1']}'
                                                width='300'>
                                                    <div class='caption'> 
                                                        <div class='row56' id='bottom1'>
                                                            <h4 class='group inner list-group-item-heading'>  {$row['name_product']}</h4>
                                                            <p class='group inner list-group-item-text'> {$row['like_product']} <i class='fa fa-heart'></i></p>
                                                        </div>
                                                    <div class='row' id='bottom'>
                                                                <div class='col-xs-12 col-md-6'>
                                                                    <p class='lead'> {$row['price']}đ</p>
                                                                    </div>
                                                                    
                                                                <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                                                href='edit.php?ma_id={$row['id_product']}'>Chi tiết</a>
                                                                    </div>
                                                                    
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>";

                                $item .= $show;
                            }
                            $item .= "</div></div>";
                            echo $item;
                        } else {
                            echo "Không tìm thấy kết quả!";
                        }
                    }
               
                ?>
        </div>

</body>

</html>