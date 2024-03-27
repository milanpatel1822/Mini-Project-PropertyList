<?php include "header.php"; ?>


<main class="mt-5">
    <div class="ontainer-fluid px-4">
        <h1 class="mt-4">Add Category</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>

        <div class="row col-sm-6">
            <form id="contactForm" method="post" action="con_category-add.php" >
                
                <div class="mb-3">
                    <label class="form-label" for="Slug">Category Name</label>
                    <input class="form-control" id="text" type="text" name="c_name" value="" placeholder="Enter Category Name"  data-sb-validations="required"></input>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Name">Category Img</label>
                    <input class="form-control" id="text" type="file" name="c_img" value="" placeholder="Name" data-sb-validations="required" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Slug">Created Date</label>
                        <input class="form-control" id="text" type="text" name="c_createdDate" value="" placeholder="Enter Created Date"  data-sb-validations="required"></input>
                            
                </div>

                <div class="d-grid">
                    <button class="btn btn-success col-sm-2" name="btnSubmit" type="submit">Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
