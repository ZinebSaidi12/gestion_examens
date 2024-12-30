<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'comptes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username',
        'password_hash',
        'email',
        'user_id',
        'role_name',
    ];

    protected $validationRules = [
        'username' => 'required|alpha_numeric_space|min_length[3]|max_length[100]|is_unique[comptes.username]',
        'password_hash' => 'required|min_length[8]',
        'email' => 'required|valid_email|is_unique[comptes.email]',
        'role_name' => 'required|in_list[Student,Professor,Admin]',
    ];

    protected $validationMessages = [
        'username' => [
            'required' => 'The username is required.',
            'alpha_numeric_space' => 'The username must only contain alphanumeric characters or spaces.',
            'min_length' => 'The username must be at least 3 characters long.',
            'max_length' => 'The username cannot exceed 100 characters.',
            'is_unique' => 'This username is already taken.',
        ],
        'password_hash' => [
            'required' => 'A password is required.',
            'min_length' => 'The password must be at least 8 characters long.',
        ],
        'email' => [
            'required' => 'An email address is required.',
            'valid_email' => 'The email address provided is not valid.',
            'is_unique' => 'This email address is already registered.',
        ],
        'role_name' => [
            'required' => 'The role is required.',
            'in_list' => 'The role must be one of the following: Student, Professor, Admin.',
        ],
    ];

    /**
     * Save a new account with hashed password
     *
     * @param array $data
     * @return bool|int
     */
    public function saveAccount($data)
    {
        if (!isset($data['password']) || empty($data['password'])) {
            return false; // Reject if no password is provided
        }

        // Hash the password and prepare data for insertion
        $data['password_hash'] = password_hash($data['password'], PASSWORD_DEFAULT);
        unset($data['password']); // Remove the plain password for security

        // Attempt to insert the account into the database
        return $this->insert($data);
    }
}
