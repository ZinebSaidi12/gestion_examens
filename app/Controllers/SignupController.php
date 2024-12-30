<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AccountModel;
use CodeIgniter\Controller;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function register()
    {
        // Chargement des modèles
        $userModel = new UserModel();
        $accountModel = new AccountModel();

        // Récupération des données du formulaire
        $data = [
            'nom' => $this->request->getPost('firstName'),
            'prenom' => $this->request->getPost('lastName'),
            'date_of_birth' => $this->request->getPost('dob'),
            'niveau' => $this->request->getPost('level'),
            'section' => $this->request->getPost('section'),
        ];

        // Validation des données utilisateur
        if (!$userModel->insert($data)) {
            return redirect()->back()->with('errors', $userModel->errors());
        }

        // Récupérer l'ID de l'utilisateur inséré
        $userId = $userModel->getInsertID();

        // Données du compte
        $accountData = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email' => $this->request->getPost('email'),
            'user_id' => $userId,
            'role_name' => $this->request->getPost('role'),
        ];

        // Validation et insertion du compte utilisateur
        if (!$accountModel->saveAccount($accountData)) {
            return redirect()->back()->with('errors', $accountModel->errors());
        }

        // Success, rediriger vers la page de connexion ou autre
        return redirect()->to('/login')->with('message', 'Account created successfully!');
    }
}
