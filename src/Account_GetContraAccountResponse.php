<?php

namespace Economic;

class Account_GetContraAccountResponse
{

    /**
     * @var AccountHandle $Account_GetContraAccountResult
     */
    protected $Account_GetContraAccountResult = null;

    /**
     * @param AccountHandle $Account_GetContraAccountResult
     */
    public function __construct($Account_GetContraAccountResult)
    {
      $this->Account_GetContraAccountResult = $Account_GetContraAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getAccount_GetContraAccountResult()
    {
      return $this->Account_GetContraAccountResult;
    }

    /**
     * @param AccountHandle $Account_GetContraAccountResult
     * @return \Economic\Account_GetContraAccountResponse
     */
    public function setAccount_GetContraAccountResult($Account_GetContraAccountResult)
    {
      $this->Account_GetContraAccountResult = $Account_GetContraAccountResult;
      return $this;
    }

}
