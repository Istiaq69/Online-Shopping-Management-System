<?php

class Welcome_model extends CI_Model{
    //put your code here
    
     public function select_all_published_category_info(){
        $this->db->SELECT('*');
        $this->db->FROM('tbl_category');
        $this->db->WHERE('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_all_published_manufacturer_info(){
        $this->db->SELECT('*');
        $this->db->FROM('tbl_manufacturer');
        $this->db->WHERE('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_published_product(){
        $this->db->SELECT('*');
        $this->db->FROM('tbl_product');
        $this->db->WHERE('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_featured_product(){
        $this->db->SELECT('*');
        $this->db->FROM('tbl_product');
        $this->db->WHERE('is_featured', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_product_by_category_id($category_id){
        $this->db->SELECT('*');
        $this->db->FROM('tbl_product');
        $this->db->WHERE('publication_status', 1);
        $this->db->WHERE('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
//    public function select_product_by_id($product_id){
//        $this->db->SELECT('tbl_product.* ,tbl_manufacturer.manufacturer_name');
//        $this->db->FROM('tbl_product');
//        $this->db->join('tbl_manufacturer','tbl_manufacturer.manufacturer_id=tbl_product.product_id');
//        $this->db->WHERE('product_id', $product_id);
//        $query_result = $this->db->get();
//        $result = $query_result->row();
//        return $result;
//    }
    public function select_product_by_id($product_id){
        $this->db->SELECT('tbl_product.* ,tbl_category.category_name,tbl_manufacturer.manufacturer_name');
        $this->db->FROM('tbl_product');
        $this->db->join('tbl_category','tbl_category.category_id=tbl_product.category_id');
        $this->db->join('tbl_manufacturer','tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id');
        $this->db->WHERE('product_id', $product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
//    public function select_product_by_id($product_id){
//        $query="SELECT p.*, c.category_name,m.manufacturer_name FROM tbl_product as p,tbl_category as c,tbl_manufacturer as m "
//                ." WHERE p.category_id=c.category_id AND p.manufacturer_id=m.manufacturer_id "
//                ." AND p.product_id='$product_id' AND p.publication_status=1";
//        
//        $query_result = $this->db->query($query);
//        $result = $query_result->row();
//        return $result;
//    }
    
    
}
