<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
    <div class="space"></div>
		<div class="container">
			<div class="grid-12">
				<h1>Adicionar Colaborador</h1>
			</div>
		</div>
    <div class="space-sm"></div>
</div>

<div class="container">
    <form action="<?= route('/colaboradores') ?>" method="post">
		<div class="grid-12 padding-sm">
			<div class="grid-7 padding-sm">
				<div class="grid-12 padding-sm card">
					<div class="grid-12 padding-sm">
						<label class="form-label">Nome:</label>
						<input class="form-field" type="text" name="nome_colaborador" required>
					</div>
					<div class="grid-12 padding-sm">
						<label class="form-label">E-mail:</label>
						<input class="form-field" type="email" name="email">
					</div>
					<div class="grid-6 padding-sm">
						<label class="form-label">Nivel:</label>
						<select name="nivel" id="nivel" class="form-field">
						<?php foreach ($niveis as $nivel => $nome) { ?>
							<option value="<?= $nivel ?>"><?= $nome ?></option>
						<?php } ?>
						</select>
					</div>
					<div class="grid-6 padding-sm">
						<label class="form-label">Senha:</label>
						<input class="form-field" type="text" name="senha" required>
					</div>					
					<div class="grid-12 padding-sm">
						<button type="submit" class="button">Adicionar</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>