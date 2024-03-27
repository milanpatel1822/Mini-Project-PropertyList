<?php include("header.php"); ?>

<main class="mt-5">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Product</li>
        </ol>
        <a class="btn btn-primary" href="product-add.php" role="button">+ New Product</a>
        <br><br>
        <div class="card mb-4" style="width: 132% !important;">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Product
            </div>

            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Photo</th>
                            <th>Discription</th>
                            <th>Price</th>
                            <th>Owner Name</th>
                            <th>Owner Contact</th>
                            <th>Owner Email</th>
                            <th>Agent</th>
                            <th>Created Date</th>
                            <th>Edit / Delete</th>
                        </tr>
                    </thead>

                    <?php
                    include_once("config.php");
                    $sql="SELECT * FROM property ";
                    $result=mysqli_query($con, $sql);
                    while($row= mysqli_fetch_assoc($result))
                    {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo($row['product_id']);?></td>
                            <td><?php echo($row['p_name']);?></td>
                            <td><?php echo($row['c_id']);?></td>
                            <td><img src="../img/<?php echo($row['p_img']);?>" width="150px" height="150px" style="object-fit: cover;" /></td>
                            <td><?php echo($row['p_discription']);?></td>
                            <td><?php echo($row['p_price']);?></td>
                            <td>abc</td>
                            <td>9999999999</td>
                            <td>abc@gmail.com</td>
                            <td>Prince</td>
                            <td><?php echo($row['p_createdDate']);?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='edit_product.php?product_id=<?php echo($row['product_id']); ?>'>Edit</a>
                                <a class="btn btn-danger btn-sm"
                                    href='con_delete_product.php?product_id=<?php echo($row['product_id']); ?>'>Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
</main>