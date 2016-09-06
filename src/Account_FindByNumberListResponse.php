<?php

namespace Economic;

class Account_FindByNumberListResponse
{

    /**
     * @var ArrayOfAccountHandle $Account_FindByNumberListResult
     */
    protected $Account_FindByNumberListResult = null;

    /**
     * @param ArrayOfAccountHandle $Account_FindByNumberListResult
     */
    public function __construct($Account_FindByNumberListResult)
    {
      $this->Account_FindByNumberListResult = $Account_FindByNumberListResult;
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getAccount_FindByNumberListResult()
    {
      return $this->Account_FindByNumberListResult;
    }

    /**
     * @param ArrayOfAccountHandle $Account_FindByNumberListResult
     * @return \Economic\Account_FindByNumberListResponse
     */
    public function setAccount_FindByNumberListResult($Account_FindByNumberListResult)
    {
      $this->Account_FindByNumberListResult = $Account_FindByNumberListResult;
      return $this;
    }

}
