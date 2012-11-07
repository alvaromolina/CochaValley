<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Index extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();

        
    }
 
 
    function index()
    {

        $this->load->model('Facebook_m');
        $this->load->model('User_m');

        
        $userdata = $this->session->userdata('fb_data');
        $user = $this->User_m->get($userdata['id']);
        $data = array_merge($user,$userdata);
        $data = array_merge($this->User_m->user_default,$data);
        $data['menu'] = 'home';


        if(isset($_GET['state']) and isset($_GET['code'])){
            $next_url = $this->session->userdata('next_url');
            if(!$next_url){
               $next_url =  base_url().'event/register';
               $this->session->unset_userdata('next_url');
            }
            if($data['id'])
                $data['nexturl'] = $next_url;
            else
                $data['nexturl'] = base_url();

            $this->load->view('loginfb',$data);
            
        }elseif(isset($_GET['error_reason'])){
            $data['nexturl'] = base_url().'event';
            $this->load->view('loginfb',$data);
        }else{
            
            $this->load->view('home',$data);

            //redirect('https://www.facebook.com/groups/240867712700407/');
        }

    }
    
    
    function login(){
        $this->load->model('Facebook_m');
        $data = $this->session->userdata('fb_data');

        $data['menu'] = 'event';
        $this->load->view('login',$data);

    }

  }
?>
