<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
  <div class="space"></div>
  <div class="container">
    <div class="grid-12">
      <h1>Adicionar Dispositivo</h1>
    </div>
  </div>
  <div class="space-sm"></div>
</div>

<div class="container">
  <form action="<?= route('/dispositivos') ?>" method="post">
    <div class="grid-12 padding-sm">
      <div class="grid-7 padding-sm">
        <div class="grid-12 padding-sm card">
          <div class="grid-12 padding-sm">
            <label class="form-label">Nome:</label>
            <input class="form-field" type="text" name="nome_dispositivo" required>
          </div>
          <div class="grid-12 padding-sm">
            <label class="form-label">Categoria:</label>
            <select name="id_categoria" id="id_categoria" class="form-field">
							<option value="NULL">ESCOLHA</option>
						<?php foreach ($categorias as $categoria) { ?>
							<option value="<?= $categoria['id_categoria'] ?>"><?= $categoria['nome_categoria'] ?></option>
						<?php } ?>
						</select>
          </div>
          <div class="grid-12 padding-sm">
            <label class="form-label">Observação:</label>
            <input class="form-field" type="text" name="observacao" required>
          </div>
          <div class="grid-12 padding-sm">
            <button type="submit" class="button">Adicionar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>