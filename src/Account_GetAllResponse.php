<?php

namespace Economic;

class Account_GetAllResponse
{

    /**
     * @var ArrayOfAccountHandle $Account_GetAllResult
     */
    protected $Account_GetAllResult = null;

    /**
     * @param ArrayOfAccountHandle $Account_GetAllResult
     */
    public function __construct($Account_GetAllResult)
    {
      $this->Account_GetAllResult = $Account_GetAllResult;
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getAccount_GetAllResult()
    {
      return $this->Account_GetAllResult;
    }

    /**
     * @param ArrayOfAccountHandle $Account_GetAllResult
     * @return \Economic\Account_GetAllResponse
     */
    public function setAccount_GetAllResult($Account_GetAllResult)
    {
      $this->Account_GetAllResult = $Account_GetAllResult;
      return $this;
    }

}
