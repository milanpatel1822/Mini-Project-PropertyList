<?php include "header.php"; ?>


<main class="mt-5">
    <div class="ontainer-fluid px-4">
        <h1 class="mt-4">Add Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Product</li>
        </ol>

        <div class="row col-sm-6">
        <?php 
			include 'config.php';
			$sqlMain="SELECT * FROM product WHERE product_id =".$_GET['product_id'];
    		$result = mysqli_query($con,$sqlMain);
    		$rowMain = mysqli_fetch_assoc($result);
       		//print_r($rowMain)
		?>
            <form id="contactForm" method="post" action="con_edit_product.php">
            <input type="hidden" name="product_id" value="<?php echo($_GET['product_id']); ?>" >
                <div class="mb-3">
                    <label class="form-label" for="Name">Name</label>
                    <input class="form-control" id="text" type="text" name="p_name" value="<?php echo($rowMain['p_name']) ?>" placeholder="Name"
                        data-sb-validations="required,email" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Status">Category</label>
                    <select class="form-control" name="c_id" value="<?php echo($rowMain['c_id']) ?>">
                    <?php
                    include_once("config.php");
                    $sql="SELECT * FROM category";
                    $result=mysqli_query($con, $sql);
                    while($row= mysqli_fetch_assoc($result))
                    {
                ?>
                    	<option value="<?php echo($row['c_id']);?>"><?php echo($row['c_name']);?></option>
                <?php
                    }
                ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Name">Photo</label>
                    <input class="form-control" id="text" type="file" name="p_img" value="<?php echo($rowMain['p_img']) ?>" placeholder="Name"
                        data-sb-validations="required,email" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="Slug">Discription</label>
                    <textarea class="form-control" id="text" type="text" name="p_discription" value="<?php echo($rowMain['p_discription']) ?>"
                        placeholder="Enter Laptop Discription" data-sb-validations="required"></textarea>

                </div>
                <div class="mb-3">
                    <label class="form-label" for="Slug">Price</label>
                    <input class="form-control" id="text" type="text" name="p_price" value="<?php echo($rowMain['p_price']) ?>" placeholder="Enter Price"
                        data-sb-validations="required"></input>

                </div>
        

                <div class="mb-3">
                    <label class="form-label" for="Slug">Created Date</label>
                    <input class="form-control" id="text" type="text" name="p_createdDate" value="<?php echo($rowMain['p_createdDate']) ?>"
                        placeholder="Enter Created Date" data-sb-validations="required"></input>

                </div>

                <div class="d-grid">
                    <button class="btn btn-success col-sm-2" name="btnSubmit">Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>