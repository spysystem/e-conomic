<?php

namespace Economic;

class DebtorGroup_GetAccountResponse
{

    /**
     * @var AccountHandle $DebtorGroup_GetAccountResult
     */
    protected $DebtorGroup_GetAccountResult = null;

    /**
     * @param AccountHandle $DebtorGroup_GetAccountResult
     */
    public function __construct($DebtorGroup_GetAccountResult)
    {
      $this->DebtorGroup_GetAccountResult = $DebtorGroup_GetAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getDebtorGroup_GetAccountResult()
    {
      return $this->DebtorGroup_GetAccountResult;
    }

    /**
     * @param AccountHandle $DebtorGroup_GetAccountResult
     * @return \Economic\DebtorGroup_GetAccountResponse
     */
    public function setDebtorGroup_GetAccountResult($DebtorGroup_GetAccountResult)
    {
      $this->DebtorGroup_GetAccountResult = $DebtorGroup_GetAccountResult;
      return $this;
    }

}
