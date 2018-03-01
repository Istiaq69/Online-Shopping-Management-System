<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
    }
    public function add_to_cart(){
        $qty=  $this->input->post('qty');
        $product_id=  $this->input->post('product_id');
        $product_info=  $this->Cart_model->select_product_by_id($product_id);
        $data = array(
        'id' =>$product_info->product_id,
        'qty' => $qty,
        'price' =>$product_info->new_product_price,
        'name' =>$product_info->product_name,
        'options' => array('image' =>$product_info->product_image)
 //       'image' =>$product_info->product_image
        );
        $this->cart->insert($data); //stores 2D data into session
        redirect('Cart/show_cart'); 
     }
    
    public function show_cart(){
        $data = array();
        $data['maincontent'] = $this->load->view('pages/cart_view', '', true);
        $data['all_published_manufacturer']= $this->Welcome_model->select_all_published_manufacturer_info();
        $this->load->view('master', $data);
    }
    
    public function update_cart(){
        $qty=  $this->input->post('qty');
        $rowid=  $this->input->post('rowid');
        $data=array(
           'rowid' =>$rowid,
           'qty' => $qty     
        );
        $this->cart->update($data);
        redirect('Cart/show_cart');
    }
    
    public function delete_cart($rowid){
        $data=array(
           'rowid' =>$rowid,
           'qty' => 0    
        );
        $this->cart->update($data);
        redirect('Cart/show_cart');
    }
    
    public function apply_coupon(){
        $coupon_code= $this->input->post('coupon_code',true);
        $result=$this->Cart_model->check_coupon_code($coupon_code);
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        if($result->minimum_order_label <= $this->cart->total()){
            if($result->coupon_type == 1){
                $discount=($result->discount_amount *$this->cart->total())/100 ; //percentage duiscount
            }
            else if($result->coupon_type == 2){
                $discount=$result->discount_amount;  //fixed amount discount
            }
            $sdata=array();
            $sdata['discount']=$discount;
            $this->session->set_userdata($sdata);
            redirect('Cart/show_cart');
        }
    }
}
