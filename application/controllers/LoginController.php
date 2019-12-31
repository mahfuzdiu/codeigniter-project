<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 12/31/2019
 * Time: 1:50 PM
 */

class LoginController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    function index()
    {
        if(!$this->session->status){
            $this->load->view('login');
        }else
            redirect('dashboard');
    }

    function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($email == 'admin@admin.com' && $password == 'admin'){
            $this->session->set_userdata([
                'email' => 'admin@admin.com',
                'status' => true
            ]);

            echo 'loged in';
        }else{
            redirect('login');
        }
    }

    function logOut()
    {

    }

}