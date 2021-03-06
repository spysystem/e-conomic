<?php

namespace Economic;

class EmployeeGroup_UpdateFromData
{

    /**
     * @var EmployeeGroupData $data
     */
    protected $data = null;

    /**
     * @param EmployeeGroupData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return EmployeeGroupData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param EmployeeGroupData $data
     * @return \Economic\EmployeeGroup_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
