<?php
ini_set('display_errors', 'on');
require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();
require_once __DIR__.'/../lib/vendor/mongodb-odm/vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader,
    Doctrine\Common\Annotations\AnnotationRegistry;
    

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
	
	
         
    $loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
    $loader->registerNamespaces(array(
      'Doctrine\ODM\MongoDB' => __DIR__.'/../lib/vendor/mongodb-odm/lib',
      'Doctrine\Common' => __DIR__.'/../lib/vendor/mongodb-odm/vendor/doctrine/common/lib',
      'Doctrine\MongoDB' => __DIR__.'/../lib/vendor/mongodb-odm/vendor/doctrine/mongodb/lib',
      'Documents'       => __DIR__.'/../lib'
    ));
    
    $loader->register();
    
    AnnotationRegistry::registerFile(__DIR__.'/../lib/vendor/mongodb-odm/lib/Doctrine/ODM/MongoDB/Mapping/Annotations/DoctrineAnnotations.php');
    
    $this->enablePlugins('sfDoctrinePlugin');
  }
}
