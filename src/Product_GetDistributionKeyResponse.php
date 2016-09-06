<?php

namespace Economic;

class Product_GetDistributionKeyResponse
{

    /**
     * @var DistributionKeyHandle $Product_GetDistributionKeyResult
     */
    protected $Product_GetDistributionKeyResult = null;

    /**
     * @param DistributionKeyHandle $Product_GetDistributionKeyResult
     */
    public function __construct($Product_GetDistributionKeyResult)
    {
      $this->Product_GetDistributionKeyResult = $Product_GetDistributionKeyResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getProduct_GetDistributionKeyResult()
    {
      return $this->Product_GetDistributionKeyResult;
    }

    /**
     * @param DistributionKeyHandle $Product_GetDistributionKeyResult
     * @return \Economic\Product_GetDistributionKeyResponse
     */
    public function setProduct_GetDistributionKeyResult($Product_GetDistributionKeyResult)
    {
      $this->Product_GetDistributionKeyResult = $Product_GetDistributionKeyResult;
      return $this;
    }

}
