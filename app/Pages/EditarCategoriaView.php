<?php require('Menu.php'); ?>

<div class="container-full container-title bg-blue">
  <div class="space"></div>
  <div class="container">
    <div class="grid-12">
      <h1>Editar Categoria</h1>
    </div>
  </div>
  <div class="space-sm"></div>
</div>

<div class="container">
  <form action="<?= route("/categorias/{$categoria['id_categoria']}") ?>" method="post">
    <input type="hidden" name="_method" value="PUT">
    <div class="grid-12 padding-sm">
      <div class="grid-7 padding-sm">
        <div class="grid-12 padding-sm card">
          <div class="grid-12 padding-sm">
            <label class="form-label">Nome:</label>
            <input class="form-field" type="text" name="nome_categoria" value="<?= $categoria['nome_categoria'] ?>" required>
          </div>
          <div class="grid-12 padding-sm">
            <button type="submit" class="button">Atualizar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>