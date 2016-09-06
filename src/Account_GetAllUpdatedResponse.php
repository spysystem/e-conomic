<?php

namespace Economic;

class Account_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfAccountHandle $Account_GetAllUpdatedResult
     */
    protected $Account_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfAccountHandle $Account_GetAllUpdatedResult
     */
    public function __construct($Account_GetAllUpdatedResult)
    {
      $this->Account_GetAllUpdatedResult = $Account_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getAccount_GetAllUpdatedResult()
    {
      return $this->Account_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfAccountHandle $Account_GetAllUpdatedResult
     * @return \Economic\Account_GetAllUpdatedResponse
     */
    public function setAccount_GetAllUpdatedResult($Account_GetAllUpdatedResult)
    {
      $this->Account_GetAllUpdatedResult = $Account_GetAllUpdatedResult;
      return $this;
    }

}
