<?php
use Doctrine\Common\ClassLoader,
    Doctrine\Common\Annotations\AnnotationReader,
    Doctrine\ODM\MongoDB\DocumentManager,
    Doctrine\MongoDB\Connection,
    Doctrine\ODM\MongoDB\Configuration,
    Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;    

/**
 * Use this class all of your actions for using document manager
 *
 * @author Muhammadali Shaduli
 */
class mongoActions extends sfActions {
    
    public function getDocumentManager() {
      $config = new Configuration();
      $config->setDefaultDB('ilythica');
  
      $config->setProxyDir(__DIR__ . '/cache');
      $config->setProxyNamespace('Proxies');

      $config->setHydratorDir(__DIR__ . '/cache');
      $config->setHydratorNamespace('Hydrators');

      $reader = new AnnotationReader();
      //$reader->setDefaultAnnotationNamespace('Doctrine\ODM\MongoDB\Mapping\\');
      $config->setMetadataDriverImpl(new AnnotationDriver($reader, __DIR__ . '/Documents'));

      $dm = DocumentManager::create(new Connection(), $config);
      
      return $dm;
    }
   
}

?>
