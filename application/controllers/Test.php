<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

  var $TPL;

  public function __construct() 
  {
	  parent::__construct();
	  
	  $this->TPL = array('title' => "Quiz page");
    $this->TPL['quiz_page']=true;
  
    $this->load->model('quiz');
	  
  }

  public function index()
  {
    

    
        //$this->TPL['question']=$this->quiz->getoner_random();
        $this->template->show('quiz', $this->TPL);
        
   

  }

  public function get_random()
  {
    

    
    echo json_encode($this->quiz->getone_random());
        
        
   

  }


}


?>
