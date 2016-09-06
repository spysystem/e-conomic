<?php

namespace Economic;

class Debtor_GetCreditMaximumResponse
{

    /**
     * @var float $Debtor_GetCreditMaximumResult
     */
    protected $Debtor_GetCreditMaximumResult = null;

    /**
     * @param float $Debtor_GetCreditMaximumResult
     */
    public function __construct($Debtor_GetCreditMaximumResult)
    {
      $this->Debtor_GetCreditMaximumResult = $Debtor_GetCreditMaximumResult;
    }

    /**
     * @return float
     */
    public function getDebtor_GetCreditMaximumResult()
    {
      return $this->Debtor_GetCreditMaximumResult;
    }

    /**
     * @param float $Debtor_GetCreditMaximumResult
     * @return \Economic\Debtor_GetCreditMaximumResponse
     */
    public function setDebtor_GetCreditMaximumResult($Debtor_GetCreditMaximumResult)
    {
      $this->Debtor_GetCreditMaximumResult = $Debtor_GetCreditMaximumResult;
      return $this;
    }

}
