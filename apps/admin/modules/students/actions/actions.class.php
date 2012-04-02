<?php
ini_set('display_errors', 'on');
use Documents\Student,
    Documents\DynamicList;
/**
 * students actions.
 *
 * @package    ilyathica
 * @subpackage students
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class studentsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeAdd(sfWebRequest $request)
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
      
      
      $dlist = new DynamicList();
      
      $dlist->setAttribute('Name');
      $dlist->setValue('Truck');
     
      $children = new DynamicList();
      $children->setAttribute('some');
      $children->setValue('dsdd');
      
      $dlist->setChildren($children);
      $dm->persist($dlist);
      $dm->flush();
  }
  
  
  public function executeNew(sfWebRequest $request) {
      $this->form =  new StudentForm();
      
  }
  
  
  public function executeEdit(sfWebRequest $request) {
      $dm = sfDocumentManager::getDocumentManager();
      $student = $dm->find('Documents\Student', array('id' => $request->getParameter('id')));
      print_r($student); exit;
      //$this->form = new StudentForm($student->);
  }
  
  
  
  public function executeIndex(sfWebRequest $request) {
      $dm = sfDocumentManager::getDocumentManager();
      
      $query = $dm->getRepository('Documents\DynamicList');
      
      
      $this->list = $query->findAll();
  }
  
}
