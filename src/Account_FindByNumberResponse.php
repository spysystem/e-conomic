<?php

namespace Economic;

class Account_FindByNumberResponse
{

    /**
     * @var AccountHandle $Account_FindByNumberResult
     */
    protected $Account_FindByNumberResult = null;

    /**
     * @param AccountHandle $Account_FindByNumberResult
     */
    public function __construct($Account_FindByNumberResult)
    {
      $this->Account_FindByNumberResult = $Account_FindByNumberResult;
    }

    /**
     * @return AccountHandle
     */
    public function getAccount_FindByNumberResult()
    {
      return $this->Account_FindByNumberResult;
    }

    /**
     * @param AccountHandle $Account_FindByNumberResult
     * @return \Economic\Account_FindByNumberResponse
     */
    public function setAccount_FindByNumberResult($Account_FindByNumberResult)
    {
      $this->Account_FindByNumberResult = $Account_FindByNumberResult;
      return $this;
    }

}
