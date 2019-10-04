<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
    <div class="space"></div>
		<div class="container">
			<div class="grid-12">
				<h1>Adicionar Bloco</h1>
			</div>
		</div>
    <div class="space-sm"></div>
</div>

<div class="container">
    <form action="<?= route('/blocos') ?>" method="post">
		<div class="grid-12 padding-sm">
			<div class="grid-7 padding-sm">
				<div class="grid-12 padding-sm card">
					<div class="grid-12 padding-sm">
						<label class="form-label">Nº bloco:</label>
						<input class="form-field" type="text" name="nome_bloco">
					</div>
					<!-- <div class="grid-12 padding-sm">
						<label class="form-label">Descrição:</label>
						<textarea class="form-field"></textarea>
					</div> -->
					<div class="grid-12 padding-sm">
						<button class="button">Adicionar</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>