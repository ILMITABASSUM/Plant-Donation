<?php
class Users extends Controller {
    public function __construct() {
        //
        $this->userModel = $this->model('Userdatabase');
    }

    public function login() {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        $this->view('users/login', $data);
    }
 }
