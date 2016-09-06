<?php

namespace Economic;

class Account_GetNumberResponse
{

    /**
     * @var int $Account_GetNumberResult
     */
    protected $Account_GetNumberResult = null;

    /**
     * @param int $Account_GetNumberResult
     */
    public function __construct($Account_GetNumberResult)
    {
      $this->Account_GetNumberResult = $Account_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getAccount_GetNumberResult()
    {
      return $this->Account_GetNumberResult;
    }

    /**
     * @param int $Account_GetNumberResult
     * @return \Economic\Account_GetNumberResponse
     */
    public function setAccount_GetNumberResult($Account_GetNumberResult)
    {
      $this->Account_GetNumberResult = $Account_GetNumberResult;
      return $this;
    }

}
