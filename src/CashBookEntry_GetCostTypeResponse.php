<?php

namespace Economic;

class CashBookEntry_GetCostTypeResponse
{

    /**
     * @var CostTypeHandle $CashBookEntry_GetCostTypeResult
     */
    protected $CashBookEntry_GetCostTypeResult = null;

    /**
     * @param CostTypeHandle $CashBookEntry_GetCostTypeResult
     */
    public function __construct($CashBookEntry_GetCostTypeResult)
    {
      $this->CashBookEntry_GetCostTypeResult = $CashBookEntry_GetCostTypeResult;
    }

    /**
     * @return CostTypeHandle
     */
    public function getCashBookEntry_GetCostTypeResult()
    {
      return $this->CashBookEntry_GetCostTypeResult;
    }

    /**
     * @param CostTypeHandle $CashBookEntry_GetCostTypeResult
     * @return \Economic\CashBookEntry_GetCostTypeResponse
     */
    public function setCashBookEntry_GetCostTypeResult($CashBookEntry_GetCostTypeResult)
    {
      $this->CashBookEntry_GetCostTypeResult = $CashBookEntry_GetCostTypeResult;
      return $this;
    }

}
