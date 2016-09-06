<?php

namespace Economic;

class Account_GetNameResponse
{

    /**
     * @var string $Account_GetNameResult
     */
    protected $Account_GetNameResult = null;

    /**
     * @param string $Account_GetNameResult
     */
    public function __construct($Account_GetNameResult)
    {
      $this->Account_GetNameResult = $Account_GetNameResult;
    }

    /**
     * @return string
     */
    public function getAccount_GetNameResult()
    {
      return $this->Account_GetNameResult;
    }

    /**
     * @param string $Account_GetNameResult
     * @return \Economic\Account_GetNameResponse
     */
    public function setAccount_GetNameResult($Account_GetNameResult)
    {
      $this->Account_GetNameResult = $Account_GetNameResult;
      return $this;
    }

}
