<?php

namespace Economic;

class DebtorEntry_GetAmountResponse
{

    /**
     * @var float $DebtorEntry_GetAmountResult
     */
    protected $DebtorEntry_GetAmountResult = null;

    /**
     * @param float $DebtorEntry_GetAmountResult
     */
    public function __construct($DebtorEntry_GetAmountResult)
    {
      $this->DebtorEntry_GetAmountResult = $DebtorEntry_GetAmountResult;
    }

    /**
     * @return float
     */
    public function getDebtorEntry_GetAmountResult()
    {
      return $this->DebtorEntry_GetAmountResult;
    }

    /**
     * @param float $DebtorEntry_GetAmountResult
     * @return \Economic\DebtorEntry_GetAmountResponse
     */
    public function setDebtorEntry_GetAmountResult($DebtorEntry_GetAmountResult)
    {
      $this->DebtorEntry_GetAmountResult = $DebtorEntry_GetAmountResult;
      return $this;
    }

}
