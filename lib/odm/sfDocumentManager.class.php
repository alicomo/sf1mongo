<?php
use Doctrine\Common\ClassLoader,
    Doctrine\Common\Annotations\AnnotationReader,
    Doctrine\ODM\MongoDB\DocumentManager,
    Doctrine\MongoDB\Connection,
    Doctrine\ODM\MongoDB\Configuration,
    Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;  


/**
 * This can be used for instantiating doctrine odm connectivity for mongodb
 *
 * @author Muhammadali Shaduli
 */
class sfDocumentManager {
    public static $database;
    
    /*
     * Document Manager for mongodb odm
     * 
     * returns DocumentManager object
     */
    public static function getDocumentManager() {
      $dm = DocumentManager::create(new Connection(), self::getConfiguration());
      return $dm;
    }
    
    /*
     * Sets the mongodb dbname
     */
    public static function setDatabase($database) {
        self::$database = $database;
    }
    /*
     * returns the current mongodb db being used
     */
    public static function getDatabase() {
        return self::$database;
    }
    
    /*
     * Creates the configuration for the mongodb document manager initialization
     */
    public static function getConfiguration() 
    {
      $config = new Configuration();
      $odm =  self::getODMConfig();
      
      if(is_null(self::getDatabase())){
          self::setDatabase($odm['odm']['database']);
      }
      $config->setDefaultDB(self::getDatabase());
  
      $config->setProxyDir(sfConfig::get('sf_cache_dir'));
      $config->setProxyNamespace('Proxies');

      $config->setHydratorDir(sfConfig::get('sf_cache_dir'));
      $config->setHydratorNamespace('Hydrators');

      $reader = new AnnotationReader();
      //$reader->setDefaultAnnotationNamespace('Doctrine\ODM\MongoDB\Mapping\\');
      $config->setMetadataDriverImpl(new AnnotationDriver($reader, __DIR__ . '/Documents'));
      
      return $config;
        
    }
    
    /*
     * returns the array of mongodb odm configuration for sf1.4
     */
    public static function getODMConfig() {
        $loader = sfYaml::load( sfConfig::get('sf_root_dir') . '/config/odm.yml' );
        return $loader;
    }
}

