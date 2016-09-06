<?php

namespace Economic;

class DocumentArchiveCategoryData
{

    /**
     * @var DocumentArchiveCategoryHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param DocumentArchiveCategoryHandle $Handle
     * @return \Economic\DocumentArchiveCategoryData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Economic\DocumentArchiveCategoryData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \Economic\DocumentArchiveCategoryData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
