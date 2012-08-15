<?php
class Facebook_m extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        


        $config = array(
                        'appId'  => $this->config->item('fappId'),
                        'secret' => $this->config->item('fsecret'),
                        'fileUpload' => true, // Indicates if the CURL based @ syntax for file uploads is enabled.
                        'cookie' => true, // Allow the cookie.
                        );
        $this->load->library('Facebook', $config);
        
        $user = $this->facebook->getUser();
        $profile = null;
        $id = null;
        $fb = $this->session->userdata('fb_data');

        if($user)
        {
            try {
                $this->load->library('mongo_db');
                $user_db = $this->mongo_db->where(array('fid'=>$user))->get('user');
                if($user_db){
                    $user_db  = $user_db[0];
                    $id = $user_db['_id']->{'$id'};
                    $profile['name'] = $user_db['name'];
                    $profile['link'] = $user_db['link'];
                    $profile['email'] = (isset($user_db['email'])) ? $user_db['email'] : '';
                    $profile['about'] = (isset($user_db['about'])) ? $user_db['about'] : '';
                    $profile['website'] = (isset($user_db['website'])) ? $user_db['website'] : '';
                    $profile['gender'] = (isset($user_db['gender'])) ? $user_db['gender'] : '';
                    $profile['first_name'] = (isset($user_db['first_name'])) ? $user_db['first_name'] : '';
                    $profile['last_name'] = (isset($user_db['last_name'])) ? $user_db['last_name'] : '';
                    $profile['title'] = (isset($user_db['title'])) ? $user_db['title'] : '';

                }else{
                    $profile = $this->facebook->api('/me?fields=id,name,link,email,gender,locale,first_name,last_name');
                    $profile['about'] = "";
                    $profile['website'] = "";
                    $profile['fid'] = $profile['id'];
                    unset($profile['id']);
                    $id = $this->mongo_db->insert('user',$profile);
                }
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
            }
        
        }
        
        $fb_data = array(
                        'fid' => $user,
                        'id' => $id,
                        'name' => (isset($profile['name'])) ? $profile['name'] : '',
                        'email' => (isset($profile['email'])) ? $profile['email'] : '',
                        'link' => (isset($profile['link'])) ? $profile['link'] : '',
                        'about' => (isset($profile['about'])) ? $profile['about'] : '',
                        'first_name' => (isset($profile['first_name'])) ? $profile['first_name'] : '',
                        'last_name' => (isset($profile['last_name'])) ? $profile['last_name'] : '',
                        'title' => (isset($profile['title'])) ? $profile['title'] : '',
                        'website' => (isset($profile['website'])) ? $profile['website'] : '',
                        'gender' => (isset($profile['gender'])) ? $profile['gender'] : '',
                        'city' => (isset($user_db['city'])) ? $user_db['city'] : $fb['city'],
                        'country' => (isset($user_db['country'])) ? $user_db['country'] : $fb['country'],
                        'loginUrl' => $this->facebook->getLoginUrl(array( 'scope' => 'email','display'=>'popup','redirect_uri' => base_url().'event/register')),
                        'logoutUrl' => $this->facebook->getLogoutUrl(),
                        'appId' =>    $this->facebook->getAppID()
                      );
        $this->session->set_userdata('fb_data', $fb_data);
        
    }
}
