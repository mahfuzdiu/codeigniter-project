<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 12/29/2019
 * Time: 5:02 PM
 */

class ProductController extends CI_Controller
{
    /**
     * ProductController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product','', true);
    }

    public function index()
    {
        $data['products'] = $this->Product->get();
        $this->load->view('products',$data);
    }

    /**
     * @param $productId
     */
    public function productDetails($productId)
    {
        echo json_encode($this->Product->productById($productId));
    }

    /**
     * @param $companyName
     */
    public function productsByCompany($companyName)
    {
        echo 'Company name: ' . $companyName;
    }
}