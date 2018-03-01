<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                         $data = array();
                         $data['slider'] = true;
                         $data['published_product']= $this->Welcome_model->select_all_published_product();
                         $data['featured_product']= $this->Welcome_model->select_all_featured_product();
                         $data['all_published_manufacturer']= $this->Welcome_model->select_all_published_manufacturer_info();
                         $data['maincontent'] = $this->load->view('pages/home_content', $data, true);
                         $this->load->view('master', $data);
                }
                public function product_category($category_id){
                         $data = array();
                         $data['slider'] = true;
                         $data['published_product_by_category']= $this->Welcome_model->select_published_product_by_category_id($category_id);
                         $data['featured_product']= $this->Welcome_model->select_all_featured_product();
                         $data['all_published_manufacturer']= $this->Welcome_model->select_all_published_manufacturer_info();
                         $data['maincontent'] = $this->load->view('pages/category_product', $data, true);
                         $this->load->view('master', $data);
                }
                
                public function product_details($product_id){
                    $data=array();
                    $data['product_info']=$this->Welcome_model->select_product_by_id($product_id);
                    $data['all_published_category']= $this->Welcome_model->select_all_published_category_info();
                    $data['all_published_manufacturer']= $this->Welcome_model->select_all_published_manufacturer_info();
                    $data['maincontent'] = $this->load->view('pages/product_details',$data, true);
                    $this->load->view('master', $data);
 
                }

                public function about_us(){
                        $data=array();
                        $data['maincontent']=  $this->load->view('pages/about','',true);
                        $this->load->view('master',$data);
                }
}
//                    echo "<pre>";
//                    print_r($data['product_info']);
//                    exit();
