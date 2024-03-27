<?php include("header.php")?>


<div class="container-fluid mt-2">
                    <div class="container-fluid px-4">
                        <h1 class="mt-1">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Users
                                        <?php 
                                            include_once('config.php');
                                            $dash_category_query = "SELECT * from user";
                                            $dash_category_query_run = mysqli_query($con,$dash_category_query);

                                            if($category_total = mysqli_num_rows($dash_category_query_run)){
                                                echo ' <h4 class="mb-0">'.$category_total.'</h4>';
                                            }
                                            else{
                                                echo ' <h4 class="mb-0">No Data</h4>';
                                            }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Categorys
                                    <?php 
                                            include_once('config.php');
                                            $dash_category_query = "SELECT * from category";
                                            $dash_category_query_run = mysqli_query($con,$dash_category_query);

                                            if($category_total = mysqli_num_rows($dash_category_query_run)){
                                                echo ' <h4 class="mb-0">'.$category_total.'</h4>';
                                            }
                                            else{
                                                echo ' <h4 class="mb-0">No Data</h4>';
                                            }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Property
                                    <?php 
                                            include_once('config.php');
                                            $dash_category_query = "SELECT * from product";
                                            // $dash_category_query_run = mysqli_query($con,$dash_category_query);

                                            if($category_total = mysqli_num_rows($dash_category_query_run)){
                                                echo ' <h4 class="mb-0">'.$category_total.'</h4>';
                                            }
                                            else{
                                                echo ' <h4 class="mb-0">No Data</h4>';
                                            }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Contact Messages 
                                    <h4 class="mb-0">2</h4>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>   
                        
</body>
</html>