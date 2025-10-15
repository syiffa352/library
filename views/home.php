<?php
$title = "Home";
include "template/header.php" ?>

<div class="container mt-5 bg-warning p-5 text-center">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <a href="/book">
                <div class="card bg-success text-light m-2">
                    <h1>BOOK</h1>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <a href="/dashboard">
                <div class="card bg-primary text-light m-2">
                    <h1>ADMIN</h1>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include "template/footer.php" ?>