

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href=""></a>
    <link rel="stylesheet" href="../css/dinhdo/gird.css">
    <link rel="stylesheet" href="../css/dinhdo/responsive.css">
    <link rel="stylesheet" href="../pcoint/css/Admin/Post_Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/AE_Admin.css">
    <link rel="stylesheet" href="../css/Admin.css">
    <title>Laptop</title>

</head>
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

        table a {
            text-decoration: none;
        }
    </style>

<body>
    <!--  menu -->
    <div class="menu">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" >Manager Page</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="Admin_User.php">User</a></li>
                    <li  class="active"><a href="Admin_ListUser.php">Level User</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
              
                </ul>
            </div>
        </nav>
    </div>
    <!--     end menu -->
    <!-- list -->
    <div class="container">
        
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-7">
                        <h2>Level User <b>Details</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <nav class="navbar navbar-light bg-light">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </nav>

                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <div class="app__container">
                <div class="grid wide">
                    <div class="row">

                        <div class="col l-12 m-12 c-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th >ID</th>
                                        <th >User</th>
                                        <th >Function</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include './db.php';
                                        $sql = "SELECT * FROM `users`";
                                        $result = mysqli_query($conn, $sql);
                                        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        foreach ($data as $k => $v) { ?>
                                            <tr>

                                                <td class="id"><?php echo $v['id'] ?></td>
                                                <td class="user_name"><?php echo $v['username'] ?></td>
                                                <td class="level"><?php echo $v['level'] ?></td>
                                           
                                                <td>
                                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                </td>

                                            </tr>
                                        <?php 
                                   } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
<!--     end list -->
</body>



<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
  
        // Append table with add row form on add new button click
        var addNewFlag = false;
        $(".add-new").click(function() {
            $(this).attr("disabled", "disabled");
            var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
              
                '<td class="id"><input type="hidden" class="form-control" value="create"></td>' +
                '<td class="user_name"><input type="text" class="form-control" name="email" id="email"></td>' +
                '<td class="adress"><input type="text" class="form-control" name="lv" id="lv"></td>' +
                '<td>' +
                '<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>' +
                '<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>' +
                '<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>' +
                '</td>' +
                '</tr>';
            if ($("table tbody tr td").length > 1) {
                $("table").append(row);
            } else {
                $("table").find('tbody').html(row);
            }
            if ($("table tbody tr").length > 0) {
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            } else {
                $("table tbody tr").eq(index).find(".add, .edit").toggle();
            }
            $('[data-toggle="tooltip"]').tooltip();
            addNewFlag = true;
        });
        // Add row on add button click
        $(document).on("click", ".add", function() {
            var empty = false;
            // if (addNewFlag) {
            var input = $(this).parents('tr').find('td').find('input');
            // } else {
            // var input = $(this).parents('tr').find('td').not('.image').find('input');
            // }

            var _this = $(this);
            input.each(function() {
                if (!$(this).val() && addNewFlag) {
                    $(this).addClass("error");
                    empty = true;
                } else {
                    $(this).removeClass("error");
                }
            });
            $(this).parents("tbody").find('tr').find(".error").first().focus();
            if (!empty) {
                var form = new FormData();
                input.each(function() {
                    if ($(this).attr('type') == 'file') {
                        form.append($(this).parent().attr('class'), $(this)[0].files[0]);
                    } else {
                        form.append($(this).parent().attr('class'), $(this).val());

                    }
                })

                if ($(this).parents("tr").find('.id').text()) {
                    form.append('id', $(this).parents("tr").find('.id').text());
                }

                $.ajax({
                    url: "Order_post.php",
                    type: "POST",
                    dataType: "json",
                    enctype: 'multipart/form-data',
                    headers: {
                        "X-CSRF-Token": $("meta[name='csrf-token']").attr("content")
                    },
                    processData: false,
                    contentType: false,
                    data: form,
                    success: function(data) {
                        if (data.status == 200) {
                            var order = data.data;
                            input.each(function() {
                                if ($(this).parent("td").hasClass('image')) {
                                    var img = "<img src='images/" + order[$(this).parent().attr('class')] + "' width='50%'>";
                                    $(this).parent("td").html(img);
                                } else {
                                    $(this).parent("td").html(order[$(this).parent().attr('class')]);
                                }
                            });
                            _this.parents('tr').find(".add, .edit").toggle();
                            $(".add-new").removeAttr("disabled");
                            addNewFlag = false;
                        }
                    }
                })
            }
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function() {
            $(this).parents('tr').find("td:not(:last-child)").not(".id").each(function() {
                if ($(this).find('img').length) {
                    $(this).html('<input type="file" name="image" class="form-control" value="' + $(this).text() + '">');
                } else {
                    $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                }
            });
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function() {
            var _this = $(this);

            if (addNewFlag) {
                if (_this.parents("tbody").find('tr').length > 1) {
                    _this.parents("tbody tr").remove();
                } else {
                    _this.parents("tbody").html('<tr><td colspan="6">Không có dữ liệu</td></tr>');
                }
                $(".add-new").removeAttr("disabled");
                addNewFlag = false;
                return;
            }

            var form = new FormData();

            if ($(this).parents("tr").find('.id').text()) {
                form.append('id', $(this).parents("tr").find('.id').text());
            }

            form.append('delete', 'delete');

            $.ajax({
                url: "function_list.php",
                type: "POST",
                dataType: "json",
                enctype: 'multipart/form-data',
                headers: {
                    "X-CSRF-Token": $("meta[name='csrf-token']").attr("content")
                },
                processData: false,
                contentType: false,
                data: form,
                success: function(data) {
                    if (data.status == 200) {
                        console.log(_this.parents("tbody").find('tr'));
                        if (_this.parents("tbody").find('tr').length > 1) {
                            _this.parents("tr").remove();
                        } else {
                            _this.parents("tbody").html('<tr><td colspan="6">Không có dữ liệu</td></tr>');
                        }
                        $(".add-new").removeAttr("disabled");
                        addNewFlag = false;
                    }
                }
            })
        });
    });
</script>

</html>