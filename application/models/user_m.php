<?php
class User_m extends CI_Model {


    public $user_default;

    public function __construct()
    {
        parent::__construct();
        
        $this->user_default = array(
            "_id" => "",
            "name" => "",
            "link" => "",
            "email" => "",
            "gender" => "",
            "locale" => "",
            "first_name" => "",
            "last_name" => "",
            "about" => "",
            "website" => "",
            "fid" => "",
            "tags" => "",
            "role" => "",
            "going" => "",
            "looking" => ""

		);
        $this->load->library('mongo_db');

    }
    
    
    public function set($user){
        $user['_id'] = new MongoId($user['id']);
        unset($user['id']);
        $user = array_merge($this->user_default,$user);
        $this->mongo_db->where(array('_id'=>$user['_id']))->update('user',$user);
    }

    
    
    public function get($id){

        $user_db = $this->mongo_db->where(array('_id'=>new MongoId($id)))->get('user');
        
        if(isset($user_db[0]))
            return $user_db[0];
        else
            return array();
    }
}
