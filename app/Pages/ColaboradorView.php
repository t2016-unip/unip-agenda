<?php require('Menu.php'); ?>

<div class="container-full container-title bg-blue">
	<div class="space"></div>
    <div class="container">
        <div class="grid-7">
        	<h1>Colaboradores</h1>
		</div>      
		<div class="grid-5 relative">
			<input class="form-field form-field-off search-field" id="iptProcurar" placeholder="Buscar colaborador...">
		</div>
        <div class="grid-12 padding-sm">
            <a href="<?= route('/colaboradores/criar') ?>">
				<button class="button">
					<i class="fas fa-plus"></i> 
					Adicionar colaborador
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
                <th>Nivel</th>
								<th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($colaboradores as $key => $colaborador) { ?>
                <tr>
                  <td><?= $colaborador['id_colaborador'] ?></td>
                  <td><?= $colaborador['nome_colaborador'] ?></td>
                  <td><?= $colaborador['nivel'] == 'admin' ? 'Administrador' : 'Colaborador' ?></td>
									<td><?= $colaborador['flag_status'] ? 'Ativado' : 'Desativada' ?></td>
                  <td class="align-right" style="display: flex; justify-content: flex-end;">
                    <a href="<?= route("/colaboradores/{$colaborador['id_colaborador']}") ?>">
                      <i class="fas fa-pencil-alt"></i> &#160;&#160;
                    </a>
                    <form action="<?= route("/colaboradores/{$colaborador['id_colaborador']}") ?>" method="post">
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