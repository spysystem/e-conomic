<?php

namespace Economic;

class CreditorEntry_GetAmountResponse
{

    /**
     * @var float $CreditorEntry_GetAmountResult
     */
    protected $CreditorEntry_GetAmountResult = null;

    /**
     * @param float $CreditorEntry_GetAmountResult
     */
    public function __construct($CreditorEntry_GetAmountResult)
    {
      $this->CreditorEntry_GetAmountResult = $CreditorEntry_GetAmountResult;
    }

    /**
     * @return float
     */
    public function getCreditorEntry_GetAmountResult()
    {
      return $this->CreditorEntry_GetAmountResult;
    }

    /**
     * @param float $CreditorEntry_GetAmountResult
     * @return \Economic\CreditorEntry_GetAmountResponse
     */
    public function setCreditorEntry_GetAmountResult($CreditorEntry_GetAmountResult)
    {
      $this->CreditorEntry_GetAmountResult = $CreditorEntry_GetAmountResult;
      return $this;
    }

}
