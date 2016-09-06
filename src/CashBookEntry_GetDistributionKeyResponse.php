<?php

namespace Economic;

class CashBookEntry_GetDistributionKeyResponse
{

    /**
     * @var DistributionKeyHandle $CashBookEntry_GetDistributionKeyResult
     */
    protected $CashBookEntry_GetDistributionKeyResult = null;

    /**
     * @param DistributionKeyHandle $CashBookEntry_GetDistributionKeyResult
     */
    public function __construct($CashBookEntry_GetDistributionKeyResult)
    {
      $this->CashBookEntry_GetDistributionKeyResult = $CashBookEntry_GetDistributionKeyResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getCashBookEntry_GetDistributionKeyResult()
    {
      return $this->CashBookEntry_GetDistributionKeyResult;
    }

    /**
     * @param DistributionKeyHandle $CashBookEntry_GetDistributionKeyResult
     * @return \Economic\CashBookEntry_GetDistributionKeyResponse
     */
    public function setCashBookEntry_GetDistributionKeyResult($CashBookEntry_GetDistributionKeyResult)
    {
      $this->CashBookEntry_GetDistributionKeyResult = $CashBookEntry_GetDistributionKeyResult;
      return $this;
    }

}
