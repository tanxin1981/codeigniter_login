<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');

/**
 * Class Api
 */

class Api extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');

    }

    public function register_post() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $r = $this->user_model->create_user($username, $email, $password);
        $this->response($r);
    }

    public function login_post() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->user_model->resolve_user_login($username, $password)) {
            $user_id = $this->user_model->get_user_id_from_username($username);
            $user    = $this->user_model->get_user($user_id);

            // set session user datas
            $_SESSION['user_id']      = (int)$user->id;
            $_SESSION['username']     = (string)$user->username;
            $_SESSION['logged_in']    = (bool)true;
            $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
            $_SESSION['is_admin']     = (bool)$user->is_admin;
            $this->response($_SESSION);
        } else {
            $this->response("Wrong username or password.");
        }
    }
}

