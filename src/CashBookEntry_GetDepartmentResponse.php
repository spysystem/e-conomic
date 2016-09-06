<?php

namespace Economic;

class CashBookEntry_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $CashBookEntry_GetDepartmentResult
     */
    protected $CashBookEntry_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $CashBookEntry_GetDepartmentResult
     */
    public function __construct($CashBookEntry_GetDepartmentResult)
    {
      $this->CashBookEntry_GetDepartmentResult = $CashBookEntry_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getCashBookEntry_GetDepartmentResult()
    {
      return $this->CashBookEntry_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $CashBookEntry_GetDepartmentResult
     * @return \Economic\CashBookEntry_GetDepartmentResponse
     */
    public function setCashBookEntry_GetDepartmentResult($CashBookEntry_GetDepartmentResult)
    {
      $this->CashBookEntry_GetDepartmentResult = $CashBookEntry_GetDepartmentResult;
      return $this;
    }

}
