<?php
require __DIR__ . "/components/header.php";
require __DIR__ . "/components/navbar.php";
?>

<div class="container my-5">
    <div class="row justify-content-center text-center">
        <div class="col-lg-8">
            <!-- Main Heading -->
            <h1 class="display-4 fw-bold mb-3">Bem vindo ao Barracax2000</h1>

            <!-- Subheading/Tagline -->
            <p class="lead text-muted mb-4">
                Uma API RestFull para transmissão de dados de eventos!
            </p>

            <!-- Call-to-Action Buttons -->
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="/register/create" class="btn btn-primary btn-lg px-4 gap-3">Registrar-se</a>
                <a href="/login/create" class="btn btn-outline-secondary btn-lg px-4">Login</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . "/components/footer.php";
