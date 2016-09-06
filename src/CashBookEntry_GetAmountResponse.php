<?php

namespace Economic;

class CashBookEntry_GetAmountResponse
{

    /**
     * @var float $CashBookEntry_GetAmountResult
     */
    protected $CashBookEntry_GetAmountResult = null;

    /**
     * @param float $CashBookEntry_GetAmountResult
     */
    public function __construct($CashBookEntry_GetAmountResult)
    {
      $this->CashBookEntry_GetAmountResult = $CashBookEntry_GetAmountResult;
    }

    /**
     * @return float
     */
    public function getCashBookEntry_GetAmountResult()
    {
      return $this->CashBookEntry_GetAmountResult;
    }

    /**
     * @param float $CashBookEntry_GetAmountResult
     * @return \Economic\CashBookEntry_GetAmountResponse
     */
    public function setCashBookEntry_GetAmountResult($CashBookEntry_GetAmountResult)
    {
      $this->CashBookEntry_GetAmountResult = $CashBookEntry_GetAmountResult;
      return $this;
    }

}
