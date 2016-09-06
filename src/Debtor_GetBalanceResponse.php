<?php

namespace Economic;

class Debtor_GetBalanceResponse
{

    /**
     * @var float $Debtor_GetBalanceResult
     */
    protected $Debtor_GetBalanceResult = null;

    /**
     * @param float $Debtor_GetBalanceResult
     */
    public function __construct($Debtor_GetBalanceResult)
    {
      $this->Debtor_GetBalanceResult = $Debtor_GetBalanceResult;
    }

    /**
     * @return float
     */
    public function getDebtor_GetBalanceResult()
    {
      return $this->Debtor_GetBalanceResult;
    }

    /**
     * @param float $Debtor_GetBalanceResult
     * @return \Economic\Debtor_GetBalanceResponse
     */
    public function setDebtor_GetBalanceResult($Debtor_GetBalanceResult)
    {
      $this->Debtor_GetBalanceResult = $Debtor_GetBalanceResult;
      return $this;
    }

}
