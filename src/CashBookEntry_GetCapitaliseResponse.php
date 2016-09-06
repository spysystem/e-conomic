<?php

namespace Economic;

class CashBookEntry_GetCapitaliseResponse
{

    /**
     * @var AccountHandle $CashBookEntry_GetCapitaliseResult
     */
    protected $CashBookEntry_GetCapitaliseResult = null;

    /**
     * @param AccountHandle $CashBookEntry_GetCapitaliseResult
     */
    public function __construct($CashBookEntry_GetCapitaliseResult)
    {
      $this->CashBookEntry_GetCapitaliseResult = $CashBookEntry_GetCapitaliseResult;
    }

    /**
     * @return AccountHandle
     */
    public function getCashBookEntry_GetCapitaliseResult()
    {
      return $this->CashBookEntry_GetCapitaliseResult;
    }

    /**
     * @param AccountHandle $CashBookEntry_GetCapitaliseResult
     * @return \Economic\CashBookEntry_GetCapitaliseResponse
     */
    public function setCashBookEntry_GetCapitaliseResult($CashBookEntry_GetCapitaliseResult)
    {
      $this->CashBookEntry_GetCapitaliseResult = $CashBookEntry_GetCapitaliseResult;
      return $this;
    }

}
