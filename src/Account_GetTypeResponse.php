<?php

namespace Economic;

class Account_GetTypeResponse
{

    /**
     * @var AccountType $Account_GetTypeResult
     */
    protected $Account_GetTypeResult = null;

    /**
     * @param AccountType $Account_GetTypeResult
     */
    public function __construct($Account_GetTypeResult)
    {
      $this->Account_GetTypeResult = $Account_GetTypeResult;
    }

    /**
     * @return AccountType
     */
    public function getAccount_GetTypeResult()
    {
      return $this->Account_GetTypeResult;
    }

    /**
     * @param AccountType $Account_GetTypeResult
     * @return \Economic\Account_GetTypeResponse
     */
    public function setAccount_GetTypeResult($Account_GetTypeResult)
    {
      $this->Account_GetTypeResult = $Account_GetTypeResult;
      return $this;
    }

}
