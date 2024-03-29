<!-- Update employee records -->

<?php
require 'dbc.php'; // Requires SQL database connection
session_start(); // session_start to utilize msg.php function
include('includes/header.php');
?>
<div class="container mt-5"> <!-- Main container -->
    <?php include('msg.php'); ?> <!-- Include messaging module and display when set based on msg.php -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Employee
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
                            <form action="eval.php" method="POST">
                                <input type="hidden" name="employee_id" value="<?= $employee['id']; ?>">
                                <div class="mb-3">
                                    <label>Employee Name</label>
                                    <input type="text" name="name" value="<?= $employee['name']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Employee Email</label>
                                    <input type="text" name="email" value="<?= $employee['email']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Employee Phone#</label>
                                    <input type="text" name="phone" value="<?= $employee['phone']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Position</label>
                                    <input type="text" name="position" value="<?= $employee['position']; ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_employee" class="btn btn-primary">Update
                                        Employee</button> <!-- Call method POST in eval.php -->

                                </div>
                            </form>
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
<?php include('includes/footer.php'); ?> <!-- Universal footer -->