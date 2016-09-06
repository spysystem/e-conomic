<?php

namespace Economic;

class Account_GetBalanceResponse
{

    /**
     * @var float $Account_GetBalanceResult
     */
    protected $Account_GetBalanceResult = null;

    /**
     * @param float $Account_GetBalanceResult
     */
    public function __construct($Account_GetBalanceResult)
    {
      $this->Account_GetBalanceResult = $Account_GetBalanceResult;
    }

    /**
     * @return float
     */
    public function getAccount_GetBalanceResult()
    {
      return $this->Account_GetBalanceResult;
    }

    /**
     * @param float $Account_GetBalanceResult
     * @return \Economic\Account_GetBalanceResponse
     */
    public function setAccount_GetBalanceResult($Account_GetBalanceResult)
    {
      $this->Account_GetBalanceResult = $Account_GetBalanceResult;
      return $this;
    }

}
