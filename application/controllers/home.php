<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    
    public function index(){
        
        $this->load->view("index");
    }
    
    function VMBO(){
        $this->load->view("VMBO");
    }
    
    function HAVO(){
        $this->load->view("HAVO");
    }
    
    function VWO(){
        $this->load->view("VWO");
    }
    
    function about(){
        $this->load->view("about");
    }
    
    function contact(){
        $this->load->view("contact");
    }
    
}