<?php include "header.php"; ?>


<main class="mt-5">
    <div class="ontainer-fluid px-4">
        <h1 class="mt-4">Add User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">user</li>
        </ol>

        <div class="row col-sm-6">
            <form id="contactForm" method="post" action="con_add-user.php">
                <div class="mb-3">
                    <label class="form-label" for="Name">Name</label>
                    <input class="form-control" id="text" type="text" name="name" placeholder="Name"
                        data-sb-validations="required" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Name">Email</label>
                    <input class="form-control" id="email" type="email" name="email"  placeholder="Email"
                        data-sb-validations="required" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Name">Password</label>
                    <input class="form-control" id="password" type="text" name="password"  placeholder="Password"
                        data-sb-validations="required" />
                </div>

                <div class="d-grid">
                    <button class="btn btn-success col-sm-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>