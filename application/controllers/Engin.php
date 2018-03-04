<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Engin extends CI_Controller
{

    public function __construct()// this is for adding css file to the porject
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function gohome()
    {
        $this->load->view('home');
        

    }



     public function gotologreg() //this is for login for companies
    {
        if(isset($_SESSION['id'])){ //this is to prevent the user from logged in (if he is already logged in)
            $errorlogin['errorlogin'] = "Sorry, but You are already logged in";
            $this->load->view('home', $errorlogin);
        }
        else{
        $this->load->view('partners');
        }
        
    }




     public function gotologregadmin() //this is for login for admins
    {
        if(isset($_SESSION['id'])){ //this is to prevent the user from logged in (if he is already logged in)
            $errorlogin['errorlogin'] = "Sorry, but You are already logged in";
            $this->load->view('cpadmin', $errorlogin);
        }
        else{
        $this->load->view('cpadmin');
        }
        
    }


//////////////////////////////////////////////This is for REGISTER & Validation/////////////////////////////////
    public function register()
    {

        //the below 5 lines are for validation of the registrations "it is one of MVC libraries loaded into the autoload.php"
		$this->form_validation->set_rules('name', 'Name',  'trim|required|min_length[3]|alpha');// alpha is to force alphabet
		$this->form_validation->set_rules('email', 'Email address',  'required|valid_email');// valid_email: only email type is allowed
		$this->form_validation->set_rules('password', 'password',  'trim|required|min_length[6]');
		$this->form_validation->set_rules('passwordConfirm', 'The confirmed Password', 'required|matches[password]'); //matches[password]: to force the matching of the passwords
       

        if ($this->form_validation->run() == FALSE) { #if these errors exist, then; 
            $error['error'] = validation_errors(); 
            $this->load->view('partners', $error); //show them in the registration form

        } else {
            $companyinfo = $this->input->post(null, true); //null: means send every inputs from the form to the db
			//input will be sent as an array which contain all above elements

            $this->load->model('dbmodel'); //load process from models called 'dbmodel.php'


            $result = $this->dbmodel->checker($companyinfo['email']);


            //this is to show if you have entered the same email to the data base before.
            if ($result) {
                $error['error'] = "The email you have just entered is already exist, please enter a different email address";
                $this->load->view('partners', $error);
            } else {
                $this->dbmodel->insert_user($companyinfo); //call the (function) from model and run it with our inputs.
                $noerror['noerror'] = "You are succesfully registered to our db. Now you can login.";
                $this->load->view('partners', $noerror); #send this errors to loginandregisterpage.
            }



        }
    }


//////////////////////////////////////////////This is for LOGIN////////////////////////////////////////////

public function login()//this function for login engin
{
    $loginfo = $this->input->post(null, true);//take whole information from form

    $email_login = $loginfo['email-login'];
    $password_login = $loginfo['password-login'];
    //assign variable to check this if its matching with database or not
    $this->load->model('dbmodel');
    
    $result = $this->dbmodel->loginMethod($email_login, $password_login);
    if ($result) { #if this query true/runs/gives answer, then we logged in, take information as an array
        $this->session->set_userdata('id', $result['id']);
        $this->session->set_userdata('name', $result['name']);
        $this->session->set_userdata('email', $result['email']);
        $this->load->model('dbmodel');
      //  $posts = $this->dbmodel->takePost(); //this is for posting data to the home page
        $this->load->view('home'); 
    } else {
        $error['logerror'] = "Wrong password or email";
        $this->load->view('partners', $error); #send this error to homepage, i will print them with key(logerror)
    }
}


//////////////////////////////////////////////This is for LOGIN for ADMINS////////////////////////////////////////////

public function loginadmin()//this function for login engin
{
    $loginfoadmin = $this->input->post(null, true);//take whole information from form

    $email_login = $loginfoadmin['email-login'];
    $password_login = $loginfoadmin['password-login'];
    //assign variable to check this if its matching with database or not
   
    $this->load->model('dbmodel');
    
    $result = $this->dbmodel->loginMethodadmin($email_login, $password_login);
    if ($result) { #if this query true/runs/gives answer, then we logged in, take information as an array
        $this->session->set_userdata('admin_id', $result['id']);
        $this->session->set_userdata('admin_name', $result['name']);
        $this->session->set_userdata('admin_email', $result['email']);
        $this->session->set_userdata('admin_level', $result['level']);

        $this->load->model('dbmodel');
      //  $posts = $this->dbmodel->takePost(); //this is for posting data to the home page
        $this->load->view('homeadmin'); 
    } else {
        $error['logerror'] = "Wrong password or email";
        $this->load->view('cpadmin', $error); #send this error to homepage, i will print them with key(logerror)
    }
}




////////////////this for login out of the company and return to login page//////////////////////////////////
    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('home'); 
    }


////////////////this for login out of the company and return to login page//////////////////////////////////
public function logoutadmin()
{
    $this->session->sess_destroy();
    $this->load->view('cpadmin'); 
}



//////////////////////////////////////////////This is for ADMIN REGISTER & Validation/////////////////////////////////
    public function registeradmin()
    {

        //the below 5 lines are for validation of the registrations "it is one of MVC libraries loaded into the autoload.php"
		$this->form_validation->set_rules('name', 'Name',  'trim|required|min_length[3]|alpha');// alpha is to force alphabet
		$this->form_validation->set_rules('email', 'Email address',  'required|valid_email');// valid_email: only email type is allowed
		$this->form_validation->set_rules('password', 'password',  'trim|required|min_length[6]');
		$this->form_validation->set_rules('passwordConfirm', 'The confirmed Password', 'required|matches[password]'); //matches[password]: to force the matching of the passwords
       

        if ($this->form_validation->run() == FALSE) { #if these errors exist, then; 
            $error['error'] = validation_errors(); 
            $this->load->view('homeadmin', $error); //show them in the registration form

        } else {
            $adminreginfo = $this->input->post(null, true); //null: means send every inputs from the form to the db
			//input will be sent as an array which contain all above elements

            $this->load->model('dbmodel'); //load process from models called 'dbmodel.php'


            $result = $this->dbmodel->checker($adminreginfo['email']);


            //this is to show if you have entered the same email to the data base before.
            if ($result) {
                $error['error'] = "The email you have just entered is already exist, please enter a different email address";
                $this->load->view('homeadmin', $error);
            } else {
                $this->dbmodel->insert_admin($adminreginfo); //call the (function) from model and run it with our inputs.
                $noerror['noerror'] = "You are succesfully registered to our db. Now you can login.";
                $this->load->view('homeadmin', $noerror); #send this errors to loginandregisterpage.
            }



        }
    }

}