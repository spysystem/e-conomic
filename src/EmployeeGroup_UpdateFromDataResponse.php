<?php

namespace Economic;

class EmployeeGroup_UpdateFromDataResponse
{

    /**
     * @var EmployeeGroupHandle $EmployeeGroup_UpdateFromDataResult
     */
    protected $EmployeeGroup_UpdateFromDataResult = null;

    /**
     * @param EmployeeGroupHandle $EmployeeGroup_UpdateFromDataResult
     */
    public function __construct($EmployeeGroup_UpdateFromDataResult)
    {
      $this->EmployeeGroup_UpdateFromDataResult = $EmployeeGroup_UpdateFromDataResult;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getEmployeeGroup_UpdateFromDataResult()
    {
      return $this->EmployeeGroup_UpdateFromDataResult;
    }

    /**
     * @param EmployeeGroupHandle $EmployeeGroup_UpdateFromDataResult
     * @return \Economic\EmployeeGroup_UpdateFromDataResponse
     */
    public function setEmployeeGroup_UpdateFromDataResult($EmployeeGroup_UpdateFromDataResult)
    {
      $this->EmployeeGroup_UpdateFromDataResult = $EmployeeGroup_UpdateFromDataResult;
      return $this;
    }

}
