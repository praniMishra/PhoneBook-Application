<?php
class HomeController extends CI_Controller{

    // public function __construct(){
    //     parent::__construct();
    //     $this->load->library('session');
    // }

    function index() {
        $this->load->view('index');
    }
    

    //to register users , inserting data in modal page
    public function add() {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $this->load->model('RegisterModel');
        $result = $this->RegisterModel->insert_form($request);  
        if($result) {
            $data = array("success" => "Data inserted successfully...");
        } else {
            $data = array("error" => "Sorry! Something went wrong.");
        }
        echo json_encode($data);
    }

    //when regustered user want to add new contact
    public function addcontact(){
        $request = json_decode(file_get_contents('php://input'), true);
        $this->load->model('RegisterModel');
        $result = $this->RegisterModel->contact_form($request);  
        if($result) {
            $data = array("success" => "Data inserted successfully...");
        } else {
            $data = array("error" => "Sorry! Something went wrong.");
        }
        echo json_encode($data);

    }
    //fetching data of contacts of our user
    function get_contacts() {
        $this->load->model('ContactModel');
        $users = $this->ContactModel->get_contacts();
        echo json_encode($users);
    }
    //fetching data of users from modal 
    function get_users() {
        $this->load->model('DashboardModel');
        $users = $this->DashboardModel->get_users();
        echo json_encode($users);
    }

    //To edit users data and display it in dashboard.php page
    function get_user_by_id($id) {
        $this->load->model('DashboardModel');
        $user_details = $this->DashboardModel->get_user_details($id);
        echo json_encode($user_details);
    } 

    //update the data
    public function editData() {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $insertArray = array(
            'first_name'    =>  $request['first_name'],
            'last_name'     =>  $request['last_name'],
            'email'         =>  $request['email'],
            'phone'         =>  $request['phone'],
            'dob'           =>  $request['dob'],
            'address'       =>  $request['address']
        );
        if($this->db->update('contacts',$insertArray,array('contact_id'=>$request['contact_id']))){
           $data = array('success'=>'Updated successfully...');
        } else {
            $data = array('error'=>'Sorry! Not updated.');
        }
        echo json_encode($data);
    }
    public function delete_user($id) {
        $this->load->model('DashboardModel');
        if($this->db->delete('contacts', array('contact_id'=>$id))) {
            $data = array('success'=>'Deleted successfully...');
        } else {
            $data = array('error'=>'Sorry! Not deleted.');
        }
        echo json_encode($data);
    }
    
    public function loginUser() {
        $_POST = json_decode(file_get_contents("php://input"),true);

        if(isset($_POST['email']) && !empty($_POST['email'])) {
        } else {
            $data = array("error" => "Email is required");
            echo json_encode($data);
            return;
        }
        if(isset($_POST['password']) && !empty($_POST['password'])) {
        } else {
            $data = array("error" => "Password is required");
            echo json_encode($data);
            return;
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->load->model('loginmodel');
        $loginUser = $this->loginmodel->checkIsUserPresent($email,$password);

        if($loginUser === true) {
            $data = array("success" => "success");
        } else {
            $data = array("error" => "Invalid credentials!");
        }
        echo json_encode($data);
    }

    //Check whether user logged in or not 
    function is_logged_in() {
        if($_SESSION['is_login'] == true) {
            $data = array('success' => $_SESSION);
        } else {
            $data = array('error' => 'Not logged-in');
        }
        echo json_encode($data);
    }

    public function logoutUser(){

        // @session_destroy();
        // $this->session->sess_destroy();
       
             unset($_SESSION);
             session_destroy();
             $data = array('success' => 'session destroyed successfully');
             echo json_encode($data);
            // $data = array('success' => 'session destroyed successfully');
            // echo json_encode($data);
    }
    // function checkLoginStatus() {
	// header('Content-Type: application/json');
    // $user_login = 'email';
    // $this->load->model('loginmodel');
    // $is_logged_in = $this->loginmodel->check_login($user_login);
    // $data = array("logged_in" => $is_logged_in);
    // echo json_encode($data);
	// }





}


?>