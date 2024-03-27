<?php include("header.php"); ?>

<main class="mt-5">
    <div class="container-fluid px-4">
        <h1 class="mt-4">User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">User</li>
        </ol>
        <a class="btn btn-primary" href="user-add.php" role="button">+ New Product</a>
        <br><br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-user me-1"></i>
                Users
            </div>

            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Edit / Delete</th>
                        </tr>
                    </thead>

                    <?php
                    include_once("config.php");
                    $sql="SELECT * FROM user";
                    $result=mysqli_query($con, $sql);
                    while($row= mysqli_fetch_assoc($result))
                    {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo($row['user_id']);?></td>
                            <td><?php echo($row['user_name']);?></td>
                            <td><?php echo($row['user_email']);?></td>
                            <td><?php echo($row['user_password']);?></td>
                            
                            <td>
                                <a class="btn btn-primary btn-sm" href='edit_user.php?user_id=<?php echo($row['user_id']); ?>'>Edit</a>
                                <a class="btn btn-danger btn-sm"
                                    href='con_delete_user.php?user_id=<?php echo($row['user_id']); ?>'>Delete</a>
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