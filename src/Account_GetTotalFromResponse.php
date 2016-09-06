<?php

namespace Economic;

class Account_GetTotalFromResponse
{

    /**
     * @var AccountHandle $Account_GetTotalFromResult
     */
    protected $Account_GetTotalFromResult = null;

    /**
     * @param AccountHandle $Account_GetTotalFromResult
     */
    public function __construct($Account_GetTotalFromResult)
    {
      $this->Account_GetTotalFromResult = $Account_GetTotalFromResult;
    }

    /**
     * @return AccountHandle
     */
    public function getAccount_GetTotalFromResult()
    {
      return $this->Account_GetTotalFromResult;
    }

    /**
     * @param AccountHandle $Account_GetTotalFromResult
     * @return \Economic\Account_GetTotalFromResponse
     */
    public function setAccount_GetTotalFromResult($Account_GetTotalFromResult)
    {
      $this->Account_GetTotalFromResult = $Account_GetTotalFromResult;
      return $this;
    }

}
