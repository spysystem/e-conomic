<?php

namespace Economic;

class CashBookEntry_GetEmployeeResponse
{

    /**
     * @var EmployeeHandle $CashBookEntry_GetEmployeeResult
     */
    protected $CashBookEntry_GetEmployeeResult = null;

    /**
     * @param EmployeeHandle $CashBookEntry_GetEmployeeResult
     */
    public function __construct($CashBookEntry_GetEmployeeResult)
    {
      $this->CashBookEntry_GetEmployeeResult = $CashBookEntry_GetEmployeeResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getCashBookEntry_GetEmployeeResult()
    {
      return $this->CashBookEntry_GetEmployeeResult;
    }

    /**
     * @param EmployeeHandle $CashBookEntry_GetEmployeeResult
     * @return \Economic\CashBookEntry_GetEmployeeResponse
     */
    public function setCashBookEntry_GetEmployeeResult($CashBookEntry_GetEmployeeResult)
    {
      $this->CashBookEntry_GetEmployeeResult = $CashBookEntry_GetEmployeeResult;
      return $this;
    }

}
