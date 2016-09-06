<?php

namespace Economic;

class CashBookEntry_GetCashBookResponse
{

    /**
     * @var CashBookHandle $CashBookEntry_GetCashBookResult
     */
    protected $CashBookEntry_GetCashBookResult = null;

    /**
     * @param CashBookHandle $CashBookEntry_GetCashBookResult
     */
    public function __construct($CashBookEntry_GetCashBookResult)
    {
      $this->CashBookEntry_GetCashBookResult = $CashBookEntry_GetCashBookResult;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBookEntry_GetCashBookResult()
    {
      return $this->CashBookEntry_GetCashBookResult;
    }

    /**
     * @param CashBookHandle $CashBookEntry_GetCashBookResult
     * @return \Economic\CashBookEntry_GetCashBookResponse
     */
    public function setCashBookEntry_GetCashBookResult($CashBookEntry_GetCashBookResult)
    {
      $this->CashBookEntry_GetCashBookResult = $CashBookEntry_GetCashBookResult;
      return $this;
    }

}
