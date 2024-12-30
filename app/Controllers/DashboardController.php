<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Vérifiez si l'utilisateur est connecté
        if (!session()->has('is_logged_in')) {
            return redirect()->to('/login')->with('error', 'You must log in first.');
        }

        // Chargez la vue du tableau de bord
        return view('dashboard', ['username' => session()->get('username')]);
    }
}
