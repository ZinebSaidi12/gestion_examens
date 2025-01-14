<?php

namespace App\Controllers;

use App\Models\AccountModel;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function index()
    {
        // Vérifiez si l'utilisateur est connecté
        if (!session()->has('is_logged_in')) {
            return redirect()->to('/login')->with('error', 'You must log in first.');
        }
    
        $userId = session()->get('user_id'); // L'ID de l'utilisateur connecté

        // Créez une instance du modèle UserModel
        $userModel = new UserModel();
    
        // Récupérer les informations de l'utilisateur depuis la base de données
        $user = $userModel->find($userId);  // Recherche de l'utilisateur par son ID
    
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
    
        // Charger la vue avec les données de l'utilisateur
        return view('profile', ['user' => $user]);
    }

    function update()
    {
        // Vérifiez si l'utilisateur est connecté
        if (!session()->has('is_logged_in')) {
            return redirect()->to('/login')->with('error', 'You must log in first.');
        }

        $userId = session()->get('user_id');
        //echo $userId; exit;

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

        // Récupérer les informations mises à jour et rediriger vers la page de profil
        $updatedUser = $userModel->find($userId);

        return redirect()->to('/dashboard')->with('success', 'Profile updated successfully.')->with('user', $updatedUser);
    }    
}
