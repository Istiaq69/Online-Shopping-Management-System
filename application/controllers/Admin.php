<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin  extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $admin_id=  $this->session->userdata('admin_id');
        if($admin_id != NULL){
            redirect('Super_admin');  // set not to back to login
        }
    }
    
    public function index(){
        $this->load->view('admin/admin_login');
    }
    
    public function admin_login_check(){
        
        $admin_email_address=  $this->input->post('admin_email_address'); //istiaq.tushar10@gmail.com
        $admin_password= md5($this->input->post('admin_password')); //pass=123456

        $result=$this->Admin_model->admin_login_check_info($admin_email_address,$admin_password);
//        echo '<pre>';
//        print_r($result);
//        exit();       
        $sdata=array();
        
        if($result){
            $sdata['admin_id']=$result->admin_id;  //page turn over verification
            $sdata['admin_name']=$result->admin_name;
            $this->session->set_userdata($sdata); // to set account name 
            redirect('Super_admin');
        }
        else{
            $sdata['exception']="User ID or Password is Invalid !!";
            $this->session->set_userdata($sdata);
            redirect('Admin');
        }
//        $data=array();
//        $data['admin_maincontent']=  $this->load->view('admin/pages/dashboard_content','',true);
//        $this->load->view('admin/admin_master',$data);
    }
   
}


