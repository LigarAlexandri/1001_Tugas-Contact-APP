<?php

include_once 'model/user_model.php';
include_once 'model/contact_model.php';

class DashboardController {
    static function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dashboard/layout', [
                'url' => 'dashboard',
                'contacts' => Contact::select()
            ]);
        }
    }

}