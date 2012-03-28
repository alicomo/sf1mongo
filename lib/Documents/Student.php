<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;

/** 
 * @ODM\Document(collection="students")
 * @ODM\InheritanceType("SINGLE_COLLECTION")
 * @ODM\DiscriminatorField(fieldName="stype")
 * @ODM\DiscriminatorMap({
 * "student"="Student",
 *
 * })
 */
class Student {
    
    /** @ODM\Id */
    private $id;
    /** @ODM\Field(type="string") */
    private $name;
    /** @ODM\Field(type="string") */
    private $address;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
     /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
     /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }
    
     /**
     * Set id
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id =  $id;
    }
    
    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    
    public function  __toString()
    {
        return $this->name;
    }
    
    
    
    
}

