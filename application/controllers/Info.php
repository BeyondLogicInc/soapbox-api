<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Info extends CI_Controller {
    
    public function index(){
        $this->load->view('about_view');
    }
    
    public function checkSession() {
        $data = $this->session->all_userdata();
        echo json_encode(array('userid'=> $data));
    }
    
    public function getUsers() {
        $query = $this->db->query("SELECT * FROM useraccounts");
        if($query->num_rows() > 0){
            $result = $query->result_array();
            echo json_encode(array('result'=>$result));
        }
    }    
}
