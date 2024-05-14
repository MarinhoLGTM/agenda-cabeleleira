<?php

namespace App\Controllers;

use App\Models\Cliente_model;
use App\Models\Cabeleireiro_model;
use App\Models\Agendamento_model;

class TesteDatabase extends BaseController
{
    public function index()
    {
        $clienteModel = new Cliente_model();
        $clientes = $clienteModel->findAll();
        echo "<pre>";
        print_r($clientes);
        echo "</pre>";

        $cabeleireiroModel = new Cabeleireiro_model();
        $cabeleireiros = $cabeleireiroModel->findAll();
        echo "<pre>";
        print_r($cabeleireiros);
        echo "</pre>";

        $agendamentoModel = new Agendamento_model();
        $agendamentos = $agendamentoModel->findAll();
        echo "<pre>";
        print_r($agendamentos);
        echo "</pre>";
    }
}
