<?php

class Quiz extends CI_Model {

public $question;
public $option1;
public $option2;
public $option3;
public $option4;
public $answer;
public $id;
public $mytable='quiz';


public function getall()
{
   // $this->load->database();
		
    //$query = $this->db->query("SELECT * FROM quiz");
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get($this->mytable);
     return $query->result_array();
}
public function getone($id)
{
   
   
     $this->db->from($this->mytable)->where('id', $id);
     $query = $this->db->get();
     return $query->row();
  
}


public function insert($question, $optiona, $optionb, $optionc, $optiond, $answer)
{
                $data = array(
                    'question' => $question,
                    'option1' => $optiona,
                    'option2' => $optionb,
                    'option3' => $optionc,
                    'option4' => $optiond,
                    'answer'=> $answer
                    
            );

$this->db->insert($this->mytable, $data);    
}

public function update($id,$question,$option1,$option2,$option3,$option4,$answer)
{
        
        $data = array(
                'question' => $question,
                'option1' => $option1,
                'option2' => $option2,
                'option3' => $option3,
                'option4' => $option4,
                'answer' => $answer
        );
        

        $this->db->update($this->mytable, $data, array('id' =>$id));
}

public function remove($id)
{
   
   
        $this->db->delete($this->mytable, array('id' => $id)); 
     
//      return $query->row();
  
}

//
public function getone_random()
{       
        $this->db->order_by('id', 'ASC');
         $query = $this->db->get($this->mytable);
        $count= $query->num_rows();
        $rand_order=rand(1,$count);
      
        $query = $this->db->get($this->mytable, 1,$rand_order-1);
        return  $query->row();
  
  
}




}