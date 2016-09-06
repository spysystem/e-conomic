<?php

namespace Economic;

class EmployeeGroup_CreateResponse
{

    /**
     * @var EmployeeGroupHandle $EmployeeGroup_CreateResult
     */
    protected $EmployeeGroup_CreateResult = null;

    /**
     * @param EmployeeGroupHandle $EmployeeGroup_CreateResult
     */
    public function __construct($EmployeeGroup_CreateResult)
    {
      $this->EmployeeGroup_CreateResult = $EmployeeGroup_CreateResult;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getEmployeeGroup_CreateResult()
    {
      return $this->EmployeeGroup_CreateResult;
    }

    /**
     * @param EmployeeGroupHandle $EmployeeGroup_CreateResult
     * @return \Economic\EmployeeGroup_CreateResponse
     */
    public function setEmployeeGroup_CreateResult($EmployeeGroup_CreateResult)
    {
      $this->EmployeeGroup_CreateResult = $EmployeeGroup_CreateResult;
      return $this;
    }

}
