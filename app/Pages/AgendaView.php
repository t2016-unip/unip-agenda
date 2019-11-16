<?php 

	require('Menu.php');
	$id = $_SESSION['usuario']['id_colaborador'];
	$admin = !$user = $_SESSION['usuario']['nivel'] == 'user';
?>


<div class="container-full container-title bg-blue">
	<div class="space"></div>
	<div class="container">
		<div class="grid-7">
			<h1>Agendas</h1>
		</div>
		<div class="grid-5 relative">
			<input class="form-field form-field-off search-field" id="iptProcurar" placeholder="Buscar agenda...">
		</div>
		<div class="grid-12 padding-sm">
			<a href="<?= route('/agendas/criar') ?>">
				<button class="button">
					<i class="fas fa-plus"></i>
					Realizar agendamento
				</button>
			</a>
<!-- 	
			<button class="button" onclick="generate()">
				<i class="fas fa-file-download"></i>
					Exportar
			</button>	 -->
			<button class="button" id="myBtn">
				<!-- <i class="fas fa-file-download"></i> -->
					Exportar
			</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<p>Selecione a data desejada</p>
	<br>
	<input type="date" name="bday" id="dat">
			<button class="button" id="myBtn" onclick="generate()">
				<i class="fas fa-file-download"></i>
			</button>
  </div>

</div>
			
			
		</div>
	</div>
	<div class="space-sm"></div>
</div>

<div class="container">
	<div class="grid-12 padding-sm">
		<div class="grid-12 padding-sm">
			<div class="grid-12 padding-sm card" >
				<div class="grid-12 padding-sm" >

										
											<table class="table-u" id="pdf2htmldiv">
												<thead>
													<tr>
														<th>Colaborador</th>
														<th>Dispositivos</th>
														<th>Sala</th>
														<th>Data</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
												<?php foreach ($agendas as $key => $agenda) { 
													if ($agenda['id_colaborador'] != $id && $user) continue;
													$data = json_encode($agenda);
													?>
													<tr title="<?= $agenda['nome_curso'] . (empty($agenda['semestre']) ? '' : " {$agenda['semestre']} sem.") ?>">
														<td><?= $agenda['nome_colaborador'] ?></td>
														<td><?= empty($agenda['dispositivos']) ? 'Nenhum' : $agenda['dispositivos'] ?></td>
														<td><?= $agenda['nome_sala'] ?></td>
														<td><?= date("d/m/Y", strtotime($agenda['data'])) . " {$agenda['horario_inicial']} até {$agenda['horario_final']}" ?></td>
														<td class="align-right" style="display: flex; justify-content: flex-end;">
															<!-- <a href="<?= route("/agendas/{$agenda['id_agenda']}") ?>">
																<i class="fas fa-pencil-alt"></i> &#160;&#160;
															</a> -->

														<?php if ($admin) { ?>
															<form action="<?= route("/agendas/{$agenda['id_agenda']}") ?>" method="post">
																<input type="hidden" name="_method" value="DELETE">
																<button tpye="submit">
																	<i class="far fa-trash-alt"></i>
																</button>
															</form>
														<?php } ?>
														</td>
													</tr>
												<?php } ?>
												</tbody>
											</table>

												<?php
														$data2 = json_encode($agendas);
														echo '<script> var data = '. $data2 .'</script>';
														?>
													
													
				</div>
			</div>
		</div>
	</div>
</div>
