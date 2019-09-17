<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
    <div class="space"></div>
		<div class="container">
			<div class="grid-12">
				<h1>Editar Sala</h1>
			</div>
		</div>
    <div class="space-sm"></div>
</div>

<div class="container">
	<form action="<?= route("/salas/{$sala['id_sala']}") ?>" method="post">
		<input type="hidden" name="_method" value="PUT">
		<div class="grid-12 padding-sm">
			<div class="grid-7 padding-sm">
				<div class="grid-12 padding-sm card">
					<div class="grid-12 padding-sm">
						<label class="form-label">Nº sala:</label>
						<input class="form-field" type="number" name="numero_sala" value="<?= $sala['numero_sala'] ?>">
					</div>
					<!-- <div class="grid-12 padding-sm">
						<label class="form-label">Descrição:</label>
						<textarea class="form-field"></textarea>
					</div> -->
					<div class="grid-12 padding-sm">
						<button class="button">Atualizar</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>