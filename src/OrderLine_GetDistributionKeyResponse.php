<?php

namespace Economic;

class OrderLine_GetDistributionKeyResponse
{

    /**
     * @var DistributionKeyHandle $OrderLine_GetDistributionKeyResult
     */
    protected $OrderLine_GetDistributionKeyResult = null;

    /**
     * @param DistributionKeyHandle $OrderLine_GetDistributionKeyResult
     */
    public function __construct($OrderLine_GetDistributionKeyResult)
    {
      $this->OrderLine_GetDistributionKeyResult = $OrderLine_GetDistributionKeyResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getOrderLine_GetDistributionKeyResult()
    {
      return $this->OrderLine_GetDistributionKeyResult;
    }

    /**
     * @param DistributionKeyHandle $OrderLine_GetDistributionKeyResult
     * @return \Economic\OrderLine_GetDistributionKeyResponse
     */
    public function setOrderLine_GetDistributionKeyResult($OrderLine_GetDistributionKeyResult)
    {
      $this->OrderLine_GetDistributionKeyResult = $OrderLine_GetDistributionKeyResult;
      return $this;
    }

}
