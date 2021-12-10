<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href=""></a>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../Pcoint/pcoint/css/style.css">


    <link rel="stylesheet" href="../Admin/css/dinhdo/gird.css">
    <link rel="stylesheet" href="../Admin/css/dinhdo/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="../Admin/css/dinhdo/main.css">

    <!-- Header/Footer source -->
    <!-- bootstrap css -->
    

      <!-- <link rel="stylesheet" href="css/responsive.css">

      <link rel="icon" href="images/fevicon.png" type="image/gif" />

      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <title>Laptop</title>
    <style>
        .button-add:hover,
        .button-delete:hover,
        .btn-edit:hover,
        .button-add:hover{
            opacity: 0.5;
            /* background-color: #F7F8CB; */
            color: black;
        }
        .error {
            border-color: #f50000;
        }
    </style>
</head>
<body>
<div class="main">
<div class="main">


<?php
    include 'config.php';
    // $conn = mysqli_connect('localhost','root','','biding') or die('Error connecting to mysql: '. mysqli_error());
    // mysqli_set_charset($conn,"utf8");
    $sql = "SELECT * FROM `product`";
    $products = mysqli_query($conn, $sql);
?>
<div class="app__container" style="margin-top:0">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 m-12 c-12" style="height:1200px">
                <div class="home-filter hide-on-mobile-tablet" style="justify-content: end;">
                <button class="button-add" style="border-radius: 5px;min-width:60px; padding:12px 0; background-color: #ccc;">Thêm</button>

                </div>

                <div class="home-product">
                    <div class="row">
                        <?php foreach ($products as $product) { ?>
                        <div class="item-product col l-2-4 m-4 c-6" style="margin-top: 15px;">
                            <div href="#" class="home-product-item">
                                <img src="images/Product/<?php echo $product['image'] ?>" alt="" class="home-product-item-img">
                                <h1 class="product-name" style="padding:0 30px"><?php echo $product['product_name'] ?></h1>
                                <h1 class="gia" style="padding:0 30px"><?php echo $product['gia'] ?></h1>
                                <div class="button-wrap" style="display:flex; justify-content: space-around;padding:12px;">
                                   <button class="btn btn-edit addmore" data-id="<?php echo $product['id'] ?>" style="min-width:60px; padding:12px 0;border-radius: 5px">Sửa</button>
                                   <button class="button-delete" data-id="<?php echo $product['id'] ?>"  style="min-width:60px;padding:12px 0;border-radius: 5px;">Xóa</button>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- <ul class="pagination home-product__pagination">
                    <li class="pagination-item">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var addNewFlag = false;
        //Thêm
        $(document).on('click', '.button-add', function () {
            var product = $('.home-product');

            loadItemProduct('append');
        })
        $(document).on('click', '.add', function () {
            var _this   = $(this),
                error   = false,
                product = _this.parents('.item-product');
            product.each(function () {
                if (!$(this).find('input').val()) {
                    error = true;
                }
            });
            if (error) {
                product.find('input').addClass('error');
                return;
            }
            var form = new FormData();
            form.append('image', product.find('input[type="file"]')[0].files[0]);
            form.append('product_name', product.find('input[name="product_name"]').val());
            form.append('gia', product.find('input[name="gia"]').val());
            form.append('action', 'create');
            $.ajax({
                url: "Product_post.php",
                type: "POST",
                dataType: "json",
                enctype: 'multipart/form-data',
                headers: { "X-CSRF-Token": $("meta[name='csrf-token']").attr("content") },
                processData: false,
                contentType: false,
                data:form,
                success:function(data) {
                    if (data.status == 200) {
                        loadItemProduct('add', _this, data.data);
                    }    
                }
            })
        });
        // Xóa
        $(document).on("click", ".button-delete", function() {
            var _this    = $(this),
                is_apend = false,
                product  = _this.parents('.item-product');
                
            product.each(function () {
                if (!$(this).find('img, input[name="product-name"]').length) {
                    is_apend = true;
                }
            });
            
            if (is_apend) {
                loadItemProduct('delete', _this);
                return;
            }
            var form = new FormData();
            // form.append('image', product.find('input[type="file"]')[0].files[0]);
            form.append('product_name', product.find('input[name="product_name"]').val());
            form.append('gia', product.find('input[name="gia"]').val());
            form.append('action', 'delete');
            form.append('id', _this.data('id'));
            $.ajax({
                url: "Product_post.php",
                type: "POST",
                dataType: "json",
                enctype: 'multipart/form-data',
                headers: { "X-CSRF-Token": $("meta[name='csrf-token']").attr("content") },
                processData: false,
                contentType: false,
                data:form,
                success:function(data) {
                    if (data.status == 200) {
                        loadItemProduct('delete', _this);
                    }    
                }
            })

        });
        //Sửa
        $(document).on('click', '.edit', function () {
            var _this   = $(this),
                error   = false,
                product = _this.parents('.item-product');
            product.each(function () {
                if (!$(this).find('input').not('input[type="file"]').val()) {
                    error = true;
                }
            });
            if (error) {
                product.find('input').addClass('error');
                return;
            }
            var form = new FormData();
            form.append('image', product.find('input[type="file"]')[0].files[0]);
            form.append('product_name', product.find('input[name="product_name"]').val());
            form.append('gia', product.find('input[name="gia"]').val());
            form.append('action', 'edit');
            form.append('id', _this.data('id'));
            $.ajax({
                url: "Product_post.php",
                type: "POST",
                dataType: "json",
                enctype: 'multipart/form-data',
                headers: { "X-CSRF-Token": $("meta[name='csrf-token']").attr("content") },
                processData: false,
                contentType: false,
                data:form,
                success:function(data) {
                    if (data.status == 200) {
                        loadItemProduct('edit', _this, data.data);
                    }    
                }
            })
        });
        $(document).on('click', '.addmore', function () { 
            var _this = $(this),
            product = {id:$(this).data('id'),product_name:$(this).parents('.item-product').find('.product-name').text(),gia:$(this).parents('.item-product').find('.gia').text()};
            // product = {id:$(this).data('id'),gia:$(this).parents('.item-product').find('.gia').text()};
            loadItemProduct ('addmore', _this, product);
        });
        function loadItemProduct (action, current, product) {
            if (action == 'edit' || action == 'add') {
                current.parents('.item-product').replaceWith(
                    '<div class="item-product col l-2-4 m-4 c-6" style="margin-top: 15px;">' +
                        '<div href="#" class="home-product-item">' +
                            '<img src="images/Product/'+ product.image +'" class="home-product-item-img">' +
                            '<h1 class="product-name" style="padding:0 30px">' + product.product_name + '</h1>' +
                            '<h1 class="product-name" style="padding:0 30px">' + product.gia +'</h1>' +
                            '<div class="button-wrap" style="display:flex; justify-content: space-around;padding:12px;">' +
                                '<button class="btn btn-edit addmore" data-id="'+ product.id +'" style="min-width:60px; padding:12px 0;">Sửa</button>' +
                                '<button class="button-delete" data-id="'+ product.id +'" style="min-width:60px; padding:12px 0;">Xóa</button>' +
                        '</div>' +
                    '</div>'
                )   
            }

            if (action == 'delete') {
                current.parents('.item-product').remove();
            }

            // Edit
            if (action == 'addmore') {
                current.parents('.item-product').replaceWith(
                    '<div class="item-product col l-2-4 m-4 c-6" style="margin-top: 15px;">' +
                        '<div href="#" class="home-product-item">' +
                            '<div class="home-product-item-img" style="position: relative;"><input type="file" class="form-control" style="left: 50%;top: 50%;transform: translateX(-50%) translateY(-50%);position: absolute;"></div>' +
                            '<h1 class="product-name" style="padding:0 30px"><input name="product_name" placeholder="Tiêu đề sản phẩm" type="text" class="form-control" value="'+ product.product_name +'"></h1>' +
                            '<h1 class="product-name" style="padding:0 30px"><input name="gia" placeholder="Giá" type="text" class="form-control" value="'+ product.gia +'"></h1>' +
                          
                            '<div class="button-wrap" style="display:flex; justify-content: space-around;padding:12px;">' +
                                '<button class="btn btn-edit edit" data-id="'+ product.id +'" style="min-width:60px; padding:12px 0;">Sửa</button>' +
                                '<button class="button-delete" data-id="'+ product.id +'" style="min-width:60px; padding:12px 0;">Xóa</button>' +
                        '</div>' +
                    '</div>'
                )   
            }

            // Add
            if (action == 'append') {
                $('.home-product').find('.row').append(
                    '<div class="item-product col l-2-4 m-4 c-6" style="margin-top: 15px;">' +
                        '<div href="#" class="home-product-item">' +
                            '<div class="home-product-item-img" style="position: relative;"><input type="file" class="form-control" style="left: 50%;top: 50%;transform: translateX(-50%) translateY(-50%);position: absolute;"></div>' +
                            '<h1 class="product-name" style="padding:0 30px"><input name="product_name" placeholder="Tiêu đề sản phẩm" type="text" class="form-control"></h1>' +
                            '<h1 class="product-name" style="padding:0 30px"><input name="gia" placeholder="Giá" type="text" class="form-control"></h1>' +
                            '<div class="button-wrap" style="display:flex; justify-content: space-around;padding:12px;">' +
                                '<button class="btn btn-edit add" style="min-width:60px; padding:12px 0;">Thêm</button>' +
                                '<button class="button-delete" style="min-width:60px; padding:12px 0;">Xóa</button>' +
                        '</div>' +
                    '</div>'
                );
            }
            
        }
    })
</script>
</html>