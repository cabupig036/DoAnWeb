<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href=""></a>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/dinhdo/gird.css">
    <link rel="stylesheet" href="./css/dinhdo/responsive.css">
    <link rel="stylesheet" href="../Admin/css/PostList_Admin.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/AE_Admin.css">
<<<<<<< Updated upstream
    <link rel="stylesheet" href="css/Admin.css">
    <title>Laptop</title>
=======
    <title>Admin Post List</title>
>>>>>>> Stashed changes


</head>


<body>
    <?php
        include 'config.php';
        $sql = "SELECT * FROM `title`";
        $titles = mysqli_query($conn, $sql);
    ?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row" >
                    <div class="col-sm-11">
                        <h2><strong>Post List</strong></h2>
                    </div>
                    <div class="col-sm-1 me-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 10%;">ID</th>
                        <th style="width: 20%;">Topic</th>
                        <th style="width: 60%;">Content</th>
                        <th style="width: 20%;">Function</th>
                </thead>
                <tbody>
                    <?php if ($titles) { foreach ($titles as $title) { ?>
                    <tr>
                        <td class="id"><?php echo $title['id'] ?></td>
                        <td class="title_name"><a href="./Post_Admin.php<?php echo "?id={$title['id']}" ?>" class="link-topic"><?php echo $title['title_name'] ?></a></td>
                        <td class="title_content"><?php echo $title['title_content'] ?></td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php } } else { ?>
                        <tr>
                            <th colspan="5" style="text-align:center">Không có dữ liệu</th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<<<<<<< Updated upstream
    </tr>
    <tr>
    <div class="main">
       
       <div class="app__container">
           <div class="grid wide">
               <div class="row">
                       <table>
                               <th style="width: 30%;">ID</th>
                               <th style="width: 50%;">Content</th>               
                               <th colspan="2" style="width: 20%;">Function</th>

                           </tr>
                           <tr>
                               <td>1</td>
                               <td>Maria Anders Centro comercial Moctezum Island Trading</td>
                               <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                               <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                           </tr>
                           <tr>
                               <td>2</td>
                               <td>Maria Anders Centro comercial Moctezum Island Trading</td>
                               <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                               <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                           </tr>
                           </tr>
                           <tr>
                               <td>3</td>
                               <td>Maria Anders Centro comercial Moctezum Island Trading</td>
                               <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                               <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                           </tr>
                           </tr>
                           <tr>
                               <td>4</td>
                               <td>Maria Anders Centro comercial Moctezum Island Trading</td>
                               <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                               <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                           </tr>
                           </tr>
                           <tr>
                               <td>5</td>
                               <td>Maria Anders Centro comercial Moctezum Island Trading</td>
                               <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                               <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                           </tr>
                           </tr>
                           <tr>
                               <td>6</td>
                               <td>Maria Anders Centro comercial Moctezum Island Trading</td>
                               <td><a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                               <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                           </tr>
                           </tr>
                       </table>
                   </div>
               </div>
               </div>
       </div>
   </div>
</div>

    </tr>

</table>
      

  
=======
>>>>>>> Stashed changes
</body>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        // var actions = $("table td:last-child").html();
        // Append table with add row form on add new button click
        var addNewFlag = false;
        $(".add-new").click(function() {
            $(this).attr("disabled", "disabled");
            var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
                '<td class="id"><input type="hidden" class="form-control" value="create"></td>' +
                '<td class="title_name"><input type="text" class="form-control" name="email" id="email"></td>' +
                '<td class="title_content"><input type="text" class="form-control" name="email" id="email"></td>' +
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
                    url: "Post_Title.php",
                    type: "POST",
                    dataType: "json",
                    enctype: 'multipart/form-data',
                    headers: { "X-CSRF-Token": $("meta[name='csrf-token']").attr("content") },
                    processData: false,
                    contentType: false,
                    data:form,
                    success:function(data) {
                        if (data.status == 200) {
                            var order = data.data;
                            input.each(function() {
                                if ($(this).parent("td").hasClass('title_name')) {
                                    var id = "<a href='./Post_Admin.php?id=" + order.id + "'>" + order[$(this).parent().attr('class')] + "</a>";
                                    $(this).parent("td").html(id);
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

            var form  = new FormData();

            if ($(this).parents("tr").find('.id').text()) {
                form.append('id', $(this).parents("tr").find('.id').text());
            }

            form.append('delete', 'delete');

            $.ajax({
                url: "Post_Title.php",
                type: "POST",
                dataType: "json",
                enctype: 'multipart/form-data',
                headers: { "X-CSRF-Token": $("meta[name='csrf-token']").attr("content") },
                processData: false,
                contentType: false,
                data:form,
                success:function(data) {
                    if (data.status == 200) {
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