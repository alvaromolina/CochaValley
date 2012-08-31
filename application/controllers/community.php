<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Community extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();

        
    }
 
    
    public function index(){
        $this->load->model('Facebook_m');
        $data = array();
        $data = $this->session->userdata('fb_data');
        
        if (!empty($_GET['kw'])) {
            $keyword = $_GET['kw'];  
        } else {
            $keyword = '';            
        }
        
        $this->load->library('Mongo_db');
        
        $users = $this->mongo_db
            ->like('tags', $keyword, true, true)
            ->get('user');
        
        $data['users'] = $users;
        
        $data['keyword'] = $keyword;
        $data['menu'] = 'community';
        
        if($data['id'])
            $this->load->view('connect', $data);
        else
            $this->load->view('login', $data);
            
    }

  
    


    



  }
?>