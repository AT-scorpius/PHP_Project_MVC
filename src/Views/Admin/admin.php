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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li> -->

                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Functions Manage<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-dashboard fa-fw" onclick="showProduct()">
                                        </i>Product Management</a></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-dashboard fa-fw" onclick="showUser()">
                                        </i>User Management</a>
                                    <!-- <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul> -->
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <h1 style="color: blue; text-align: center;">Welcome To Admin Home Page</h1>
            <div class="product-manage" id="show-product">
                <div class="container">
                    <div id="layoutSidenav_content">
                        <div class="product">
                            <h2 style="text-align: center; color: rgb(224, 73, 99); text-align: center;">Product Management
                        </div>
                        <br><br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Create
                        </button>

                        <br><br>
                        <table class="table">
                            <thead class="thead-light text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                    <th>Image 3</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="product-admin">
                                <!-- Đổ Dữ Liệu -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLable1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-row" method="POST" enctype="multipart/form-data">
                                    <!-- <div class="col-12">
                                <input class="form-control" type="text" id="id" placehoder="Id">
                            </div> -->
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="type_product" placeholder="Enter Type">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="name_product" placeholder="Enter Name">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <label for="">Upload image-1 of product </label>
                                        <input class="form-control" type="file" name="img_1_upload" placeholder="Enter link 1">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <label for="">Upload image-2 of product </label>
                                        <input class="form-control" type="file" name="img_2_upload" placeholder="Enter link 2">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <label for="">Upload image-3 of product </label>
                                        <input class="form-control" type="file" name="img_3_upload" placeholder="Enter link 3">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="size_product" placeholder="Enter size">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="quantity" placeholder="Enter number of products remaining...">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="price" placeholder="Enter Price">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="decription" placeholder="Desciption">
                                    </div>
                                    <br>
                                    <button class="btn btn-outline-danger mt-3" name="add_product">Add Product</button>
                                    <br>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--modal Update-->
                <div class="modal fade" id="updateProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLable1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-row">
                                    <!-- <div class="col-12">
                                <input class="form-control" type="text" id="id" placehoder="id">
                            </div> -->
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="typed" placeholder="Enter Type">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="named" placeholder="Enter Name">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="img-product-1" placeholder="Enter link 1">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="img-product-2" placeholder="Enter link 2">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="img-product-3" placeholder="Enter link 3">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="size" placeholder="Enter size 1">
                                    </div>


                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="number" id="price" placeholder="Price (VNĐ)">
                                    </div>

                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="status" placeholder="Status">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="commentd" placeholder="Comment 1">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="commentd2" placeholder="Comment 2">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" id="commentd3" placeholder="Comment 3">
                                    </div>
                                    <button class="btn btn-outline-danger mt-3" href="" onclick="updateProduct()">Update
                                        product</button>
                                </form>
                                <div id="UpdateProduct"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Manage Page -->
            <div class="user-manage" id="show-user" style="display: none;">
                <div class="container">
                    <div id="layoutSidenav_content">
                        <div>
                            <div>
                                <h2 style="color: rgb(231, 71, 98); text-align: center;">Account Management</h2>
                            </div>

                            <!-- <button class="go-ad-home"><a href="admin.html"><i class="fa fa-home fa-fw"></i> Admin Home
                                    Page</a></button> -->
                            <br><br>
                            <table class="table table-striped table-sm">
                                <thead class="thead-light text-left">
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-left" id="user-manager">
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Create User Start -->
                    <div class="modal" id="createUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLable" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <button type="button" class="close text-right" data-dismiss="modal"><span aria-hidden="true">&times;</span></button> -->
                                    <div class="modal-body">
                                        <form class="form-row" name="frm">
                                            <div class="modal-title" id="exampleModalLable">
                                                <h3>Add User</h3>
                                            </div>
                                            <hr>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="text" id="fullname" placeholder="Enter Full Name">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="text" id="firstname" placeholder="Enter First Name">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="text" id="lastname" placeholder="Enter Last Name">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="text" id="username" placeholder="Enter Username">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="text" id="password" placeholder="Enter Username">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="number" id="phone" placeholder="Enter Phone Number">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="email" id="email" placeholder="Enter Email">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="text" id="gender" placeholder="Enter your gender">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="text" id="dateofbirth" placeholder="Enter your date of birth">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <input class="form-control" type="text" id="address" placeholder="Enter Address">
                                            </div>
                                    </div>
                                    <button type="button" class="btn-success mt-3 add" onclick="push_data()">Add
                                        Admin</button> &nbsp;
                                    <button type="button" class="btn-secondary mt-3 btn" data-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Create User End -->

                <!-- Update User Start -->
                <div class="modal" id="updateUser">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-body">
                                    <form class="form-row" name="frm">
                                        <h4 class="modal-title">
                                            Update User
                                        </h4>
                                        <hr>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="text" id="fullnamed" placeholder="Enter Full Name">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="text" id="firstnamed" placeholder="Enter First Name">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="text" id="lastnamed" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="text" id="usernamed" placeholder="Enter Username">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="text" id="passwordd" placeholder="Enter Username">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="number" id="phoned" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="email" id="emaild" placeholder="Enter Email">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="text" id="sexd" placeholder="Enter your sex">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="text" id="dateofbirthd" placeholder="Enter your date of birth">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input class="form-control" type="text" id="addressd" placeholder="Enter Address">
                                        </div>
                                </div>
                                <button type="button" class="btn-success mt-3 add1" onclick="updateAdmin()">Update</button> &nbsp;
                                <button type="button" class="btn btn-secondary mt-3 btn" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Update User End -->

            <!-- Confirm Delete User Start-->
            <div class="modal" id="deleteUser">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header form-inline">
                            <h4 class="modal-title">Confirm delete!</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body row">
                            Do you want to delete account &nbsp;
                            <div id="idDelete"></div>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" onclick="deleteAdmin()">Delete</button> &nbsp;
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Confirm Delete User End-->
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