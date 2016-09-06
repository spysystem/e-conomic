<?php

namespace Economic;

class Employee_CreateFromData
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
     * @return \Economic\Employee_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
