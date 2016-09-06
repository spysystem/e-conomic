<?php

namespace Economic;

class EmployeeGroup_GetNumberResponse
{

    /**
     * @var int $EmployeeGroup_GetNumberResult
     */
    protected $EmployeeGroup_GetNumberResult = null;

    /**
     * @param int $EmployeeGroup_GetNumberResult
     */
    public function __construct($EmployeeGroup_GetNumberResult)
    {
      $this->EmployeeGroup_GetNumberResult = $EmployeeGroup_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getEmployeeGroup_GetNumberResult()
    {
      return $this->EmployeeGroup_GetNumberResult;
    }

    /**
     * @param int $EmployeeGroup_GetNumberResult
     * @return \Economic\EmployeeGroup_GetNumberResponse
     */
    public function setEmployeeGroup_GetNumberResult($EmployeeGroup_GetNumberResult)
    {
      $this->EmployeeGroup_GetNumberResult = $EmployeeGroup_GetNumberResult;
      return $this;
    }

}
