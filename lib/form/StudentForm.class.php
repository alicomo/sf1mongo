<?php
use Documents\Student;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentForm
 *
 * @author shaduli
 */
class StudentForm extends sfForm {
    
    
    public function configure() {
        parent::configure();
        $this->widgetSchema['id'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['name'] = new sfWidgetFormInput();
        $this->widgetSchema['address'] =  new sfWidgetFormTextarea();
        
    }
    
    public function getModelName() {
        
        return 'Student';
    }
       
    
   
    
    
}

