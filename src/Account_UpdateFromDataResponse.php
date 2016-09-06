<?php

namespace Economic;

class Account_UpdateFromDataResponse
{

    /**
     * @var AccountHandle $Account_UpdateFromDataResult
     */
    protected $Account_UpdateFromDataResult = null;

    /**
     * @param AccountHandle $Account_UpdateFromDataResult
     */
    public function __construct($Account_UpdateFromDataResult)
    {
      $this->Account_UpdateFromDataResult = $Account_UpdateFromDataResult;
    }

    /**
     * @return AccountHandle
     */
    public function getAccount_UpdateFromDataResult()
    {
      return $this->Account_UpdateFromDataResult;
    }

    /**
     * @param AccountHandle $Account_UpdateFromDataResult
     * @return \Economic\Account_UpdateFromDataResponse
     */
    public function setAccount_UpdateFromDataResult($Account_UpdateFromDataResult)
    {
      $this->Account_UpdateFromDataResult = $Account_UpdateFromDataResult;
      return $this;
    }

}
