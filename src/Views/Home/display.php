<?php require 'product.php';
$pro= new Product();
$arr="";
$b='';?>


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
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="menu.css">
    <!-- <script src="./menu_new.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script></script>
</head>


<body> 
    <!-- menu -->
    <div class="header" id="header-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-content">
            <div class="container">
                <div class="logo-shop">
                    <a onclick="goToHome()" href="#">
                        <div><img src="../../image/logo.png" /></div>
                        <div><span>Ôm là yêu</span></div>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" onclick="goToHome()">Home <span
                                    class="sr-only">(current)</span></a>
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
                        <div class="form-inline my-2 my-lg-0" id="set-search">
                            <!-- search -->
                            <!-- <input placeholder="search " type="text" id="search"> 
                    <button onclick="search()">Search</button> -->
                            <input class="form-control mr-sm-2" placeholder="Search" id="search">
                            <button class="btn btn-outline-success my-2 my-sm-0" id="button-search" onclick="search()">Search</button>

                        </div>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        &nbsp;
                        <li class="button-account">
                            <a href="../../Manage/Login/createAccount.html" style="font-size: 100%;color: rgb(100, 100, 216);"> <i class="fa fa-user" style="color: orangered;padding-right: 5px;"></i>Đăng kí</a>
                        </li>
                        &nbsp; &nbsp;&nbsp;
                        <li class="button-account">
                            <a href="../../Manage/Login/login.html" style="font-size: 100%;color: rgb(100, 100, 216);"><i class="fas fa-user"
                                    style="color: orangered;padding-right: 5px;"></i>Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- end menu -->
    <!-- Search Function -->
    <div class="container">
        <div id="search-content" class="all-product" style="display: none;">
            <div class="sort-search">
                <div id="notice-search"></div>
                <div id="show-search"></div>
                <div class="page; page-search" id="page-search"></div>
            </div>

        </div>

    </div>
    <!-- End Search -->
    <hr style="background-color: #e68376;height: 2px;">

    <div class="container">
        <div id="detail-product" style="display: none;">
        </div>
    </div>

    <div id="home-page" style="display: block;">

        <div class="content" style="display: block;">
            <div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://teddy.vn/wp-content/uploads/2020/07/baner-giao-hang-2_optimized.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://teddy.vn/wp-content/uploads/2020/07/banner-6-dich-vu-min.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://teddy.vn/wp-content/uploads/2020/12/Untitled-2-01.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- end Slider -->

            <!-- display products -->
    <form action="" method="post" >
    <div class="container-fluid ">
        <div id="menu-ngag">
            <ul class="nav nav-pills justify-content-center flex-column flex-md-row center" id="myPill" role="tablist">
                <li class="nav-item active ">
                   <button   type="submit" class=" btn btn-secondary btn-block" name="buffalo">  Buffalo</button>
                </li>
                <li class="nav-item nav-link ">
                    
                        <button  type="submit" class="nav-link  btn btn-secondary btn-block " name="tabteddy2"> Teddy </button>
                  
                </li>
                <li class="nav-item nav-link">
                   
                <button type="submit"   class="  btn btn-secondary btn-block" name="cat">  Cat</button>
                        
                  
                </li>
                <li class="nav-item nav-link">
                <button type="submit"   class="  btn btn-secondary btn-block" name="doreamon">  Doreamon</button>
                </li>
                <li class="nav-item nav-link">
                <button type="submit" class="  btn btn-secondary btn-block" name="chicken">  Chicken </button>
                </li>
                <li class="nav-item nav-link">
                <button type="submit"  class="  btn btn-secondary btn-block" name="dog">Dog</button>
                </li>
            </ul>
        </div>
        
                    <?php 
                            if(isset($_POST['buffalo']))
                           {
                             $arr=$pro->GetListBuffalo(); 
                           }
                           else
                           {
                                 if(isset($_POST['teddy']))
                                 {
                                     $arr=$pro->GetListTeddy();
                                 }
                                 else{
                                         if(isset($_POST['cat']))
                                         {
                                             $arr=$pro->GetListCat();
                                         }
                                         else{
                                                 if(isset($_POST['doreamon']))
                                                 {
                                                     $arr=$pro->GetListDoreamon();
                                                 }
                                                 else
                                                 {
                                                     if(isset($_POST['chicken']))
                                                         {
                                                         $arr=$pro->GetListChicken();
                                                         }
                                                         else
                                                         {
                                                             if(isset($_POST['dog']))
                                                             {
                                                                 $arr=$pro->GetListDog();
                                                             }
                                                         }
                                                 }
                                             }   
                                         
                                     }
                             }         

                            if($arr!=""){
                          $ki ="<div class='container-fluid'><div id='products' class='row list-group'>";
                          foreach($arr as $key => $row){
                            
                           $k = (string) "<div  id='item' class='item  col-xs-3 col-lg-3'>
                                      <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['image1']}'
                                      width='300'>
                                           <div class='caption'> 
                                             <div class='row56' id='bottom1'>
                                                <h4 class='group inner list-group-item-heading'>  {$row['name_product']}</h4>
                                                <p class='group inner list-group-item-text'> {$row['like_product']}.</p>
                                            </div>
                                           <div class='row' id='bottom'>
                                                     <div class='col-xs-12 col-md-6'>
                                                          <p class='lead'> {$row['price']}đ</p>
                                                         </div>
                                                         <div 
                                                         button class='btn btn-info btn-sm'><i class='fa fa-edit'></i></div>
                                                     <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                                     href='edit.php?ma_id={$row['id_product']}'>Chi tiết</a>
                                                         </div>
                                                         
                                                    </div>
                                               </div>
                                          </div>
                                     </div>
                                                        
                        ";
                        
                        $ki.=$k;
                                                
                          }
                          $ki.="</div></div>";
                          echo $ki;
                        } else{
                            $arr=$pro->GetListBuffalo();
                            $ki ="<div class='container-fluid'><div id='products' class='row list-group'>";
                            foreach($arr as $key => $row){
                              
                             $k = (string) "<div  id='item' class='item  col-xs-3 col-lg-3'>
                                        <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['image1']}'
                                        width='300'>
                                             <div class='caption'> 
                                               <div class='row56' id='bottom1'>
                                                  <h4 class='group inner list-group-item-heading'>  {$row['name_product']}</h4>
                                                  <p class='group inner list-group-item-text'> {$row['like_product']}.</p>
                                              </div>
                                             <div class='row' id='bottom'>
                                                       <div class='col-xs-12 col-md-6'>
                                                            <p class='lead'> {$row['price']}đ</p>
                                                           </div>
                                                           <div 
                                                           <button class='btn btn-info btn-sm'><i class='fa fa-edit'></i></div>
                                                           <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                                           href='edit.php?ma_id={$row['id_product']}'>Chi tiết</a>
                                                               </div>
                                                      </div>
                                                 </div>
                                            </div>
                                       </div>                      
                                   
                          ";
                          
                          $ki.=$k;
                                   
                            }
                            $ki.="</div></div>";
                            echo $ki;
                                   
                        }       
                       ?>
                
      
        
    </div>

</body>

</html>

</body>

</html> 