<?php

namespace Economic;

class ProductPrice_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfProductPriceHandle $ProductPrice_UpdateFromDataArrayResult
     */
    protected $ProductPrice_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_UpdateFromDataArrayResult
     */
    public function __construct($ProductPrice_UpdateFromDataArrayResult)
    {
      $this->ProductPrice_UpdateFromDataArrayResult = $ProductPrice_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfProductPriceHandle
     */
    public function getProductPrice_UpdateFromDataArrayResult()
    {
      return $this->ProductPrice_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_UpdateFromDataArrayResult
     * @return \Economic\ProductPrice_UpdateFromDataArrayResponse
     */
    public function setProductPrice_UpdateFromDataArrayResult($ProductPrice_UpdateFromDataArrayResult)
    {
      $this->ProductPrice_UpdateFromDataArrayResult = $ProductPrice_UpdateFromDataArrayResult;
      return $this;
    }

}
