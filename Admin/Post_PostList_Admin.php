<?php
    // include "$_SERVER[DOCUMENT_ROOT]/TrakFlex/core/init.php";
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $image        = isset($_FILES['image']) ? $_FILES['image'] : '';
        $id           = isset($_POST['id']) ? $_POST['id'] : '';
        // $user_name    = isset($_POST['user_name']) ? $_POST['user_name'] : '';
        // $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
        $title_id     = isset($_POST['title_id']) ? $_POST['title_id'] : '';
        $post_content = isset($_POST['post_content']) ? $_POST['post_content'] : '';
        
        include "config.php";
        if ($id == 'create' && $image && $post_content && $title_id) {
            $name       = str_replace(' ', '-', $image["name"]);
            $bannerpath ="images/PostList/".$name;
            $flag       = move_uploaded_file($image["tmp_name"],$bannerpath);
            $sql        = "INSERT INTO `post`(`id_title`, `post_content`, `image`) VALUES ('{$title_id}','{$post_content}','{$name}')";
            $post       = mysqli_query($conn, $sql);
            $data       = mysqli_query($conn, "SELECT * FROM `post` WHERE `id`='{$conn->insert_id}'")->fetch_array(MYSQLI_ASSOC);
            echo json_encode([
                'status' => 200,
                'data'   => $data
            ]);
            exit();
        }

        if (isset($_POST['delete']) && $id) {
            $data       = mysqli_query($conn, "SELECT * FROM `post` WHERE `id`='{$id}' LIMIT 1")->fetch_array(MYSQLI_ASSOC);
            // unlink("images/" . $data['image']);
            $sql        = "DELETE FROM `post` WHERE id={$id}";
            $post       = mysqli_query($conn, $sql);
            if ($post) {
                echo json_encode([
                    'status' => 200,
                    'data'   => ''
                ]);
            }
            exit();
        }
        
        if ($id && $post_content && $title_id) {
            if ($image) {
                $name       = str_replace(' ', '-', $image["name"]);
                $bannerpath ="images/PostList/".$name;
                $flag       = move_uploaded_file($image["tmp_name"],$bannerpath);
                $sql        = "UPDATE `post` SET `post_content`='{$post_content}',`image`='{$name}', `id_title`='{$title_id}' WHERE `id`='{$id}'";
            } else {
                $sql        = "UPDATE `post` SET `id_title`='{$title_id}', `post_content`='{$post_content}' WHERE `id`='{$id}'";
            }
            $post       = mysqli_query($conn, $sql);
            $data       = mysqli_query($conn, "SELECT * FROM `post` WHERE `id`='{$id}'")->fetch_array(MYSQLI_ASSOC);
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