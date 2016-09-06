<?php

namespace Economic;

class EmployeeGroup_CreateFromDataResponse
{

    /**
     * @var EmployeeGroupHandle $EmployeeGroup_CreateFromDataResult
     */
    protected $EmployeeGroup_CreateFromDataResult = null;

    /**
     * @param EmployeeGroupHandle $EmployeeGroup_CreateFromDataResult
     */
    public function __construct($EmployeeGroup_CreateFromDataResult)
    {
      $this->EmployeeGroup_CreateFromDataResult = $EmployeeGroup_CreateFromDataResult;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getEmployeeGroup_CreateFromDataResult()
    {
      return $this->EmployeeGroup_CreateFromDataResult;
    }

    /**
     * @param EmployeeGroupHandle $EmployeeGroup_CreateFromDataResult
     * @return \Economic\EmployeeGroup_CreateFromDataResponse
     */
    public function setEmployeeGroup_CreateFromDataResult($EmployeeGroup_CreateFromDataResult)
    {
      $this->EmployeeGroup_CreateFromDataResult = $EmployeeGroup_CreateFromDataResult;
      return $this;
    }

}
