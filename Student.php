<?php

//Alex Dellow, A00867948

class Student {
    
    //constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    } 
    
    //add an email to the emails section
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    //add a grade to the grade section
    function add_grade($grade) {
        $this->grades[] = $grade;
    } 
    
    //calculate the average of the grades, dies if grade count is 0
    function average() {
        $total = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return $total / count($this->grades);
    } 
    
    //converts student to string
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what){
            $result .= $which . ': '. $what. "\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    } 
}
