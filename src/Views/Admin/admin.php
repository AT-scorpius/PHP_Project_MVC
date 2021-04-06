<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Theme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/user-product-manage.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color: rgb(226, 29, 167);">ADMIN HOME PAGE</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Top Navigation: Left Menu -->
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="../../HomePage/Home/TrangChu.html"><i class="fa fa-home fa-fw"></i> Website</a></li>
            </ul>

            <!-- Top Navigation: Right Menu -->
            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <!-- Notice -->
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> 2 new comments from Tuan Pham
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See more</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">


                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Functions Manage<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">


                                    </div>
                                    <a href="product_manage_view.php"> <i class="fa fa-dashboard fa-fw">
                                        </i>Product Management</a>

                                </li>
                                <li>
                                    <a href="user_manage_view.php"><i class="fa fa-dashboard fa-fw">
                                        </i>User Management</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper" style="background-image: url('image/b-g.jpg'); background-repeat: no-repeat;">
            <h1 style="color: blue; text-align: center;">Welcome To Admin Home Page</h1>



            <div class="show-product">
                <div class="header">
                    <h1 style=" color: rgb(224, 73, 99); text-align: center;">Show Product</h1>
                </div>

                <div class="form-search">
                    <nav class="navbar navbar-light ">
                        <form class="form-inline" method="POST">
                            <div class="form-group">
                                <input class="form-control mr-sm-2" type="text" placeholder="Enter product's name..." aria-label="Search" name="search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn_search">Search</button>
                            </div>

                            <button class="btn-home"><i class="fas fa-home"></i> <a href="admin.php">Home</a></button>

                            <button class="btn-home"><i class="fas fa-home"></i> <a onclick="location.reload();">reload</a></button>

                        </form>

                    </nav>
                    <p class="message" id="error_search"></p>

                </div>
                <!-- Modal -->
                <div class="content">
                    <!-- Button trigger modal -->
                    <table class="table table-striped show_user">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name's Product</th>
                                <th>Type</th>
                                <th>Image 1</th>
                                <th>Image 2</th>
                                <th>Image 3</th>
                                <th>Sale</th>
                                <th>Like</th>
                        </thead>

                        <tbody>
                            <?php

                            require_once '../../Models/connect.php';
                            require_once '../../Controller/Admin/funtions_admin.php';
                            $GLOBALS['connect']  = new ConnectDataBase();
                            //Lấy số lượng danh Sách 
                            $query = "select count(id_product) as total from PRODUCT";
                            $result =  $GLOBALS['connect']->query($query);
                            $row = mysqli_fetch_assoc($result);
                            $total_records = $row['total'];


                            // TÌM LIMIT VÀ CURRENT_PAGE
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $limit = 10;

                            // TÍNH TOÁN TOTAL_PAGE VÀ START
                            // tổng số trang
                            $total_page = ceil($total_records / $limit);

                            // Giới hạn current_page trong khoảng 1 đến total_page
                            if ($current_page > $total_page) {
                                $current_page = $total_page;
                            } else if ($current_page < 1) {
                                $current_page = 1;
                            }

                            // Tìm Start
                            $start = ($current_page - 1) * $limit;

                            // TRUY VẤN LẤY DANH SÁCH 
                            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
                            $result = $GLOBALS['connect']->query("SELECT * FROM PRODUCT LIMIT $start, $limit");

                            if (isset($_POST['btn_search'])) {

                                if ($_POST['search'] == '') {
                                    echo "<script>documenment.getEletById('error_search').innerHTML='Please fill here to search!'</script>";
                                } else {
                                    $key = $_POST['search'];
                                    $result = searchProduct($key);
                                    if (mysqli_num_rows($result) == 0) {
                                        $total_records = mysqli_num_rows($result);
                                        $total_page = ceil($total_records / $limit);
                                        echo "<script>document.getElementById('error_search').innerHTML='No results found!'</script>";
                                    } else {
                                        $total_records = mysqli_num_rows($result);
                                        $total_page = ceil($total_records / $limit);
                                    }
                                }
                            }
                            while ($product = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php $id_pr = $product['id_product'];
                                        echo $product['id_product'] ?></td>
                                    <td><strong><?php echo $product['name_product'] ?></strong></td>
                                    <td><?php
                                        $query = 'select name_type from TYPE_PRODUCT where ' . $product['id_type_product'] . '= id_type_product';
                                        $name_type = $GLOBALS['connect']->query($query);
                                        $name_type =  mysqli_fetch_assoc($name_type);
                                        echo $name_type['name_type'] ?></td>
                                    <td><?php echo "<img class='mini-img' src= " . $product['image1'] . " alt=''> " ?></td>
                                    <td><?php echo "<img class='mini-img' src= " . $product['image2'] . " alt=''> " ?></td>
                                    <td><?php echo "<img class='mini-img' src= " . $product['image3'] . " alt=''> " ?></td>
                                    <td><?php echo $product['sale'] ?> %</td>
                                    <td><?php echo $product['like_product'] ?></td>
                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>

                    </table>
                    <!-- Phân trang -->
                    <div class="pagination">
                        <?php
                        // PHẦN HIỂN THỊ PHÂN TRANG
                        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                        if ($current_page > 1 && $total_page > 1) {
                            echo '  <a class="click-page" href="product_manage_view.php?page=' . ($current_page - 1) . '"> < Prev </a> ';
                        }

                        // Lặp khoảng giữa
                        for ($i = 1; $i <= $total_page; $i++) {
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $current_page) {
                                echo '<span class="current-page" >' . $i . '</span> ';
                            } else {
                                echo '<a class="click-page"  href="product_manage_view.php?page=' . $i . '">' . $i . '</a>  ';
                            }
                        }

                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                        if ($current_page < $total_page && $total_page > 1) {
                            echo '<a class="click-page"  href="product_manage_view.php?page=' . ($current_page + 1) . '">Next ></a>  ';
                        }
                        ?>
                    </div>
                </div>

            </div>
            <hr>
            <div class="show-user">
                <div class="header">
                    <h1 style="text-align: center; color: rgb(224, 73, 99); text-align: center;">Show Account </h1>
                </div>

                <div class="form-search">
                    <nav class="navbar navbar-light ">
                        <form class="form-inline" method="POST">
                            <input class="form-control mr-sm-2" type="text" placeholder="Enter product's name..." aria-label="Search" name="search_product">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn_search_product">Search</button>
                            <button class="btn-home"><i class="fas fa-home"></i> <a href="admin.php">Home</a></button>
                        </form>

                    </nav>
                    <p class="message" id="error_search_product"></p>
                </div>
                <div class="list-manage">
                </div>

                <div class="content">
                    <table class="table table-striped show_user">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Login Name</th>
                                <th>Full Name</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Balance</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php


                            //Lấy số lượng danh Sách 
                            $query = "select count(id_user) as total from USERS";
                            $result =  $GLOBALS['connect']->query($query);
                            $row = mysqli_fetch_assoc($result);
                            $total_records = $row['total'];


                            // TÌM LIMIT VÀ CURRENT_PAGE
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $limit = 10;

                            // TÍNH TOÁN TOTAL_PAGE VÀ START
                            // tổng số trang
                            $total_page = ceil($total_records / $limit);

                            // Giới hạn current_page trong khoảng 1 đến total_page
                            if ($current_page > $total_page) {
                                $current_page = $total_page;
                            } else if ($current_page < 1) {
                                $current_page = 1;
                            }

                            // Tìm Start
                            $start = ($current_page - 1) * $limit;

                            // TRUY VẤN LẤY DANH SÁCH 
                            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
                            $result = $GLOBALS['connect']->query("SELECT * FROM USERS LIMIT $start, $limit");

                            if (isset($_POST['btn_search_product'])) {

                                if ($_POST['search_product'] == '') {
                                    echo "<script>document.getElementById('error_search_product').innerHTML='Please fill here to search!'</script>";
                                } else {
                                    $key = $_POST['search_product'];
                                    $result = searchUserName($key);
                                    if (mysqli_num_rows($result) == 0) {
                                        echo "<script>document.getElementById('error_search_product').innerHTML='No results found!'</script>";
                                        $total_records = mysqli_num_rows($result);
                                        $total_page = ceil($total_records / $limit);
                                    } else {
                                        $total_records = mysqli_num_rows($result);
                                        $total_page = ceil($total_records / $limit);
                                    }
                                }
                            }
                            while ($users = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php $id_user = $users['id_user'];
                                        echo $users['id_user'] ?></td>
                                    <td><strong><?php echo $users['user_name'] ?></strong></td>
                                    <td><?php
                                        echo $users['full_name']
                                        ?></td>
                                    <td><?php echo $users['passwords']  ?></td>
                                    <td><?php echo $users['email']  ?></td>
                                    <td><?php echo $users['phone']  ?></td>
                                    <td><?php echo $users['address']  ?></td>
                                    <td><?php echo $users['balance']  ?></td>
                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>

                    </table>
                    <?php

                    ?>
                    <!-- Phân trang -->
                    <div class="pagination">
                        <?php
                        // PHẦN HIỂN THỊ PHÂN TRANG
                        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                        if ($current_page > 1 && $total_page > 1) {
                            echo '  <a class="click-page" href="user_manage_view.php?page=' . ($current_page - 1) . '"> < Prev </a> ';
                        }

                        // Lặp khoảng giữa
                        for ($i = 1; $i <= $total_page; $i++) {
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $current_page) {
                                echo '<span class="current-page" >' . $i . '</span> ';
                            } else {
                                echo '<a class="click-page"  href="user_manage_view.php?page=' . $i . '">' . $i . '</a>  ';
                            }
                        }

                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                        if ($current_page < $total_page && $total_page > 1) {
                            echo '<a class="click-page"  href="user_manage_view.php?page=' . ($current_page + 1) . '">Next ></a>  ';
                        }
                        ?>
                    </div>
              
                </div>
            </div>

        </div>

    </div>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <script src="js/view_admin.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>

</body>

</html>