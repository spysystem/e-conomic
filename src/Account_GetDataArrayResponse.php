<?php

namespace Economic;

class Account_GetDataArrayResponse
{

    /**
     * @var ArrayOfAccountData $Account_GetDataArrayResult
     */
    protected $Account_GetDataArrayResult = null;

    /**
     * @param ArrayOfAccountData $Account_GetDataArrayResult
     */
    public function __construct($Account_GetDataArrayResult)
    {
      $this->Account_GetDataArrayResult = $Account_GetDataArrayResult;
    }

    /**
     * @return ArrayOfAccountData
     */
    public function getAccount_GetDataArrayResult()
    {
      return $this->Account_GetDataArrayResult;
    }

    /**
     * @param ArrayOfAccountData $Account_GetDataArrayResult
     * @return \Economic\Account_GetDataArrayResponse
     */
    public function setAccount_GetDataArrayResult($Account_GetDataArrayResult)
    {
      $this->Account_GetDataArrayResult = $Account_GetDataArrayResult;
      return $this;
    }

}
