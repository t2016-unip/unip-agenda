<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
    <div class="space"></div>
		<div class="container">
			<div class="grid-12">
				<h1>Editar Curso</h1>
			</div>
		</div>
    <div class="space-sm"></div>
</div>

<div class="container">
	<form action="<?= route("/colaboradores/{$colaborador['id_colaborador']}") ?>" method="post">
		<input type="hidden" name="_method" value="PUT">
		<div class="grid-12 padding-sm">
			<div class="grid-7 padding-sm">
				<div class="grid-12 padding-sm card">
					<div class="grid-12 padding-sm">
						<label class="form-label">Nome:</label>
						<input class="form-field" type="text" name="nome_colaborador" value="<?= $colaborador['nome_colaborador'] ?>" required>
					</div>
					<div class="grid-12 padding-sm">
						<label class="form-label">E-mail:</label>
						<input class="form-field" type="email" name="email" value="<?= $colaborador['email'] ?>">
					</div>
					<div class="grid-6 padding-sm">
						<label class="form-label">Nivel:</label>
						<select name="nivel" id="nivel" class="form-field">
						<?php foreach ($niveis as $nivel => $nome) { ?>
							<option value="<?= $nivel ?>" <?= $colaborador['nivel'] == $nivel ? 'selected' : '' ?>><?= $nome ?></option>
						<?php } ?>
						</select>
					</div>
					<div class="grid-6 padding-sm">
						<label class="form-label">Senha:</label>
						<input class="form-field" type="text" name="senha">
					</div>					
					<div class="grid-5 padding-sm">
						<button type="submit" class="button">Atualizar</button>
					</div>
					<div class="grid-3 padding-sm">
						<label class="form-label">Ativado:</label>
						<input class="form-label" type="checkbox" value="1" name="flag_status" 
							<?= $colaborador['flag_status'] ? 'checked' : '' ?>>
					</div>
					<div class="grid-4 padding-sm">
						<label class="form-label">Trocar senha?</label>
						<input type="checkbox" name="trocar_senha" id="trocar_senha" value="1">
					</div>	
				</div>
			</div>
		</div>
	</form>
</div>