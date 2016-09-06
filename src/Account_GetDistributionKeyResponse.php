<?php

namespace Economic;

class Account_GetDistributionKeyResponse
{

    /**
     * @var DistributionKeyHandle $Account_GetDistributionKeyResult
     */
    protected $Account_GetDistributionKeyResult = null;

    /**
     * @param DistributionKeyHandle $Account_GetDistributionKeyResult
     */
    public function __construct($Account_GetDistributionKeyResult)
    {
      $this->Account_GetDistributionKeyResult = $Account_GetDistributionKeyResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getAccount_GetDistributionKeyResult()
    {
      return $this->Account_GetDistributionKeyResult;
    }

    /**
     * @param DistributionKeyHandle $Account_GetDistributionKeyResult
     * @return \Economic\Account_GetDistributionKeyResponse
     */
    public function setAccount_GetDistributionKeyResult($Account_GetDistributionKeyResult)
    {
      $this->Account_GetDistributionKeyResult = $Account_GetDistributionKeyResult;
      return $this;
    }

}
