<?php


class StudentMaker {
    private  $itStudent;
    private  $engStudent;
    private  $edeStudent;
    private  $artStudent;
    
   Private static $amaker;
    function __construct($itStudent, $engStudent,$edeStudent,$artStudent) {
     $this->itStudent= $itStudent  ;
     $this->engStudent= $engStudent  ;
     $this->edeStudent= $edeStudent  ;
     $this->artStudent= $artStudent  ;
      function getamaker() {
      if ($aMaker==null)
             $aMaker = new $StudentMaker();
         return $aMaker;
        
     }
     
   Function viewit(){
       $itstudent->view();
       
   }
   Function viewART(){
        $artStudnet->view();
    }
    
   function  viewEng(){
        $engStudnet->view();
    }
  function viewEdu(){
        $eduStudnet->view();
    }

    }
}
