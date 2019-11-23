<?php
    if (!empty($blocos)) {
        foreach ($blocos as $bloco => $agendas) {
            ?>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-kit/2.0.4/css/material-kit.min.css">
            <div class="grid-12 padding-sm">
                <div class="grid-12 padding-sm d-flex-center">
                    <b>Controle de Reservas de Equipamentos - Bloco <?= $bloco ?></b>  
                </div>
                <div class="grid-12 padding-sm d-flex-between">
                    <span><b>Data:</b> <?= $data ?></span>
                    <span><b>Dia da Semana:</b> <?= $diaSemana ?></span>
                </div>
                <div class="grid-12 padding-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <td><b>Professor</b></td>
                                <td><b>Curso</b></td>
                                <td><b>Semestre / Sala</b></td>
                                <td><b>Horário</b></td>
                                <td><b>Equipamentos</b></td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($agendas as $key => $agenda) { ?>
                            <tr>
                                <td>
                                    <?= $agenda['nome_colaborador'] ?>
                                </td>
                                <td>
                                    <?= $agenda['nome_curso'] ?>
                                </td>
                                <td>
                                    <?= $agenda['semestre'] ?> / 
                                    <?= $agenda['nome_sala'] ?>
                                </td>
                                <td>
                                    <small>
                                        <?= $agenda['horario_inicial'] ?> -
                                        <?= $agenda['horario_final'] ?>
                                    </small>
                                </td>
                                <td>
                                    <?= empty($agenda['dispositivos']) ? 'Nenhum' : $agenda['dispositivos'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php } ?>
            <script>
                window.print();
                setTimeout(() => {
                    window.close();
                }, 100);
            </script>
        <?php
    }
    else {
    ?>
        <script>
            alert("Nenhum agendamento para data informada!");
            setTimeout(() => {
                window.close();
            }, 100);
        </script>
    <?php
    }