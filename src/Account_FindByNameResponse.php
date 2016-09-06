<?php

namespace Economic;

class Account_FindByNameResponse
{

    /**
     * @var ArrayOfAccountHandle $Account_FindByNameResult
     */
    protected $Account_FindByNameResult = null;

    /**
     * @param ArrayOfAccountHandle $Account_FindByNameResult
     */
    public function __construct($Account_FindByNameResult)
    {
      $this->Account_FindByNameResult = $Account_FindByNameResult;
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getAccount_FindByNameResult()
    {
      return $this->Account_FindByNameResult;
    }

    /**
     * @param ArrayOfAccountHandle $Account_FindByNameResult
     * @return \Economic\Account_FindByNameResponse
     */
    public function setAccount_FindByNameResult($Account_FindByNameResult)
    {
      $this->Account_FindByNameResult = $Account_FindByNameResult;
      return $this;
    }

}
