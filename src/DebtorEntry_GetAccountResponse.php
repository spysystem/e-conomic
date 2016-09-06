<?php

namespace Economic;

class DebtorEntry_GetAccountResponse
{

    /**
     * @var AccountHandle $DebtorEntry_GetAccountResult
     */
    protected $DebtorEntry_GetAccountResult = null;

    /**
     * @param AccountHandle $DebtorEntry_GetAccountResult
     */
    public function __construct($DebtorEntry_GetAccountResult)
    {
      $this->DebtorEntry_GetAccountResult = $DebtorEntry_GetAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getDebtorEntry_GetAccountResult()
    {
      return $this->DebtorEntry_GetAccountResult;
    }

    /**
     * @param AccountHandle $DebtorEntry_GetAccountResult
     * @return \Economic\DebtorEntry_GetAccountResponse
     */
    public function setDebtorEntry_GetAccountResult($DebtorEntry_GetAccountResult)
    {
      $this->DebtorEntry_GetAccountResult = $DebtorEntry_GetAccountResult;
      return $this;
    }

}
