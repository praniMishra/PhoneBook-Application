<?php 
   class Loginmodel extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

        // public function login_check($login_data){
        //     $this->db->select('*');
        //     $this->db->from('users');
        //     $this->db->where('email', $login_data['email']);
        //     $this->db->where('password', $login_data['password']);
        

        // }
      
        
        public function checkIsUserPresent($email,$password)
        {   
            $this->db->where('email',$email);        
            $this->db->where('password',($password));	
            $rs	= $this->db->get('users');
            $UserInfo = (array)$rs->first_row();
            if(!empty($UserInfo))
            {
                $sessionInfo = $UserInfo;	
                $this->session->set_userdata($sessionInfo);	
                $this->session->set_userdata('is_login', 'true');
                return true;
            }else{
                return false;			
            }		
        }
        function check_login($user_login) {
            $session = $this->session->userdata('email');
            if(isset($_SESSION)) {
                return true;
            } else {
                return false;
            }
        }
    }
?>