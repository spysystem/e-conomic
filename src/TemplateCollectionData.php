<?php

namespace Economic;

class TemplateCollectionData
{

    /**
     * @var TemplateCollectionHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param TemplateCollectionHandle $Handle
     * @return \Economic\TemplateCollectionData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Economic\TemplateCollectionData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Economic\TemplateCollectionData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
