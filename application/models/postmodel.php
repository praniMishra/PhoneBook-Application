<?php 
   class Postmodel extends CI_Model {

        public function insert_form($request) {
            $insertArray = array(
                'post_title'    =>  $request['title'],
                'post_content'  =>  $request['content']
            );
            if($this->db->insert('article',$insertArray)) {
                return true;
            } else {
                return false;
            }
        }
    }
?>