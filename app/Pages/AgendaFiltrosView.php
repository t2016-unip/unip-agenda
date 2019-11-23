<?php 
	require('Menu.php');
?>

<div class="container-full container-title bg-blue">
	<div class="space"></div>
	<div class="container">
		<div class="grid-7">
			<h1>Gerar relatório</h1>
		</div>
	</div>
	<div class="space-sm"></div>
</div>

<div class="container">
	<div class="grid-12 padding-sm">
		<div class="grid-12 padding-sm">
			<div class="grid-12 padding-sm card" >
				<form action="<?= route('/agendas/relatorio') ?>" method="POST" target="_blank">
					<div class="grid-4 padding-sm">
						<label class="form-label">Data:</label>
						<input class="form-field" type="date" name="data" value="<?= alterarData('', '+', 0, 'days', 'Y-m-d') ?>" required>
					</div>
					<div class="grid-4 padding-sm">
						<br>
						<button type="submit" class="button">Exportar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>