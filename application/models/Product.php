<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 12/30/2019
 * Time: 11:17 AM
 */

class Product extends CI_Model
{
    /**
     * @return mixed
     */
    public function get()
    {
        return $this->db->get('products')->result();
    }

    /**
     * @param $productId
     * @return mixed
     */
    public function productById($productId)
    {
        return $this->db->get_where('products', ['id' => $productId])->result();
    }
}