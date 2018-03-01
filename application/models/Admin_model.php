<?php

/**
 * Description of Admin_model
 *
 * @author Istiaq Ahmed
 */
class Admin_model extends CI_Model{
    
    public function admin_login_check_info($admin_email_address,$admin_password)
    {
        //Active records query
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address',$admin_email_address);
        $this->db->where('admin_password',$admin_password);
        $query_result=$this->db->get(); //Runs the selection query and returns the result(pick the reference of data)
        $result=$query_result->row(); // returns 1D array data
        //$result=$query_result->result(); returns 2D array data
        return $result;
    }
}
