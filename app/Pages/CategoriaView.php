<?php require('Menu.php'); ?>

<div class="container-full container-title bg-blue">
  <div class="space"></div>
  <div class="container">
    <div class="grid-7">
      <h1>Categorias</h1>
    </div>
    <div class="grid-12 padding-sm">
      <a href="<?= route('/categorias/criar') ?>">
        <button class="button">
          <i class="fas fa-plus"></i>
          Adicionar Categoria
        </button>
      </a>
    </div>
  </div>
  <div class="space-sm"></div>
</div>


<div class="container">
  <div class="grid-12 padding-sm">
    <div class="grid-12 padding-sm">
      <div class="grid-12 padding-sm card">
        <div class="grid-12 padding-sm">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categorias as $key => $categoria) { ?>
                <tr>
                  <td><?= $categoria['id_categoria'] ?></td>
                  <td><?= $categoria['nome_categoria'] ?></td>
                  <td class="align-right" style="display: flex; justify-content: flex-end;">
                    <a href="<?= route("/categorias/{$categoria['id_categoria']}") ?>">
                      <i class="fas fa-pencil-alt"></i> &#160;&#160;
                    </a>
                    <form action="<?= route("/categorias/{$categoria['id_categoria']}") ?>" method="post">
                      <input type="hidden" name="_method" value="DELETE">
                      <button tpye="submit">
                        <i class="far fa-trash-alt"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>