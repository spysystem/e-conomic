<?php

namespace Economic;

class EmployeeGroup_GetNameResponse
{

    /**
     * @var string $EmployeeGroup_GetNameResult
     */
    protected $EmployeeGroup_GetNameResult = null;

    /**
     * @param string $EmployeeGroup_GetNameResult
     */
    public function __construct($EmployeeGroup_GetNameResult)
    {
      $this->EmployeeGroup_GetNameResult = $EmployeeGroup_GetNameResult;
    }

    /**
     * @return string
     */
    public function getEmployeeGroup_GetNameResult()
    {
      return $this->EmployeeGroup_GetNameResult;
    }

    /**
     * @param string $EmployeeGroup_GetNameResult
     * @return \Economic\EmployeeGroup_GetNameResponse
     */
    public function setEmployeeGroup_GetNameResult($EmployeeGroup_GetNameResult)
    {
      $this->EmployeeGroup_GetNameResult = $EmployeeGroup_GetNameResult;
      return $this;
    }

}
