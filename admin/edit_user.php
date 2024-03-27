
<?php include "header.php"; ?>


<main class="mt-5">
    <div class="ontainer-fluid px-4">
        <h1 class="mt-4">Add User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">user</li>
        </ol>

        <div class="row col-sm-6">
        <?php 
			include 'config.php';
			$sqlMain="SELECT * FROM user WHERE user_id =".$_GET['user_id'];
    		$result = mysqli_query($con,$sqlMain);
    		$rowMain = mysqli_fetch_assoc($result);
       		//print_r($rowMain)
		?>
            <form id="contactForm" method="post" action="con_edit_user.php">
            <input type="hidden" name="user_id" value="<?php echo($_GET['user_id']); ?>" >
                <div class="mb-3">
                    <label class="form-label" for="Name">Name</label>
                    <input class="form-control" id="text" type="text" name="name" placeholder="Name" value="<?php echo($rowMain['user_name']) ?>"
                        data-sb-validations="required" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Name">Email</label>
                    <input class="form-control" id="email" type="email" name="email"  placeholder="Email" value="<?php echo($rowMain['user_email']) ?>"
                        data-sb-validations="required" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Name">Password</label>
                    <input class="form-control" id="password" type="text" name="password"  placeholder="Password" value="<?php echo($rowMain['user_password']) ?>"
                        data-sb-validations="required" />
                </div>

                <div class="d-grid">
                    <button class="btn btn-success col-sm-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>