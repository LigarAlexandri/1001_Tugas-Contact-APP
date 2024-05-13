<?php

include_once 'model/user_model.php';

class AuthController {
    public function login() {
        return view('auth_page/login');
    }

    static function register() {
        view('auth_page/layout', ['url' => 'register']);
    }

    static function saveLogin() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'username' => $post['username'], 
            'password' => $post['password']
        ]);
        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.'dashboard');
        }
        else {
            header('Location: '.BASEURL.'?failed=true');
        }
    }

    // static function saveEdit()
    // {
    //     if (!isset($_SESSION['user'])) {
    //         header('Location: ' . BASEURL . 'login?auth=false');
    //         exit;
    //     } else {
    //         $post = array_map('htmlspecialchars', $_POST);
    //         $contact = Contact::update([
    //             'id' => $post['id'],
    //             'phone' => $post['phone'],
    //             'name' => $post['name']
    //         ]);

    //         if ($contact) {
    //             header('Location: ' . BASEURL . 'dashboard');
    //         } else {
    //             header('Location: ' . BASEURL . 'contacts/edit?editFailed=true');
    //         }
    //     }
    // }
}
?>
