<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Index extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();

        
    }
 
    function index()
    {
       
        $this->load->model('Facebook_m');
        
        $this->load->library('openid');
        
        $this->load->library('Mongo_db');
        
        $us = $this->mongo_db->get('u');
        var_dump($us);



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
    
    public function register(){
        $data = array();
        $this->load->view('registerfb',$data);
    }
    
    public function tmpregister(){
        
        $data = array();
        $this->load->view('register',$data);

    }
    
    public function connect(){
        
        $data = array();
        $this->load->view('connect',$data);

    }
    
    public function logout()
    {
        
        $this->load->model('Facebook_m');

        $this->Facebook_m->facebook->destroySession(null);
        //setcookie('fbs_'.$this->Facebook_m->facebook->getAppId(), '', time()-100, '/', 'localhost');
        session_destroy();
        $this->session->sess_destroy();
        redirect(base_url());
    
    }


  }
?>
