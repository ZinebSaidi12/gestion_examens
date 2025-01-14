<?php

namespace App\Controllers;

use App\Models\AccountModel;

class DashboardController extends BaseController
{
    private function renderDashboard(string $view)
    {
        // Check if the user is logged in
        if (!session()->has('is_logged_in')) {
            return redirect()->to('/login')->with('error', 'You must log in first.');
        }

        $userId = session()->get('account_id');

        $accountModel = new AccountModel();

        // Fetch user profile
        $account = $accountModel
            ->select('comptes.*, users.nom, users.prenom, users.date_of_birth, users.niveau, users.section')
            ->join('users', 'users.id = comptes.user_id')
            ->find($userId);

        if (!$account) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Render the specified view with user data
        return view($view, ['user' => $account]);
    }

    public function index()
    {
        return $this->renderDashboard('dashboard');
    }

    public function dashboard_Content()
    {
        return $this->renderDashboard('dashboard_content');
    }
}
