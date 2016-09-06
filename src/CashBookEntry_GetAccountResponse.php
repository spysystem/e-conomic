<?php

namespace Economic;

class CashBookEntry_GetAccountResponse
{

    /**
     * @var AccountHandle $CashBookEntry_GetAccountResult
     */
    protected $CashBookEntry_GetAccountResult = null;

    /**
     * @param AccountHandle $CashBookEntry_GetAccountResult
     */
    public function __construct($CashBookEntry_GetAccountResult)
    {
      $this->CashBookEntry_GetAccountResult = $CashBookEntry_GetAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getCashBookEntry_GetAccountResult()
    {
      return $this->CashBookEntry_GetAccountResult;
    }

    /**
     * @param AccountHandle $CashBookEntry_GetAccountResult
     * @return \Economic\CashBookEntry_GetAccountResponse
     */
    public function setCashBookEntry_GetAccountResult($CashBookEntry_GetAccountResult)
    {
      $this->CashBookEntry_GetAccountResult = $CashBookEntry_GetAccountResult;
      return $this;
    }

}
