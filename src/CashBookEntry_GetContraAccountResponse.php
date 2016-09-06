<?php

namespace Economic;

class CashBookEntry_GetContraAccountResponse
{

    /**
     * @var AccountHandle $CashBookEntry_GetContraAccountResult
     */
    protected $CashBookEntry_GetContraAccountResult = null;

    /**
     * @param AccountHandle $CashBookEntry_GetContraAccountResult
     */
    public function __construct($CashBookEntry_GetContraAccountResult)
    {
      $this->CashBookEntry_GetContraAccountResult = $CashBookEntry_GetContraAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getCashBookEntry_GetContraAccountResult()
    {
      return $this->CashBookEntry_GetContraAccountResult;
    }

    /**
     * @param AccountHandle $CashBookEntry_GetContraAccountResult
     * @return \Economic\CashBookEntry_GetContraAccountResponse
     */
    public function setCashBookEntry_GetContraAccountResult($CashBookEntry_GetContraAccountResult)
    {
      $this->CashBookEntry_GetContraAccountResult = $CashBookEntry_GetContraAccountResult;
      return $this;
    }

}
