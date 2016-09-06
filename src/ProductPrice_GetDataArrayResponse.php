<?php

namespace Economic;

class ProductPrice_GetDataArrayResponse
{

    /**
     * @var ArrayOfProductPriceData $ProductPrice_GetDataArrayResult
     */
    protected $ProductPrice_GetDataArrayResult = null;

    /**
     * @param ArrayOfProductPriceData $ProductPrice_GetDataArrayResult
     */
    public function __construct($ProductPrice_GetDataArrayResult)
    {
      $this->ProductPrice_GetDataArrayResult = $ProductPrice_GetDataArrayResult;
    }

    /**
     * @return ArrayOfProductPriceData
     */
    public function getProductPrice_GetDataArrayResult()
    {
      return $this->ProductPrice_GetDataArrayResult;
    }

    /**
     * @param ArrayOfProductPriceData $ProductPrice_GetDataArrayResult
     * @return \Economic\ProductPrice_GetDataArrayResponse
     */
    public function setProductPrice_GetDataArrayResult($ProductPrice_GetDataArrayResult)
    {
      $this->ProductPrice_GetDataArrayResult = $ProductPrice_GetDataArrayResult;
      return $this;
    }

}
