<?php

namespace App\Controllers;

use App\Pages\View;
use App\Models\Agenda;
use App\Models\Sala;
use App\Models\Colaborador;
use App\Models\Horario;
use App\Models\Curso;
use App\Models\AgendaDispositivo;
use App\Models\Dispositivo;

class AgendaController
{
    public function index()
    {
        View::render('Agenda', ['agendas' => Agenda::tudo()], [false, '/']);
    }

    public static function create()
    {
        View::render('CriarAgenda', [
            'salas' => Sala::disponiveis(),
            'cursos' => Curso::tudo(),
            'colaboradores' => Colaborador::disponiveis(),
            'horarios' => Horario::tudo()
        ], [false, '/'], true);
    }

    public function store($request)
    {
        $dispositivos = json_decode($request['dispositivos']);
        unset($request['dispositivos']);
        $agenda = Agenda::salvar($request);
        foreach ($dispositivos as $id) {
            $array = ['id_dispositivo' => $id, 'id_agenda' => $agenda['id_agenda']];
            AgendaDispositivo::salvar($array);
        }
        redirecionar('/agendas/criar');
    }

    public function destroy($id)
    {
        Agenda::excluir($id);
        redirecionar('/agendas');
    }
    
    public function salas($request) {
        if (empty($request['id_sala']))
            return response(['mensagem' => 'Necessário a sala'], 401);

        if (empty($request['id_horario']))
            return response(['mensagem' => 'Necessário o horário'], 401);

        $diasAgendado = Agenda::diasAgendado($request);
        $naoDisponiveis = [];
        foreach ($diasAgendado as $agenda) $naoDisponiveis[] = $agenda['data'];

        $dias = [];
        for ($i=0; $i < 8; $i++) { 
            $dia = alterarData('', '+', $i, 'days', 'Y-m-d');
            if (!in_array($dia, $naoDisponiveis))
                $dias[] = [
                    'value' => $dia,
                    'text' => date('d/m/Y', strtotime($dia))
                ];
        }
        
        return response($dias);
    }

    public function dispositivos($request) {
        if (empty($request['data']))
            return response(['mensagem' => 'Necessário a data'], 401);

        if (empty($request['id_horario']))
            return response(['mensagem' => 'Necessário o horário'], 401);

        $diasAgendado = AgendaDispositivo::usados($request);
        $naoDisponiveis = [];
        foreach ($diasAgendado as $agenda) $naoDisponiveis[] = $agenda['id_dispositivo'];

        $dispositivos = [];
        foreach (Dispositivo::all() as $dispositivo) {
            $dias = [];
            if (!in_array($dispositivo['id_dispositivo'], $naoDisponiveis))
                $dispositivos[] = [
                    'value' => $dispositivo['id_dispositivo'],
                    'text' => $dispositivo['nome_dispositivo']
                ];
        }
        return response($dispositivos); 
    }
}
