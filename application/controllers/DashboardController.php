<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 12/31/2019
 * Time: 3:26 PM
 */

class DashboardController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        if(!$this->session->status)
            redirect('login');
    }

    function index()
    {
        echo 'dashboard';
    }
}