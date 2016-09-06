<?php

namespace Economic;

class Debtor_GetPriceGroupResponse
{

    /**
     * @var PriceGroupHandle $Debtor_GetPriceGroupResult
     */
    protected $Debtor_GetPriceGroupResult = null;

    /**
     * @param PriceGroupHandle $Debtor_GetPriceGroupResult
     */
    public function __construct($Debtor_GetPriceGroupResult)
    {
      $this->Debtor_GetPriceGroupResult = $Debtor_GetPriceGroupResult;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getDebtor_GetPriceGroupResult()
    {
      return $this->Debtor_GetPriceGroupResult;
    }

    /**
     * @param PriceGroupHandle $Debtor_GetPriceGroupResult
     * @return \Economic\Debtor_GetPriceGroupResponse
     */
    public function setDebtor_GetPriceGroupResult($Debtor_GetPriceGroupResult)
    {
      $this->Debtor_GetPriceGroupResult = $Debtor_GetPriceGroupResult;
      return $this;
    }

}
