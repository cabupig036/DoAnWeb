<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href=""></a>
    <link rel="stylesheet" href="./css/dinhdo/gird.css">
    <link rel="stylesheet" href="./css/dinhdo/responsive.css">
    <link rel="stylesheet" href="../pcoint/css/Admin/Post_Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/AE_Admin.css">
    <title>Laptop</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            /* border: 1px solid #dddddd; */
            text-align: center;
            padding: 5px;
            text-indent: 20px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        table a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="main ">
        <div class="main">
        <div class="col-sm-1">
                        <button type="button" style="margin: 0 0 0 85em;" class="btn btn-info add-new" ><i class="fa fa-plus"></i> Add New</button>
                    </div>
            <div class="app__container">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-12 m-12 c-12">

                            <table>
                                <tr>
                                    <th style="width: 20%;">Image</th>
                                    <th style="width: 5%;">ID</th>
                                    <th style="width: 15%;">User</th>
                                    <th style="width: 10%;">Product</th>
                                    <th style="width: 20%;">Address</th>
                                    <th colspan="2">Function</th>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>1</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td> 
                                    <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>

                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>2</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>3</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>4</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>5</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>6</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- <ul class="pagination home-product__pagination">
                        <li class="pagination-item ">
                            <a href="" class="pagination-item__link"><i class="pagination-item__icon fas fa-chevron-left"></i></a>
                        </li>
                        <li class="pagination-item pagination-item--active">
                            <a href="" class="pagination-item__link">1</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">2</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">3</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link"><i class="pagination-item__icon fas fa-chevron-right"></i></a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>