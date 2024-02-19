<!-- Add a new employee -->

<?php
session_start(); // session_start to utilize msg.php function
include('includes/header.php'); // Include universal header
?>
<div class="container mt-5"> <!-- Main container -->
    <?php include('msg.php'); ?>  <!-- Include messaging module and display when set based on msg.php -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Employee
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="eval.php" method="POST">
                        <div class="mb-3">
                            <label>Employee Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Employee Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Employee Phone#</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_employee" class="btn btn-primary">Save Employee</button> <!-- Call method POST in eval.php -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?> <!-- Universal footer -->