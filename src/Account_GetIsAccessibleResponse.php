<?php

namespace Economic;

class Account_GetIsAccessibleResponse
{

    /**
     * @var boolean $Account_GetIsAccessibleResult
     */
    protected $Account_GetIsAccessibleResult = null;

    /**
     * @param boolean $Account_GetIsAccessibleResult
     */
    public function __construct($Account_GetIsAccessibleResult)
    {
      $this->Account_GetIsAccessibleResult = $Account_GetIsAccessibleResult;
    }

    /**
     * @return boolean
     */
    public function getAccount_GetIsAccessibleResult()
    {
      return $this->Account_GetIsAccessibleResult;
    }

    /**
     * @param boolean $Account_GetIsAccessibleResult
     * @return \Economic\Account_GetIsAccessibleResponse
     */
    public function setAccount_GetIsAccessibleResult($Account_GetIsAccessibleResult)
    {
      $this->Account_GetIsAccessibleResult = $Account_GetIsAccessibleResult;
      return $this;
    }

}
