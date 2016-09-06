<?php

namespace Economic;

class Account_GetDataResponse
{

    /**
     * @var AccountData $Account_GetDataResult
     */
    protected $Account_GetDataResult = null;

    /**
     * @param AccountData $Account_GetDataResult
     */
    public function __construct($Account_GetDataResult)
    {
      $this->Account_GetDataResult = $Account_GetDataResult;
    }

    /**
     * @return AccountData
     */
    public function getAccount_GetDataResult()
    {
      return $this->Account_GetDataResult;
    }

    /**
     * @param AccountData $Account_GetDataResult
     * @return \Economic\Account_GetDataResponse
     */
    public function setAccount_GetDataResult($Account_GetDataResult)
    {
      $this->Account_GetDataResult = $Account_GetDataResult;
      return $this;
    }

}
