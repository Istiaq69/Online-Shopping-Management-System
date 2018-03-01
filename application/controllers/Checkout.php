<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller{
    //put your code here
    public function customer_registration(){
        $data=array();
        $data['maincontent']= $this->load->view('pages/checkout','',true);
        $data['all_published_manufacturer']= $this->Welcome_model->select_all_published_manufacturer_info();
        $this->load->view('master',$data);
    }
    
    public function save_customer(){
        $data=array();
        $data['first_name']=  $this->input->post('first_name');
        $data['last_name']=  $this->input->post('last_name');
        $data['email_address']=  $this->input->post('email_address');
        $data['password']=  md5($this->input->post('password'));
        $data['company']=  $this->input->post('company');
        $data['mobile_number']=  $this->input->post('mobile_number');
        $data['address']=  $this->input->post('address');
        $data['city']=  $this->input->post('city');
        $data['country']=  $this->input->post('country');
        $data['zip_code']=  $this->input->post('zip_code');
        $customer_id= $this->Checkout_model->save_customer_info($data);
       
        $sdata=array();
        $sdata['customer_id']=$customer_id;
        $sdata['customer_name']= $data['first_name'].' '.$data['last_name'] ;
        $this->session->set_userdata($sdata);
        redirect('Checkout/shipping');
    }
    
    public function shipping(){
        $data=array();
        $data['maincontent']= $this->load->view('pages/shipping','',true);
        $data['all_published_manufacturer']= $this->Welcome_model->select_all_published_manufacturer_info();
        $this->load->view('master',$data);
    }
    
    public function save_shipping(){
        $data=array();
        $data['shipping_name']=  $this->input->post('shipping_name');   //shipping_name can be company_name or customer_name.
        $data['email_address']=  $this->input->post('email_address');
        $data['mobile_number']=  $this->input->post('mobile_number');
        $data['address']=  $this->input->post('address');
        $data['city']=  $this->input->post('city');
        $data['country']=  $this->input->post('country');
        $data['zip_code']=  $this->input->post('zip_code');
        $shipping_id= $this->Checkout_model->save_shipping_info($data);
       
        $sdata=array();
        $sdata['shipping_id']=$shipping_id;
        $this->session->set_userdata($sdata);
        redirect('Checkout/payment');
    }
    
    public function payment(){
        $data=array();
        $data['maincontent']= $this->load->view('pages/payment','',true);
        $data['all_published_manufacturer']= $this->Welcome_model->select_all_published_manufacturer_info();
        $this->load->view('master',$data);
    }
    
    public function confirm_order(){
        $this->Checkout_model->save_payment_info(); // Store data into three table together
        $payment_method=  $this->input->post('payment_method');
        
        if($payment_method == 'cash_on_delivery'){
            $this->Checkout_model->save_order_info();
            
            redirect("Checkout/order_successful");
        }
        else if($payment_method == 'paypal'){
            $this->Checkout_model->save_order_info();
            $this->load->view('htmlWebsiteStandardPayemnt');
        
        }
    }
    public function order_successful(){
        $data=array();
        $data['maincontent']= $this->load->view('pages/order_successful','',true);
        $data['all_published_manufacturer']= $this->Welcome_model->select_all_published_manufacturer_info();
        $this->load->view('master',$data);
    }
}
