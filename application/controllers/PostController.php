<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 12/30/2019
 * Time: 3:44 PM
 */

class PostController extends CI_Controller
{
    public function getPosts()
    {
        $this->load->library('RequestHandler');
        $posts = RequestHandler::sendRequest('get', 'https://jsonplaceholder.typicode.com/todos/1');
        echo  $posts;
    }
}