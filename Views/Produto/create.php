<?php
view('components/header');
view('components/navbar');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0" style="margin-top: 5rem;">
                <div class="card-body p-4">
                    <h3 class="card-title text-center mb-4">Cadastro de Barraca</h3>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="number" class="form-control" id="id" name="id" required>
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor</label>
                            <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
                        </div>
                        <div class="mb-3">
                            <label for="qtd" class="form-label">Quantidade</label>
                            <input type="number" class="form-control" id="qtd" name="qtd" required>
                        </div>
                        <div class="mb-3">
                            <label for="id_barraca" class="form-label">ID Barraca</label>
                            <input type="number" class="form-control" id="id_barraca" name="id_barraca" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php view('components/footer') ?>
