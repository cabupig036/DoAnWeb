<?php 
	$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
	$image        = isset($_FILES['image']) ? $_FILES['image'] : '';
	$action       = isset($_POST['action']) ? $_POST['action'] : '';
	$id 		  = isset($_POST['id']) ? $_POST['id'] : '';
	include "config.php";
	if ($action == 'create' && $image && $product_name) {
		$name       = str_replace(' ', '-', $image["name"]);
        $bannerpath ="images/Product/" . $name;
        $flag       = move_uploaded_file($image["tmp_name"],$bannerpath);
        $sql        = "INSERT INTO `product`(`product_name`, `image`) VALUES ('{$product_name}', '{$name}')";
        $product    = mysqli_query($conn, $sql);
        $data       = mysqli_query($conn, "SELECT * FROM `product` WHERE `id`='{$conn->insert_id}'")->fetch_array(MYSQLI_ASSOC);
        echo json_encode([
            'status' => 200,
            'data'   => $data
        ]);
        exit();
	}

    if ($action == 'delete' && $product_name && $id) {
        // $data       = mysqli_query($conn, "SELECT * FROM `product` WHERE `id`='{$id}' LIMIT 1")->fetch_array(MYSQLI_ASSOC);
        // unlink("images/Product" . $data['image']);
        $sql        = "DELETE FROM `product` WHERE id={$id}";
        $order      = mysqli_query($conn, $sql);
        if ($order) {
            echo json_encode([
                'status' => 200,
                'data'   => ''
            ]);
        }
        exit();
    }
	if ($action == 'edit' && $product_name && $id) {
		if ($image) {
			$name       = str_replace(' ', '-', $image["name"]);
            $bannerpath ="images/Product/".$name;
            $flag       = move_uploaded_file($image["tmp_name"],$bannerpath);
            $sql        = "UPDATE `product` SET `id`='{$id}',`product_name`='{$product_name}',`image`='{$name}' WHERE `id`='{$id}'";
		} else {
			$sql        = "UPDATE `product` SET `product_name`='{$product_name}' WHERE `id`='{$id}'";
		}

		$order      = mysqli_query($conn, $sql);
        $data       = mysqli_query($conn, "SELECT * FROM `product` WHERE `id`='{$id}'")->fetch_array(MYSQLI_ASSOC);

        echo json_encode([
            'status' => 200,
            'data'   => $data
        ]);
        exit();
	}
?>