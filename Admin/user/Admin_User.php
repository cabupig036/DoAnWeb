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
    <link rel="stylesheet" href="../css/AE_Admin.css">
    <link rel="stylesheet" href="../css/Admin.css">
    <title>Laptop</title>

</head>


<body>
    <!-- menu -->
    <div class="menu">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">Manager Page</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="Admin_User.php">User</a></li>
                    <li><a href="Admin_ListUser.php">Level User</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!--   end menu-->
    <!-- list -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-7">
                        <h2>User <b>Details</b></h2>
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
                        <button type="button" class="btn btn-info add-new  btn-lg" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add New</button>
                        <!--  popup add -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="add.php" method='post' enctype='multipart/form-data'>
                                            Username <input type="text" name='username' class="form-control"> <br>
                                            Image <input type="file" name='img' class="form-control"> <br>
                                            Email <input type="email" name='email' class="form-control"> <br>
                                            Password<input type="password" name='password' class="form-control"> <br>
                                            Level <input type="text" name='level' class="form-control"> <br>
                                            Info <input type="text" name='info' class="form-control"> <br>
                                            Description <textarea class="form-control" id="description" name="description" rows="3"></textarea> <br>
                                            <input type="submit" value='Them moi'>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!--   end   poup add -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Img</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Info</th>
                            <th>Description</th>
                            <th>Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include './db.php';
                        $sql = "SELECT * FROM `users`";
                        $result = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        foreach ($data as $r) {
                        ?>
                            <tr>
                                <td><?php echo $r['id'] ?></td>
                                <td><?php echo $r['username'] ?></td>
                                <td><img width="100px" height="100px" alt='<?php echo $r['img'] ?>' src="../images/user/<?php echo $r['img'] ?>"></td>
                                <td><?php echo $r['email'] ?></td>
                                <td><?php echo $r['level'] ?></td>
                                <td><?php echo $r['info'] ?></td>
                                <td><?php echo $r['description'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $r['id'] ?>" class="edit" title="Edit"><i class="material-icons">&#xE254;</i></a>
                                    <a href="delete.php?id=<?php echo $r['id'] ?>" onclick="return confirm('Are you sure you want to delete this item <?php echo $r['id'] ?>?');" class="delete" title="Delete" data-toggle="tooltip">
                                        <i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
    <!--  endlist -->
</body>
</form>
</script>

</html>