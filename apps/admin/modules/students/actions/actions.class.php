<?php
ini_set('display_errors', 'on');
use Documents\Student;
/**
 * students actions.
 *
 * @package    ilyathica
 * @subpackage students
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class studentsActions extends mongoActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $dm = sfDocumentManager::getDocumentManager();
      $student = new Student();
      $student->setId(1);
      $student->setName('Muhammadali Shaduli');
      $student->setAddress('Como Chennai');
      $dm->persist($student);
      $dm->flush();
      $query = $dm->getRepository('Documents\Student');
      
      
      $this->students = $query->findAll();
    
  }
}
