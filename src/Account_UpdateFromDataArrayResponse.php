<?php

namespace Economic;

class Account_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfAccountHandle $Account_UpdateFromDataArrayResult
     */
    protected $Account_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfAccountHandle $Account_UpdateFromDataArrayResult
     */
    public function __construct($Account_UpdateFromDataArrayResult)
    {
      $this->Account_UpdateFromDataArrayResult = $Account_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getAccount_UpdateFromDataArrayResult()
    {
      return $this->Account_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfAccountHandle $Account_UpdateFromDataArrayResult
     * @return \Economic\Account_UpdateFromDataArrayResponse
     */
    public function setAccount_UpdateFromDataArrayResult($Account_UpdateFromDataArrayResult)
    {
      $this->Account_UpdateFromDataArrayResult = $Account_UpdateFromDataArrayResult;
      return $this;
    }

}
