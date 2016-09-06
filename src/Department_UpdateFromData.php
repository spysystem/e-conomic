<?php

namespace Economic;

class Department_UpdateFromData
{

    /**
     * @var DepartmentData $data
     */
    protected $data = null;

    /**
     * @param DepartmentData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return DepartmentData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param DepartmentData $data
     * @return \Economic\Department_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
