<?php

namespace Economic;

class Employee_Create
{

    /**
     * @var int $number
     */
    protected $number = null;

    /**
     * @var EmployeeGroupHandle $groupHandle
     */
    protected $groupHandle = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $number
     * @param EmployeeGroupHandle $groupHandle
     * @param string $name
     */
    public function __construct($number, $groupHandle, $name)
    {
      $this->number = $number;
      $this->groupHandle = $groupHandle;
      $this->name = $name;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param int $number
     * @return \Economic\Employee_Create
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getGroupHandle()
    {
      return $this->groupHandle;
    }

    /**
     * @param EmployeeGroupHandle $groupHandle
     * @return \Economic\Employee_Create
     */
    public function setGroupHandle($groupHandle)
    {
      $this->groupHandle = $groupHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Economic\Employee_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
