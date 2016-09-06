<?php

namespace Economic;

class DepartmentData
{

    /**
     * @var DepartmentHandle $Handle
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
     * @return DepartmentHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param DepartmentHandle $Handle
     * @return \Economic\DepartmentData
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
     * @return \Economic\DepartmentData
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
     * @return \Economic\DepartmentData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
