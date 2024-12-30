<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'prenom', 'date_of_birth', 'niveau', 'section'];
    protected $validationRules = [
        'nom' => 'required|max_length[100]',
        'prenom' => 'required|max_length[100]',
        'date_of_birth' => 'required|valid_date',
        'niveau' => 'required|max_length[50]',
        'section' => 'required|max_length[50]',
    ];
}
