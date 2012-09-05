<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Logo extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();

        
    }
 
    
    public function index(){
        $this->load->model('Facebook_m');
        $data = array();
        $data = $this->session->userdata('fb_data');
        $this->load->library('mongo_db');
        $data['logos'] = $this->mongo_db->get('logos');

        //$data['logos']  = array("1.jpeg","2.jpeg","3.jpeg","4.jpeg","5.jpg","6.jpg","7.jpg","8.jpg","9.png","10.png","11.png","12.png");
        shuffle($data['logos']);
        
        $data['menu'] = 'logo';
        
        /*if($data['id'])
            $this->load->view('connect', $data);
        else*/
        $this->load->view('logo', $data);
            
    }

  
    function vote($id){
        $this->load->model('Facebook_m');
        $data = array();
        $data = $this->session->userdata('fb_data');
        $this->load->library('mongo_db');
        $oldvotes = -1;
        if(!$data['id']){
            $this->session->set_userdata(array('next_url'=>base_url().'logo'));
            echo '{"result":"nolog"}';
        }else{
            $this->load->library('mongo_db');
            
            $voted = $this->mongo_db->where(array('users'=>$data['id']))->get('logos');
            if($voted){
                $result = $this->mongo_db->where(array('_id'=>$voted[0]['_id']))->inc('votes',-1)->pull('users',$data['id'])->update('logos');
                
                if(!$result){
                    echo '{"result":"(1) Error favor intentar nuevamente"}';
                    exit;
                }
                $old = $this->mongo_db->where(array('_id'=>$voted[0]['_id']))->get('logos');
                $oldvotes = $old[0]['votes'];
                
            }
            $result = $this->mongo_db->where(array('_id'=>new MongoId($id)))->inc('votes',1)->push('users',$data['id'])->update('logos');
            $vote = $this->mongo_db->where(array('_id'=>new MongoId($id)))->get('logos');
            $votes = $vote[0]['votes'];
            
            if(!$result)
                echo '{"result":"(2) Error favor intentar nuevamente"}';
            else
                echo '{"result":"ok","votes":'.$votes.',"oldvotes":'.$oldvotes.'}';
        }
    }
    


    



  }
?>