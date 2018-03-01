<?php

class Cart_model extends CI_Model{
    
    public function select_product_by_id($product_id){
        $this->db->SELECT('*');
        $this->db->FROM('tbl_product');
        $this->db->WHERE('product_id',$product_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function check_coupon_code($coupon_code){
        $this->db->SELECT('*');
        $this->db->FROM('tbl_coupon');
        $this->db->WHERE('coupon_code',$coupon_code);
        $this->db->WHERE('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
}
