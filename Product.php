<?php
    require "config.php";


    //Code Add sản phẩm
    if(isset($_POST["btnAdd"])){
        $name = $_POST["txtProductName"];
        $price = $_POST["txtProductPrice"];
        settype($price, "int");
        $image = $_POST["txtProductImage"];
        $describe = $_POST["txtProductDescribe"];
        $type = $_POST["txtProductType"];
        settype($type, "int");
        $typeName = $_POST["txtProductTypeName"];
        settype($typeName, "int");
        $qr = "INSERT INTO chitietsp VALUES (null, '$name', '$image', '$price', '$describe', '$type', '$typeName')";
        if(mysqli_query($con, $qr)){
            header("location:Product.php");
        }
        else{
            echo "Add product fail";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo PHP</title>
</head>
<body>

    <div class="list-product">
        <h1>List Product</h1>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>Product Name</td>
                <td>Image</td>
                <td>Price</td>
                <td>Describe</td>
                <td>Product Type</td>
                <td>Product Type Name</td>
            </tr>
            <?php
                $qr_select = "SELECT * FROM chitietsp";
                $list = mysqli_query($con, $qr_select);
                while($row = mysqli_fetch_array($list)){
            ?>
            <tr>
                <td><?= $row["id_sp"] ?></td>
                <td><?= $row["tensp"] ?></td>
                <td><img src="<?= $row["hinhanh"] ?>"></td>
                <td><?= $row["gia"] ?></td>
                <td><?= $row["mota"] ?></td>
                <td><?= $row["id_loaisp"] ?></td>
                <td><?= $row["thutu"] ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>


    <div class="add-product">
        <form action="" method="post">
            <table border=1>
                <h1>Add Product</h1>
                <tr>
                    <td colspan="2">Add product</td>
                </tr>
                <tr>
                    <td>Product Name</td> <td><input type="text" name="txtProductName"></td>
                </tr>
                <tr>
                    <td>Price</td> <td><input type="text" name="txtProductPrice"></td>
                </tr>
                <tr>
                    <td>Image</td> <td><input type="text" name="txtProductImage"></td>
                </tr>
                <tr>
                    <td>Describe</td> <td><input type="text" name="txtProductDescribe"></td>
                </tr>
                <tr>
                    <td>Product Type</td> <td><input type="text" name="txtProductType"></td>
                </tr>
                <tr>
                    <td>Product Type Name</td> <td><input type="text" name="txtProductTypeName"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Add" name="btnAdd"></td>
                </tr>
            </table>
        </form>
    </div>
    
</body>
</html>