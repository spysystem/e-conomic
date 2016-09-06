<?php

namespace Economic;

class CostType_GetVatAccountResponse
{

    /**
     * @var VatAccountHandle $CostType_GetVatAccountResult
     */
    protected $CostType_GetVatAccountResult = null;

    /**
     * @param VatAccountHandle $CostType_GetVatAccountResult
     */
    public function __construct($CostType_GetVatAccountResult)
    {
      $this->CostType_GetVatAccountResult = $CostType_GetVatAccountResult;
    }

    /**
     * @return VatAccountHandle
     */
    public function getCostType_GetVatAccountResult()
    {
      return $this->CostType_GetVatAccountResult;
    }

    /**
     * @param VatAccountHandle $CostType_GetVatAccountResult
     * @return \Economic\CostType_GetVatAccountResponse
     */
    public function setCostType_GetVatAccountResult($CostType_GetVatAccountResult)
    {
      $this->CostType_GetVatAccountResult = $CostType_GetVatAccountResult;
      return $this;
    }

}
