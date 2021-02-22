<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

  var $TPL;
  


  public function __construct() 
  {
	  parent::__construct();
	  
	  $this->TPL = array('title' => "Edit page");
    $this->TPL["edit_page "]=true;
    	// We could auto-load these helpers and libraries in the autoload config file,
	// or we can include them manually...
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');

  	//
   // $this->form_validation->set_rules('question','Question', 'required');
   $this->form_validation->set_rules('question', 'Question', 'trim|required|min_length[20]|max_length[140]|alpha_numeric_spaces');
    $this->form_validation->set_rules('optiona', 'Option A',  'trim|required|min_length[2]|max_length[50]|alpha_numeric_spaces');
    $this->form_validation->set_rules('optionb', 'Option B',  'trim|required|min_length[2]|max_length[50]|alpha_numeric_spaces');
    $this->form_validation->set_rules('optionc', 'Option C',  'trim|required|min_length[2]|max_length[50]|alpha_numeric_spaces');
    $this->form_validation->set_rules('optiond', 'Option D',  'trim|required|min_length[2]|max_length[50]|alpha_numeric_spaces');
    
   

	// By default, don't output success or error messages for form validation
    $this->TPL['success'] = false;
    $this->TPL['error'] = false;
    $this->load->model('quiz');
	  
  }


  public function index()
  {
    

    
        //$this->load->model('quiz');
        $this->TPL["results"]=$this->quiz->getall();
        $this->template->show('edit', $this->TPL);
   

  }

  public function create()
  {
     
    if ($this->form_validation->run() == FALSE)
    {
	  // set a template variable to report validation failure
      $this->TPL['error'] = true;
     // $this->load->view('homepage', $this->TPL);

		
     // $query = $this->db->query("INSERT INTO quiz (question,option1, option2, option3, option4, answer) VALUES (?,?,?,?,?,?)");
      
     //$this->load->model('quiz');
     $this->TPL["results"]=$this->quiz->getall();
     $this->template->show('edit', $this->TPL);
    }
    else{
     
      $this->TPL['success'] = true;
      
      //$this->load->model('quiz');
      $this->quiz->insert($_POST['question'],$_POST['optiona'],$_POST['optionb'],$_POST['optionc'],$_POST['optiond'],$_POST['answer']);
      $this->TPL["results"]=$this->quiz->getall();
      $this->template->show('edit', $this->TPL);
    


    }

  }
  public function showone()
  {
    
    
        //$this->load->model('quiz');
      $temp=$this->quiz->getone($_GET['id'] );
      $this->TPL['record']=$temp;
      $this->index();
   

  }

  public function update(){
    $this->quiz->update($_POST['id'],$_POST['question'],$_POST['optiona'],$_POST['optionb'],$_POST['optionc'],$_POST['optiond'],$_POST['answer']);
    $this->index();

  }
  
  public function delete_info()
  {
    
    
        
      $temp=$this->quiz->getone($_GET['id'] );
      $this->TPL['delete_record']=$temp;
      $this->index();
   

  }

  

  public function delete()
  {
    

      $this->quiz->remove($_GET['id']);
      $this->index();
   

  }


  
}