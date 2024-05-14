<?php

namespace App\Models;

use CodeIgniter\Model;

class Cliente_model extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'apelido', 'email', 'contribuinte', 'telefone'];
}
