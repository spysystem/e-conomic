<?php

namespace Economic;

class EmployeeGroup_GetAllResponse
{

    /**
     * @var ArrayOfEmployeeGroupHandle $EmployeeGroup_GetAllResult
     */
    protected $EmployeeGroup_GetAllResult = null;

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_GetAllResult
     */
    public function __construct($EmployeeGroup_GetAllResult)
    {
      $this->EmployeeGroup_GetAllResult = $EmployeeGroup_GetAllResult;
    }

    /**
     * @return ArrayOfEmployeeGroupHandle
     */
    public function getEmployeeGroup_GetAllResult()
    {
      return $this->EmployeeGroup_GetAllResult;
    }

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_GetAllResult
     * @return \Economic\EmployeeGroup_GetAllResponse
     */
    public function setEmployeeGroup_GetAllResult($EmployeeGroup_GetAllResult)
    {
      $this->EmployeeGroup_GetAllResult = $EmployeeGroup_GetAllResult;
      return $this;
    }

}
