<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller{
    
    public function index(){
        
        $this->load->view("index_admin");
    }
    
    
}