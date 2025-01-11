<?php

namespace App\Controllers;

use App\Models\AccountModel;
use App\Models\UserModel;

class ProfileController extends BaseController
{
public function index(){    // Vérifiez si l'utilisateur est connecté
    if (!session()->has('is_logged_in')) {
        return redirect()->to('/login')->with('error', 'You must log in first.');
    }

    $userId = session()->get('user_id'); // L'ID de la table `comptes`

    $accountModel = new AccountModel();

    // Récupérer les informations du compte et de l'utilisateur
    $account = $accountModel
        ->select('comptes.*, users.nom, users.prenom, users.date_of_birth, users.niveau, users.section')
        ->join('users', 'users.id = comptes.user_id') // Jointure avec la table `users`
        ->find($userId);

    if (!$account) {
        return redirect()->back()->with('error', 'User not found.');
    }

    // Charger la vue avec les informations complètes
    return view('profile', ['user' => $account]);
}

    public function update()
    {
        // Vérifiez si l'utilisateur est connecté
        if (!session()->has('is_logged_in')) {
            return redirect()->to('/login')->with('error', 'You must log in first.');
        }

        $userId = session()->get('user_id');

        $userModel = new UserModel();

        // Valider les données de la requête
        $data = $this->request->getPost();
        $validationRules = [
            'nom' => 'required|alpha_space',
            'prenom' => 'required|alpha_space',
            'date_of_birth' => 'required|valid_date',
            'niveau' => 'required|alpha_numeric_space',
            'section' => 'required|alpha_numeric_space',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Mettre à jour les informations utilisateur
        $userModel->update($userId, $data);

        return redirect()->to('/profile')->with('success', 'Profile updated successfully.');
    }
}
