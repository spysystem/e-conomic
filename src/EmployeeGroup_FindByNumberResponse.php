<?php

namespace Economic;

class EmployeeGroup_FindByNumberResponse
{

    /**
     * @var EmployeeGroupHandle $EmployeeGroup_FindByNumberResult
     */
    protected $EmployeeGroup_FindByNumberResult = null;

    /**
     * @param EmployeeGroupHandle $EmployeeGroup_FindByNumberResult
     */
    public function __construct($EmployeeGroup_FindByNumberResult)
    {
      $this->EmployeeGroup_FindByNumberResult = $EmployeeGroup_FindByNumberResult;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getEmployeeGroup_FindByNumberResult()
    {
      return $this->EmployeeGroup_FindByNumberResult;
    }

    /**
     * @param EmployeeGroupHandle $EmployeeGroup_FindByNumberResult
     * @return \Economic\EmployeeGroup_FindByNumberResponse
     */
    public function setEmployeeGroup_FindByNumberResult($EmployeeGroup_FindByNumberResult)
    {
      $this->EmployeeGroup_FindByNumberResult = $EmployeeGroup_FindByNumberResult;
      return $this;
    }

}
