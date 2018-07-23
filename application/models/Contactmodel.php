<?php 
   class Contactmodel extends CI_Model {
      
        public function get_contacts(){
            $user_id = $this->session->userdata('user_id');
            $this->db->where('user_id',$user_id);
            $query = $this->db->get("contacts");
            $result = $query->result_array();
            return $result;
        }
    }
?>
 