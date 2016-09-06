<?php

namespace Economic;

class EmployeeGroup_FindByNumberListResponse
{

    /**
     * @var ArrayOfEmployeeGroupHandle $EmployeeGroup_FindByNumberListResult
     */
    protected $EmployeeGroup_FindByNumberListResult = null;

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_FindByNumberListResult
     */
    public function __construct($EmployeeGroup_FindByNumberListResult)
    {
      $this->EmployeeGroup_FindByNumberListResult = $EmployeeGroup_FindByNumberListResult;
    }

    /**
     * @return ArrayOfEmployeeGroupHandle
     */
    public function getEmployeeGroup_FindByNumberListResult()
    {
      return $this->EmployeeGroup_FindByNumberListResult;
    }

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_FindByNumberListResult
     * @return \Economic\EmployeeGroup_FindByNumberListResponse
     */
    public function setEmployeeGroup_FindByNumberListResult($EmployeeGroup_FindByNumberListResult)
    {
      $this->EmployeeGroup_FindByNumberListResult = $EmployeeGroup_FindByNumberListResult;
      return $this;
    }

}
