<?php

namespace Economic;

class Account_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfAccountHandle $Account_CreateFromDataArrayResult
     */
    protected $Account_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfAccountHandle $Account_CreateFromDataArrayResult
     */
    public function __construct($Account_CreateFromDataArrayResult)
    {
      $this->Account_CreateFromDataArrayResult = $Account_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getAccount_CreateFromDataArrayResult()
    {
      return $this->Account_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfAccountHandle $Account_CreateFromDataArrayResult
     * @return \Economic\Account_CreateFromDataArrayResponse
     */
    public function setAccount_CreateFromDataArrayResult($Account_CreateFromDataArrayResult)
    {
      $this->Account_CreateFromDataArrayResult = $Account_CreateFromDataArrayResult;
      return $this;
    }

}
