<?php
    // include "$_SERVER[DOCUMENT_ROOT]/TrakFlex/core/init.php";
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $image        = isset($_FILES['image']) ? $_FILES['image'] : '';
        $id            = isset($_POST['id']) ? $_POST['id'] : '';
        // $user_name    = isset($_POST['user_name']) ? $_POST['user_name'] : '';
        // $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
        $title_content = isset($_POST['title_content']) ? $_POST['title_content'] : '';
        $title_name    = isset($_POST['title_name']) ? $_POST['title_name'] : '';
        
        include "config.php";
        if ($id == 'create' && $title_content && $title_name) {
            $sql        = "INSERT INTO `title`(`title_name`, `title_content`) VALUES ('{$title_name}','{$title_content}')";
            $title      = mysqli_query($conn, $sql);
            $data       = mysqli_query($conn, "SELECT * FROM `title` WHERE `id`='{$conn->insert_id}'")->fetch_array(MYSQLI_ASSOC);
            echo json_encode([
                'status' => 200,
                'data'   => $data
            ]);
            exit();
        }

        if (isset($_POST['delete']) && $id) {
            $data       = mysqli_query($conn, "SELECT * FROM `title` WHERE `id`='{$id}' LIMIT 1")->fetch_array(MYSQLI_ASSOC);
            // unlink("images/" . $data['image']);
            $sql        = "DELETE FROM `title` WHERE id={$id}";
            $title      = mysqli_query($conn, $sql);
            if ($title) {
                echo json_encode([
                    'status' => 200,
                    'data'   => ''
                ]);
            }
            exit();
        }
        
        if ($id && $title_content && $title_name) {
            // if ($image) {
            //     $name       = str_replace(' ', '-', $image["name"]);
            //     $bannerpath ="images/PostList/".$name;
            //     $flag       = move_uploaded_file($image["tmp_name"],$bannerpath);
            //     $sql        = "UPDATE `post` SET `post_content`='{$post_content}',`image`='{$name}', `id_title`='{$title_id}' WHERE `id`='{$id}'";
            // } else {
            $sql        = "UPDATE `title` SET `title_name`='{$title_name}', `title_content`='{$title_content}' WHERE `id`='{$id}'";
            // }
            $title      = mysqli_query($conn, $sql);
            $data       = mysqli_query($conn, "SELECT * FROM `title` WHERE `id`='{$id}'")->fetch_array(MYSQLI_ASSOC);
            // while($row = $data) {
            //     $results[] = $row;
            // }
            echo json_encode([
                'status' => 200,
                'data'   => $data
            ]);
        }
        
        
    // } 

?>