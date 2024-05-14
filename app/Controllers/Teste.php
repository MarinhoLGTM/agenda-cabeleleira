<?php

namespace App\Controllers;

use App\Models\Cliente_model;

class Teste extends BaseController
{
    public function index()
    {
        $clienteModel = new Cliente_model();

        // Testando a inserção de um cliente
        $data = [
            'nome' => 'Maria',
            'apelido' => 'Silva',
            'email' => 'maria@example.com',
            'contribuinte' => '123456789',
            'telefone' => '123 456 789'
        ];
        $clienteModel->insert($data);

        // Testando a busca por todos os clientes
        $clientes = $clienteModel->findAll();
        print_r($clientes);
    }
}
