<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
	<div class="space"></div>
    <div class="container">
        <div class="grid-7">
        	<h1>Cursos</h1>
		</div>      
		<div class="grid-5 relative">
			<input class="form-field form-field-off search-field" id="Procurar" placeholder="Buscar curso...">
		</div>
        <div class="grid-12 padding-sm">
            <a href="<?= route('/cursos/criar') ?>">
				<button class="button">
					<i class="fas fa-plus"></i> 
					Adicionar Curso
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
								<th>Curso</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach ($cursos as $key => $curso) { ?>
								<tr>
                                    <td><?= $curso['nome_curso'] ?></td>
									<td class="align-right" style="display: flex; justify-content: flex-end;">
										<a href="<?= route("/cursos/{$curso['id_curso']}") ?>">
											<i class="fas fa-pencil-alt"></i> &#160;&#160; 
										</a>
										<form action="<?= route("/cursos/{$curso['id_curso']}") ?>" method="post">
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