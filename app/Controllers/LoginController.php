<?php

namespace App\Controllers;

use App\Models\AccountModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login'); // Charge la vue du formulaire de connexion
    }

    public function authenticate()
    {
        $accountModel = new AccountModel();

        // Récupérer les données POST
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Valider les entrées
        if (!$email || !$password) {
            return redirect()->back()->with('error', 'Email and password are required!');
        }

        // Vérifier si l'utilisateur existe
        $user = $accountModel->where('email', $email)->first();

        if (!$user || !password_verify($password, $user['password_hash'])) {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }

        // Enregistrer les informations utilisateur dans la session
        session()->set([
            'user_id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role_name'],
            'is_logged_in' => true,
        ]);

        // Rediriger vers le tableau de bord
        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
