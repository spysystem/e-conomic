<?php

namespace Economic;

class Employee_UpdateFromData
{

    /**
     * @var EmployeeData $data
     */
    protected $data = null;

    /**
     * @param EmployeeData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return EmployeeData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param EmployeeData $data
     * @return \Economic\Employee_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
