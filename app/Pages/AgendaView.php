<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
	<div class="space"></div>
	<div class="container">
		<div class="grid-7">
			<h1>Agendar</h1>
		</div>
		<div class="grid-5 relative">
			<input class="form-field form-field-off search-field" id="iptProcurar" placeholder="Buscar bloco...">
		</div>
		<div class="grid-12 padding-sm">
			<a href="<?= route('/blocos/criar') ?>">
				<button class="button">
					<i class="fas fa-plus"></i>
					Adicionar bloco
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
								<th>Agendas</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>