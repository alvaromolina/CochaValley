<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Event extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();

        
    }
 
 
 
    function index()
    {
       
        $this->load->model('Facebook_m');
        $this->load->model('User_m');
        $userdata = $this->session->userdata('fb_data');
        $data = array_merge($this->User_m->user_default,$userdata);
        $this->load->view('index',$data);

    }
    
    
    function register()
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
                $data['nexturl'] = base_url().'event';

            $this->load->view('loginfb',$data);
            
        }elseif(isset($_GET['error_reason'])){
            $data['nexturl'] = base_url().'index';
            $this->load->view('loginfb',$data);
        }else{
            if($data['id']){
                $data['role'] = is_array($data['role']) ? $data['role'] : array();
                $data['looking'] = is_array($data['looking']) ? $data['looking'] : array();
                $this->load->view('register',$data);
            }
            else
                $this->load->view('index',$data);
        }
    }
    
    public function registerUser(){
        
        $_POST['name'] = $_POST['first_name'].' '.$_POST['last_name'];
        $data = $_POST;
        $userdata = $this->session->userdata('fb_data');
        $data = array_merge($userdata,$data);
        $this->load->model('user_m');
        $this->user_m->set($data);
        $this->load->model('Facebook_m');
        $this->load->view('index',$data);

    }
    
    
    public function connect(){
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
        
        
        if($data['id'])
            $this->load->view('connect', $data);
        else
            $this->load->view('login', $data);

    }
    
    public function logout()
    {
        
        $this->load->model('Facebook_m');

        $this->Facebook_m->facebook->destroySession(null);
        //setcookie('fbs_'.$this->Facebook_m->facebook->getAppId(), '', time()-100, '/', 'localhost');
        session_destroy();
        $this->session->sess_destroy();
        redirect(base_url().'event');
    
    }
    
    public function privacy(){
        $this->load->view('privacy');
        
    }
    public function tos(){
        $this->load->view('tos');
        
    }
    
    function backup()
    {
       
        $this->load->model('Facebook_m');
        
        $this->load->library('openid');
        
        $this->load->library('Mongo_db');
        
        $us = $this->mongo_db->get('u');



        $openid = new Openid("localhost");

       
        $data = array();
                
        if ($openid->mode) {
            if ($openid->mode == 'cancel') {
                
                echo "User has canceled authentication !";
                
                            $openid->identity = 'https://www.google.com/accounts/o8/id';
            $openid->required = array(
            'namePerson/first',
            'namePerson/last',
            'contact/email',
            );
            $openid->returnUrl = 'http://localhost/cochavalley';
            $data['googleloginurl'] = $openid->authUrl();
                
            } elseif($openid->validate()) {
                $data = $openid->getAttributes();
                $email = $data['contact/email'];
                $first = $data['namePerson/first'];
                echo "Identity : $openid->identity <br>";
                echo "Email : $email <br>";
                echo "First name : $first";
            } else {
                echo "The user has not logged in";
                            $openid->identity = 'https://www.google.com/accounts/o8/id';
            $openid->required = array(
            'namePerson/first',
            'namePerson/last',
            'contact/email',
            );
            $openid->returnUrl = 'http://localhost/cochavalley';
            $data['googleloginurl'] = $openid->authUrl();
            }
        } else {
            
            $openid->identity = 'https://www.google.com/accounts/o8/id';
            $openid->required = array(
            'namePerson/first',
            'namePerson/last',
            'contact/email',
            );
            $openid->returnUrl = 'http://localhost/cochavalley';
            $data['googleloginurl'] = $openid->authUrl();
        }


        if(isset($_GET['state']) and isset($_GET['code'])){
            
            $this->load->view('loginfb');

        }else{
            
            
            

            
            $userdata = $this->session->userdata('fb_data');
            $data = array_merge($data,$userdata);
            $this->load->view('index',$data);
            echo 'sss';
        }

    }
    


    



  }
?>