
<div class="container-full container-title bg-blue">
	<div class="space"></div>
    <div class="container">
        <div class="grid-7">
        	<h1>Dispositivos</h1>
		</div>      
		<div class="grid-5 relative">
			<input class="form-field form-field-off search-field" id="iptProcurar" placeholder="Buscar sala...">
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
								<th>Sala</th>
								<th>Bloco</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach ($dispositivos as $key => $dispositivo) { ?>
								<tr>
                                    <td><?= $sala['id_dispositivo'] ?></td>
									<td><?= $sala['nome_dispositivo'] ?></td>
									<td><?= $sala['tipo'] ?></td>
									<td><?= $sala['observacao'] ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>