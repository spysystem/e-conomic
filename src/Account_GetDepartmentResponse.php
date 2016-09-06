<?php

namespace Economic;

class Account_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $Account_GetDepartmentResult
     */
    protected $Account_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $Account_GetDepartmentResult
     */
    public function __construct($Account_GetDepartmentResult)
    {
      $this->Account_GetDepartmentResult = $Account_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getAccount_GetDepartmentResult()
    {
      return $this->Account_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $Account_GetDepartmentResult
     * @return \Economic\Account_GetDepartmentResponse
     */
    public function setAccount_GetDepartmentResult($Account_GetDepartmentResult)
    {
      $this->Account_GetDepartmentResult = $Account_GetDepartmentResult;
      return $this;
    }

}
