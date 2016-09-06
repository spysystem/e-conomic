<?php

namespace Economic;

class EmployeeGroup_GetDataResponse
{

    /**
     * @var EmployeeGroupData $EmployeeGroup_GetDataResult
     */
    protected $EmployeeGroup_GetDataResult = null;

    /**
     * @param EmployeeGroupData $EmployeeGroup_GetDataResult
     */
    public function __construct($EmployeeGroup_GetDataResult)
    {
      $this->EmployeeGroup_GetDataResult = $EmployeeGroup_GetDataResult;
    }

    /**
     * @return EmployeeGroupData
     */
    public function getEmployeeGroup_GetDataResult()
    {
      return $this->EmployeeGroup_GetDataResult;
    }

    /**
     * @param EmployeeGroupData $EmployeeGroup_GetDataResult
     * @return \Economic\EmployeeGroup_GetDataResponse
     */
    public function setEmployeeGroup_GetDataResult($EmployeeGroup_GetDataResult)
    {
      $this->EmployeeGroup_GetDataResult = $EmployeeGroup_GetDataResult;
      return $this;
    }

}
