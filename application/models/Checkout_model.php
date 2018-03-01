<?php


class Checkout_model extends CI_Model{
    
    public function save_customer_info($data){
        $this->db->insert('tbl_customer',$data);
        $customer_id=  $this->db->insert_id();
        return $customer_id;
    }
    
    public function save_shipping_info($data){
        $this->db->insert('tbl_shipping',$data);
        $shipping_id=  $this->db->insert_id();
        return $shipping_id;
    }
    
    public function save_payment_info(){
        $data=array();
        $data['payment_method']=  $this->input->post('payment_method');
        $this->db->insert('tbl_payment',$data);
        $sdata=array();
        $sdata['payment_id']=  $this->db->insert_id();
        $this->session->set_userdata($sdata);
    }
    
    public function save_order_info(){
        $data=array();
        $data['customer_id']= $this->session->userdata('customer_id');
        $data['shipping_id']= $this->session->userdata('shipping_id');
        $data['payment_id']= $this->session->userdata('payment_id');
        $data['order_total']= $this->session->userdata('grandtotal');
        $this->db->insert('tbl_order',$data);
        $order_id=  $this->db->insert_id();
        
        foreach($this->cart->contents() as $v_contents){
            $odata=array();
            $odata['order_id']=$order_id;
            $odata['product_id']=$v_contents['id'];
            $odata['product_name']=$v_contents['name'];
            $odata['product_price']=$v_contents['price'];
            $odata['product_sales_quantity']=$v_contents['qty'];
            $this->db->insert('tbl_order_details',$odata);
        }
        $this->cart->destroy();  //Permits you to destroy the cart. This method will likely be called when you are finished processing the customer’s order.
        $sql= "update tbl_product, tbl_order_details
                  set tbl_product.product_quantity = tbl_product.product_quantity - tbl_order_details.product_sales_quantity
                  where tbl_product.product_id = tbl_order_details.product_id
                  and tbl_order_details.order_id = '$order_id' " ;
        $this->db->query($sql);
    }

}
