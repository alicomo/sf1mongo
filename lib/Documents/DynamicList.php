<?php

namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;


/** 
 * @ODM\Document(collection="dynamic_lists")
 * @ODM\InheritanceType("SINGLE_COLLECTION")
 * @ODM\DiscriminatorField(fieldName="stype")
 * @ODM\DiscriminatorMap({
 * "dynamic_list"="DynamicList",
 *
 * })
 */
class DynamicList {
    
    /** @ODM\Id */
    private $id;
    /** @ODM\Field(type="string") */
    private $attribute;
    /** @ODM\Field(type="string") */
    private $value;
    
    
    /**
     *@ODM\EmbedMany(targetDocument="DynamicList", nullable=true)
     * 
     */
    private $children = array();
    
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
    public function getAttribute()
    {
        return $this->attribute;
    }
    
     /**
     * Get address
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
    
    
    public function setChildren($children) {
        $this->children = $children;
    }


    
    /**
     * Set name
     *
     * @param string $attribute
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
    }
    
    /**
     * Set address
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    
    public function  __toString()
    {
        return $this->attribute;
    }

}
