<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class News extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();

        
    }
 
    
    public function index(){
        $this->load->model('Facebook_m');
        $data = array();
        $data = $this->session->userdata('fb_data');
        $this->load->view('news', $data);
            
    }

  
    


    



  }
?>