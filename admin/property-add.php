<?php include "header.php"; ?>


<main class="mt-5">
    <div class="ontainer-fluid px-4">
        <h1 class="mt-4">Add Property</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Property</li>
        </ol>

        <div class="row col-sm-6">
            <form id="contactForm" method="post" action="con_add-product.php">
                <div class="mb-3">
                    <label class="form-label" for="Name">Property Name</label>
                    <input class="form-control" id="text" type="text" name="p_name" value="" placeholder="Enter Property Name "
                        data-sb-validations="required" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Status">Category</label>
                    <select class="form-control" name="c_id">
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
                    <input class="form-control" id="text" type="file" name="p_img" value="" placeholder="Name"
                        data-sb-validations="required" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="Slug">Discription</label>
                    <textarea class="form-control" id="text" type="text" name="p_discription" value=""
                        placeholder="Enter Property Discription" data-sb-validations="required"></textarea>

                </div>
                <div class="mb-3">
                    <label class="form-label" for="Slug">Property Price</label>
                    <input class="form-control" id="text" type="text" name="p_price" value="" placeholder="Enter Property Price"
                        data-sb-validations="required"></input>

                </div>
        

                <div class="mb-3">
                    <label class="form-label" for="Slug">Owner Name</label>
                    <input class="form-control" id="text" type="text" name="p_owner_name" value=""
                        placeholder="Enter Owner Name" data-sb-validations="required"></input>

                </div>

                <div class="mb-3">
                    <label class="form-label" for="Slug">Owner email</label>
                    <input class="form-control" id="text" type="text" name="p_owner_email" value=""
                        placeholder="Enter Owner email" data-sb-validations="required"></input>

                </div>
                <div class="mb-3">
                    <label class="form-label" for="Slug">Owner Contact</label>
                    <input class="form-control" id="text" type="text" name=" p_owner_contact" value=""
                        placeholder="Enter Owner Contact" data-sb-validations="required"></input>

                </div>
                <div class="mb-3">
                    <label class="form-label" for="Slug">Agent</label>
                    <input class="form-control" id="text" type="text" name="agent_id" value=""
                        placeholder="Agent" data-sb-validations="required"></input>

                </div>
                <div class="d-grid">
                    <button class="btn btn-success col-sm-2" name="btnSubmit">Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>