<?php

namespace Economic;

class Account_CreateResponse
{

    /**
     * @var AccountHandle $Account_CreateResult
     */
    protected $Account_CreateResult = null;

    /**
     * @param AccountHandle $Account_CreateResult
     */
    public function __construct($Account_CreateResult)
    {
      $this->Account_CreateResult = $Account_CreateResult;
    }

    /**
     * @return AccountHandle
     */
    public function getAccount_CreateResult()
    {
      return $this->Account_CreateResult;
    }

    /**
     * @param AccountHandle $Account_CreateResult
     * @return \Economic\Account_CreateResponse
     */
    public function setAccount_CreateResult($Account_CreateResult)
    {
      $this->Account_CreateResult = $Account_CreateResult;
      return $this;
    }

}
