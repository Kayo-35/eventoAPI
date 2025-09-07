<?php
require __DIR__ . "/../components/header.php";
require __DIR__ . "/../components/navbar.php";
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0" style="margin-top: 5rem;">
                <div class="card-body p-4">
                    <h3 class="card-title text-center mb-4">Log-In</h3>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Log-in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require __DIR__ . "/../components/footer.php";
