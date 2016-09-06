<?php

namespace Economic;

class CashBookEntry_GetDebtorResponse
{

    /**
     * @var DebtorHandle $CashBookEntry_GetDebtorResult
     */
    protected $CashBookEntry_GetDebtorResult = null;

    /**
     * @param DebtorHandle $CashBookEntry_GetDebtorResult
     */
    public function __construct($CashBookEntry_GetDebtorResult)
    {
      $this->CashBookEntry_GetDebtorResult = $CashBookEntry_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getCashBookEntry_GetDebtorResult()
    {
      return $this->CashBookEntry_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $CashBookEntry_GetDebtorResult
     * @return \Economic\CashBookEntry_GetDebtorResponse
     */
    public function setCashBookEntry_GetDebtorResult($CashBookEntry_GetDebtorResult)
    {
      $this->CashBookEntry_GetDebtorResult = $CashBookEntry_GetDebtorResult;
      return $this;
    }

}
