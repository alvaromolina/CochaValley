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
    
        if(isset($_GET['state']) and isset($_GET['code'])){
            
            if($data['id'])
                $data['nexturl'] = base_url().'event/register';
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

  }
?>
