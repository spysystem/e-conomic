<?php

namespace Economic;

class Account_CreateFromDataResponse
{

    /**
     * @var AccountHandle $Account_CreateFromDataResult
     */
    protected $Account_CreateFromDataResult = null;

    /**
     * @param AccountHandle $Account_CreateFromDataResult
     */
    public function __construct($Account_CreateFromDataResult)
    {
      $this->Account_CreateFromDataResult = $Account_CreateFromDataResult;
    }

    /**
     * @return AccountHandle
     */
    public function getAccount_CreateFromDataResult()
    {
      return $this->Account_CreateFromDataResult;
    }

    /**
     * @param AccountHandle $Account_CreateFromDataResult
     * @return \Economic\Account_CreateFromDataResponse
     */
    public function setAccount_CreateFromDataResult($Account_CreateFromDataResult)
    {
      $this->Account_CreateFromDataResult = $Account_CreateFromDataResult;
      return $this;
    }

}
