<?php include("header.php"); ?>
<main class="mt-5">
<div class="container-fluid px-4">
    <h1 class="mt-4">Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Category</li>
    </ol>
    <a class="btn btn-primary" href="category-add.php" role="button">+ New Category</a>
     <br><br>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Category
        </div>

    <div class="card-body">
        <table id="datatablesSimple" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Created Date</th>
                    <th>Edit / Delete</th>
                </tr>
            </thead>
            <?php
                    include_once("config.php");
                    $sql="SELECT * FROM category";
                    $result=mysqli_query($con, $sql);
                    while($row= mysqli_fetch_assoc($result))
                    {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo($row['c_id']);?></td>
                            <td><?php echo($row['c_name']);?></td>
                            <td><img src="../images/<?php echo($row['c_img']);?>" width="150px" height="150px" style="object-fit: cover;" /></td>
                            <td><?php echo($row['c_createdDate']);?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="edit_category.php?c_id=<?php echo($row['c_id']); ?>">Edit</a>
                                <a class="btn btn-danger btn-sm"
                                    href='con_delete_category.php?c_id=<?php echo($row['c_id']); ?>'>Delete</a>
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
