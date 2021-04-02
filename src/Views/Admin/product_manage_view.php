<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <style>
        a {
            direction: none;
            color: blue;
        }

        a:hover {
            color: rgb(81, 81, 243);
        }

        .search {
            border: 1px solid orange;
            border-radius: 10px;
            background-color: wheat;
            padding: 8px;
        }

        .form-search {
            margin: 0 10% 2% 10%;
        }

        .content {
            margin-left: 3%;
            margin-right: 3%;
        }

        .btn_detail {
            border: #008000 solid 1px;
            background-color: #f0cfc8;
            color: #008000;
            border-radius: 3px;
            padding: 5px;
        }

        .btn_detail:hover {
            background-color: #008000;
            color: #f0cfc8;
        }
    </style>
</head>

<body style="background-image: url('image/b-g.jpg'); background-repeat: no-repeat;">

    <div class="header">
        <h1 style="text-align: center; color: rgb(224, 73, 99); text-align: center;">Product Management </h1>
    </div>

    <div class="form-search">
        <nav class="navbar navbar-light ">
            <form class="form-inline" method="POST">
                <input class="form-control mr-sm-2" type="input" placeholder="Enter product's name..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Search</button>
            </form>
        </nav>


    </div>
    <div class="content">
<!-- Button trigger modal -->


</div>
<!-- Modal -->

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
                    <th>Detail</th>
                    <th>Delete <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg></th>
                    <th>Update <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                        </svg></th>
                </tr>
            </thead>
            <tbody>
                <?php

                require_once '../../Models/connect.php';
                require_once '../../Controller/Admin/funtions_admin.php';
                $connect = new ConnectDataBase('PHP_PROJECT');

                $query = "select * from PRODUCT";
                $row = $connect->query($query);
                if (isset($_POST['btn_search'])) {
                    $key = $_POST['search'];
                }
                while ($product = mysqli_fetch_array($row)) {
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
                        <td><?php echo $product['image1'] ?></td>
                        <td><?php echo $product['image2'] ?></td>
                        <td><?php echo $product['image3'] ?></td>
                        <td><?php echo $product['sale'] ?> %</td>
                        <td><?php echo $product['like_product'] ?></td>

                        <td>
                            <div class="form_group">
                                <button name="btn_detail" class="btn_detail" > Detail</button>
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Launch demo modal
                                </button> -->

                               
                            </div>
                        </td>


                        <td>
                            <div class="form_group">
                                <button name="btn_detail" class="btn_detail"> Delete</button>
                            </div>
                        </td>

                        <td>
                            <div class="form_group">
                                <button name="btn_detail" class="btn_detail"> Update</button>
                            </div>
                        </td>
                    </tr>
                <?php
                }

                ?>
            </tbody>

        </table>
        <!-- Modal -->

    </div>

 
</body>

</html>