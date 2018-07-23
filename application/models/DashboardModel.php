<?php 
   class DashboardModel extends CI_Model {
       
        //   fetchinfg data from db  
        function get_users() {
            $query = $this->db->get("users");
            $result = $query->result_array();
            return $result;
        }
        //to edit data
        function get_user_details($id)
        {
            $this->db->where('contact_id',$id);
            $e_query = $this->db->get("contacts");
            $result = $e_query->result_array();
            return $result;
        }
        function del_user($id){
            if($this->db->delete('contacts', array('contact_id'=>$id))){
                return true;
            }
            else {
                return false;
            }
        }   
        
    }
?>