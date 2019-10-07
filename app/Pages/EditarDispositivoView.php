<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
  <div class="space"></div>
  <div class="container">
    <div class="grid-12">
      <h1>Editar Dispositivo</h1>
    </div>
  </div>
  <div class="space-sm"></div>
</div>

<div class="container">
  <form action="<?= route("/dispositivos/{$dispositivo['id_dispositivo']}") ?>" method="post">
    <input type="hidden" name="_method" value="PUT">
    <div class="grid-12 padding-sm">
      <div class="grid-7 padding-sm">
        <div class="grid-12 padding-sm card">
          <div class="grid-12 padding-sm">
            <label class="form-label">Nome:</label>
            <input class="form-field" type="text" name="nome_dispositivo" value="<?= $dispositivo['nome_dispositivo'] ?>" required>
          </div>
          <div class="grid-12 padding-sm">
            <label class="form-label">Tipo:</label>
            <input class="form-field" type="text" name="tipo" value="<?= $dispositivo['tipo'] ?>" required>
          </div>
          <div class="grid-12 padding-sm">
            <label class="form-label">Observação:</label>
            <input class="form-field" type="text" name="observacao" value="<?= $dispositivo['observacao'] ?>" required>
          </div>
          <div class="grid-12 padding-sm">
            <label class="form-label">Ativada:</label>
            <input class="form-label" type="checkbox" value="1" name="flag_status" <?= $dispositivo['flag_status'] ? 'checked' : '' ?>>
          </div>
          <div class="grid-12 padding-sm">
            <button class="button">Atualizar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>