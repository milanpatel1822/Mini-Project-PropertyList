
<?php include "header.php"; ?>


<main class="mt-5">
    <div class="ontainer-fluid px-4">
        <h1 class="mt-4">Add Category</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>

        <div class="row col-sm-6">

        <?php 
			include 'config.php';
			$sqlMain="SELECT * FROM category WHERE c_id =".$_GET['c_id'];
    		$result = mysqli_query($con,$sqlMain);
    		$rowMain = mysqli_fetch_assoc($result);
       		//print_r($rowMain)
		?>
            <form id="contactForm" method="post" action="con_edit_category.php" >
            <input type="hidden" name="c_id" value="<?php echo($_GET['c_id']); ?>" >
            
            <div class="mb-3">
                <label class="form-label" for="Slug">Name</label>
                <input class="form-control" id="text" type="text" name="c_name" value="<?php echo($rowMain['c_name']) ?>" placeholder="Enter Category Name"  data-sb-validations="required"></input>
                
            </div>
            <div class="mb-3">
                <label class="form-label" for="Name">Image</label>
                <input class="form-control" id="text" type="file" name="c_img" value="<?php echo($rowMain['c_img']) ?>"  data-sb-validations="required,email" />
            </div>
                <div class="mb-3">
                    <label class="form-label" for="Slug">Created Date</label>
                        <input class="form-control" id="text" type="text" name="c_createdDate" value="<?php echo($rowMain['c_createdDate']) ?>" placeholder="Enter Created Date"  data-sb-validations="required"></input>
                            
                </div>

                <div class="d-grid">
                    <button class="btn btn-success col-sm-2" name="btnSubmit">Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
