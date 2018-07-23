<?php 
   class RegisterModel extends CI_Model {

        public function insert_form($request) {
            $insertArray = array(
                'first_name'    =>  $request['firstname'],
                'last_name'     =>  $request['lastname'],
                'email'         =>  $request['email'],
                'password'      =>  $request['password'],
                'phone'         =>  $request['phone'],
                'dob'           =>  $request['dob'],
                'address'       =>  $request['address']
            );
            if($this->db->insert('users',$insertArray)) {
                return true;
            } else {
                return false;
            }
        }
        public function contact_form($request) {
            $user_id = $this->session->userdata('user_id');
            $insertArray = array(
                'user_id'	    => 	$user_id,
                'first_name'    =>  $request['firstname'],
                'last_name'     =>  $request['lastname'],
                'email'         =>  $request['email'],
                'phone'         =>  $request['phone'],
                'dob'           =>  $request['dob'],
                'address'       =>  $request['address']
            );
            if($this->db->insert('contacts',$insertArray)){
                $data = array("message"=>"Added Succesfully...");
            }else{
                $data = array("error"=>"Sorry...Contact Not Added !"); 
            }
            echo json_encode($data);
            
        }

        
    }
?>