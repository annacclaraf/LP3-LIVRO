<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Editar Genero</h3>
        </div>

        <form action="/lp3_projeto/genero/editar?id=<?= $dado['id'] ?>" method="POST" class="card-form">
              <div class="form-group">
                <label for="filme">Nome:</label>
                <input type="text" id="nome" name="nome"  value="<?= htmlspecialchars($dado['nome']) ?>"required class="form-control" placeholder="Ex: Moana">
            </div>

            <div class="form-group">
                <label for="diretor">Descricao:</label>
                <input type="text" id="descricao" name="descricao" value="<?= htmlspecialchars($dado['descricao']) ?>" required class="form-control" placeholder="Ex: Walter Salles">
            </div>


            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/clientes" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>