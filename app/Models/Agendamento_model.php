<?php

namespace App\Models;

use CodeIgniter\Model;

class Agendamento_model extends Model
{
    protected $table = 'agendamentos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cliente_id', 'cabeleireiro_id', 'data_agendamento'];
}
