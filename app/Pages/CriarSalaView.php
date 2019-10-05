<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
    <div class="space"></div>
		<div class="container">
			<div class="grid-12">
				<h1>Adicionar Sala</h1>
			</div>
		</div>
    <div class="space-sm"></div>
</div>

<div class="container">
    <form action="<?= route('/salas') ?>" method="post">
		<div class="grid-12 padding-sm">
			<div class="grid-7 padding-sm">
				<div class="grid-12 padding-sm card">
					<div class="grid-6 padding-sm">
						<label class="form-label">Nº sala:</label>
						<input class="form-field" type="number" name="numero_sala" required>
					</div>
					<div class="grid-6 padding-sm">
						<label class="form-label">Bloco:</label>
						<select name="id_bloco" id="id_bloco" class="form-field">
							<option value="NULL">ESCOLHA</option>
						<?php foreach ($blocos as $bloco) { ?>
							<option value="<?= $bloco['id_bloco'] ?>"><?= $bloco['nome_bloco'] ?></option>
						<?php } ?>
						</select>
					</div>
					<div class="grid-12 padding-sm">
						<button type="submit" class="button">Adicionar</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>