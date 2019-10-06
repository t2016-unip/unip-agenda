<?php require('Menu.php') ?>

<div class="container-full container-title bg-blue">
    <div class="space"></div>
		<div class="container">
			<div class="grid-12">
				<h1>Agendamento</h1>
			</div>
		</div>
    <div class="space-sm"></div>
</div>

<div class="container">
	<form action="<?= route('/agendas') ?>" method="post">
		<div class="grid-12 padding-sm">
			<div class="grid-7 padding-sm">
				<div class="grid-12 padding-sm card">
					<?php if ($_SESSION['usuario']['nivel'] == 'user') { ?>
					<input type="hidden" name="id_colaborador" value="<?= $_SESSION['usuario']['id_colaborador'] ?>">
					<?php } else { ?>
						<div class="grid-12 padding-sm">
							<label class="form-label">Colaborador<b>*</b>:</label>
							<select name="id_colaborador" id="id_colaborador" class="form-field">
							<?php foreach ($colaboradores as $colaborador) { ?>
								<option value="<?= $colaborador['id_colaborador'] ?>"
									<?= $colaborador['id_colaborador'] != $_SESSION['usuario']['id_colaborador'] ? '' : 'checked' ?>>
									<?= $colaborador['nome_colaborador'] ?>
								</option>
							<?php } ?>
							</select>
						</div>
					<?php } ?>
					<div class="grid-12 padding-sm">
						<label class="form-label">Sala<b>*</b>:</label>
						<select name="id_sala" id="id_sala" class="form-field">
							<option value="NULL">ESCOLHA</option>
						<?php foreach ($salas as $sala) { ?>
							<option value="<?= $sala['id_sala'] ?>"><?= $sala['nome_sala'] ?></option>
						<?php } ?>
						</select>
					</div>
					<div class="grid-8 padding-sm">
						<label class="form-label">Curso<b>*</b>:</label>
						<select name="id_curso" id="id_curso" class="form-field">
							<option value="NULL">ESCOLHA</option>
						<?php foreach ($cursos as $curso) { ?>
							<option value="<?= $curso['id_curso'] ?>"><?= $curso['nome_curso'] ?></option>
						<?php } ?>
						</select>
					</div>
					<div class="grid-4 padding-sm">
						<label class="form-label">Semestre:</label>
						<input class="form-field" type="text" name="semestre">
					</div>
					<div class="grid-6 padding-sm">
						<label class="form-label">Horario<b>*</b>:</label>
						<select name="id_horario" id="id_horario" class="form-field">
							<option value="NULL">ESCOLHA</option>
						<?php foreach ($horarios as $horario) { ?>
							<option value="<?= $horario['id_horario'] ?>"><?= "{$horario['horario_inicial']} - {$horario['horario_final']}" ?></option>
						<?php } ?>
						</select>
					</div>
					<div class="grid-6 padding-sm">
						<label class="form-label">Data:</label>
						<select name="data" id="data" class="form-field">
							<option value="NULL">Preencha todos campos</option>
						</select>
					</div>
					<div class="grid-12 padding-sm">
						<button type="button" class="button" id="btnVoltar">Voltar</button>
						<button class="button" id="btnSubmit" disabled>Selecione os campos</button>
					</div>
				</div>
			</div>
			<div class="grid-5 padding-sm">
				<input type="hidden" name="dispositivos" id="iptDispositivos" value="">
				<div class="grid-12 padding-sm card">
					<div class="grid-12 padding-sm">
						<h3>Dispositivos:</h2>
					</div>
					<div class="grid-12 padding-sm" id="dispositivos">
						<div class="alert">
							Selecione uma data para visualizar disponíveis.
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>