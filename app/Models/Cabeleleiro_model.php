<?php

namespace App\Models;

use CodeIgniter\Model;

class Cabeleireiro_model extends Model
{
    protected $table = 'cabeleireiros';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'email', 'telefone'];
}
