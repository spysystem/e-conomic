<?php

namespace Economic;

class Account_GetOpeningAccountResponse
{

    /**
     * @var AccountHandle $Account_GetOpeningAccountResult
     */
    protected $Account_GetOpeningAccountResult = null;

    /**
     * @param AccountHandle $Account_GetOpeningAccountResult
     */
    public function __construct($Account_GetOpeningAccountResult)
    {
      $this->Account_GetOpeningAccountResult = $Account_GetOpeningAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getAccount_GetOpeningAccountResult()
    {
      return $this->Account_GetOpeningAccountResult;
    }

    /**
     * @param AccountHandle $Account_GetOpeningAccountResult
     * @return \Economic\Account_GetOpeningAccountResponse
     */
    public function setAccount_GetOpeningAccountResult($Account_GetOpeningAccountResult)
    {
      $this->Account_GetOpeningAccountResult = $Account_GetOpeningAccountResult;
      return $this;
    }

}
