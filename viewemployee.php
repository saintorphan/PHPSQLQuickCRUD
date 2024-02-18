<?php 
require 'dbc.php';
include('includes/header.php'); 
?>

    <div class="containter mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Employee
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>

                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $employee_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM employees WHERE id='$employee_id' ";
                            $query_run = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                $employee = mysqli_fetch_array($query_run);
                                ?>
                                <div class="mb-3">
                                    <label>Employee Name</label>
                                    <p class="form-control">
                                        <?= $employee['name']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Employee Email</label>
                                    <p class="form-control">
                                        <?= $employee['email']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Employee Phone#</label>
                                    <p class="form-control">
                                        <?= $employee['phone']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Position</label>
                                    <p class="form-control">
                                        <?= $employee['position']; ?>
                                    </p>
                                </div>
                                <?php
                            } else {
                                echo "<h4>ID Not Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>