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
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        table a{
            text-decoration: none;  
        }
        .btn-delete,
        .btn-edit{
            background-color:#ccc;
            padding:12px;
            color:black;
            min-width:30px;
        }
        .btn-delete:hover,
        .btn-edit:hover{
            opacity: 0.5;
        }
    </style>
</head>
<body>
    <div class="main ">
        <div class="main">
            <div class="app__container">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-12 m-12 c-12">
                            <div class="home-filter hide-on-mobile-tablet" style="display:flex;justify-content: end;margin-bottom:12px;">
                                <button class="home-filter__label">Add Item</button>
                            </div>
                            <table>
                                <tr>
                                    <th style="width: 20%;">Image</th>
                                    <th style="width: 5%;">ID</th>
                                    <th style="width: 15%;">User</th>
                                    <th style="width: 10%;">Product</th>
                                    <th style="width: 60%;">Address</th>
                                    <th colspan="2">Function</th>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>1</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td> 
                                    <td><a class="btn-edit" href="#">Edit</a></td>
                                    <td><a class="btn-delete" href="#">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>2</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="btn-edit" href="#">Edit</a></td>
                                    <td><a class="btn-delete" href="#">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>3</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="btn-edit" href="#">Edit</a></td>
                                    <td><a class="btn-delete" href="#">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>4</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="btn-edit" href="#">Edit</a></td>
                                    <td><a class="btn-delete" href="#">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>5</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="btn-edit" href="#">Edit</a></td>
                                    <td><a class="btn-delete" href="#">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/laptop_sp.jpg" width="50%" class=""></td>
                                    <td>6</td>
                                    <td>Trần Đình Đô</td>
                                    <td>Macbook</td>
                                    <td>Đào Duy Từ</td>
                                    <td><a class="btn-edit" href="#">Edit</a></td>
                                    <td><a class="btn-delete" href="#">Delete</a></td>
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